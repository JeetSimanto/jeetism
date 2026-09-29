const ParticleSystem = {
    canvas: null,
    ctx: null,
    particles: [],
    mouse: { x: null, y: null, radius: 100 },
    colors: ['rgba(255, 215, 0, 0.6)', 'rgba(255, 215, 0, 0.3)', 'rgba(0, 212, 255, 0.6)', 'rgba(0, 212, 255, 0.3)'],

    init() {
        this.canvas = document.getElementById('particles-canvas');
        if (!this.canvas) return;
        this.ctx = this.canvas.getContext('2d');
        
        this.handleResize();
        window.addEventListener('resize', () => this.handleResize());
        
        window.addEventListener('mousemove', (e) => {
            this.mouse.x = e.x;
            this.mouse.y = e.y;
        });

        window.addEventListener('mouseout', () => {
            this.mouse.x = null;
            this.mouse.y = null;
        });

        this.createParticles();
        this.animate();
    },

    handleResize() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        this.createParticles();
    },

    createParticles() {
        this.particles = [];
        const numParticles = Math.floor((this.canvas.width * this.canvas.height) / 10000);
        const maxParticles = Math.min(Math.max(numParticles, 80), 100);

        for (let i = 0; i < maxParticles; i++) {
            const radius = Math.random() * 2 + 1;
            const x = Math.random() * (this.canvas.width - radius * 2) + radius;
            const y = Math.random() * (this.canvas.height - radius * 2) + radius;
            const velocityX = (Math.random() - 0.5) * 1.5;
            const velocityY = (Math.random() - 0.5) * 1.5;
            const color = this.colors[Math.floor(Math.random() * this.colors.length)];
            
            this.particles.push({ x, y, radius, velocityX, velocityY, color, baseX: x, baseY: y });
        }
    },

    drawParticle(p) {
        this.ctx.beginPath();
        this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        this.ctx.fillStyle = p.color;
        this.ctx.fill();
        this.ctx.closePath();
    },

    connectParticles() {
        for (let a = 0; a < this.particles.length; a++) {
            for (let b = a; b < this.particles.length; b++) {
                const dx = this.particles[a].x - this.particles[b].x;
                const dy = this.particles[a].y - this.particles[b].y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < 150) {
                    const opacity = 1 - (distance / 150);
                    this.ctx.strokeStyle = `rgba(255, 255, 255, ${opacity * 0.15})`;
                    this.ctx.lineWidth = 1;
                    this.ctx.beginPath();
                    this.ctx.moveTo(this.particles[a].x, this.particles[a].y);
                    this.ctx.lineTo(this.particles[b].x, this.particles[b].y);
                    this.ctx.stroke();
                }
            }
        }
    },

    animate() {
        requestAnimationFrame(() => this.animate());
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

        for (let i = 0; i < this.particles.length; i++) {
            let p = this.particles[i];

            // Movement
            p.x += p.velocityX;
            p.y += p.velocityY;

            // Bounce off edges
            if (p.x + p.radius > this.canvas.width || p.x - p.radius < 0) p.velocityX = -p.velocityX;
            if (p.y + p.radius > this.canvas.height || p.y - p.radius < 0) p.velocityY = -p.velocityY;

            // Mouse interaction
            if (this.mouse.x != null && this.mouse.y != null) {
                let dx = this.mouse.x - p.x;
                let dy = this.mouse.y - p.y;
                let distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < this.mouse.radius) {
                    const forceDirectionX = dx / distance;
                    const forceDirectionY = dy / distance;
                    const force = (this.mouse.radius - distance) / this.mouse.radius;
                    
                    p.x -= forceDirectionX * force * 5;
                    p.y -= forceDirectionY * force * 5;
                }
            }

            this.drawParticle(p);
        }

        this.connectParticles();
    }
};

document.addEventListener('DOMContentLoaded', () => ParticleSystem.init());
