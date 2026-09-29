<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEETISM — Portfolio</title>
    <meta name="description" content="Jeetism — Creative Developer Portfolio. Full-Stack Developer, UI/UX Designer, and Creative Problem Solver.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <!-- Particle Canvas Background -->
    <canvas id="particles-canvas"></canvas>

    <!-- Scroll Progress Bar -->
    <div id="scrollProgress" class="scroll-progress"></div>

    <!-- Custom Cursor -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- Loader -->
    <div id="loader">
        <div class="loader-inner">
            <div class="loader-text">
                <span>J</span><span>E</span><span>E</span><span>T</span><span>I</span><span>S</span><span>M</span>
            </div>
            <div class="loader-bar">
                <div class="loader-bar-fill"></div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="#hero" class="nav-logo">
                <span class="logo-bracket">&lt;</span>
                <span class="logo-text">JEETISM</span>
                <span class="logo-bracket">/&gt;</span>
            </a>
            <ul class="nav-links">
                <li><a href="#hero" class="nav-link active" data-section="hero">Home</a></li>
                <li><a href="#about" class="nav-link" data-section="about">About</a></li>
                <li><a href="#skills" class="nav-link" data-section="skills">Skills</a></li>
                <li><a href="#projects" class="nav-link" data-section="projects">Projects</a></li>
                <li><a href="#experience" class="nav-link" data-section="experience">Experience</a></li>
                <li><a href="#contact" class="nav-link" data-section="contact">Contact</a></li>
            </ul>
            <div class="nav-hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-links">
            <li><a href="#hero" class="mobile-link">Home</a></li>
            <li><a href="#about" class="mobile-link">About</a></li>
            <li><a href="#skills" class="mobile-link">Skills</a></li>
            <li><a href="#projects" class="mobile-link">Projects</a></li>
            <li><a href="#experience" class="mobile-link">Experience</a></li>
            <li><a href="#contact" class="mobile-link">Contact</a></li>
        </ul>
    </div>

    <!-- ==================== HERO SECTION ==================== -->
    <section id="hero" class="section hero-section">
        <div class="hero-content">
            <div class="hero-badge animate-on-scroll">
                <span class="badge-dot"></span>
                Available for work
            </div>
            <h1 class="hero-title animate-on-scroll">
                <span class="hero-greeting">Hello, I'm</span>
                <span class="hero-name glitch" data-text="JEETISM">JEETISM</span>
                <span class="hero-role">
                    <span class="typed-text" id="typedText"></span>
                    <span class="typed-cursor">|</span>
                </span>
            </h1>
            <p class="hero-description animate-on-scroll">
                I craft digital experiences that merge creativity with cutting-edge technology.
                Building the future, one pixel at a time.
            </p>
            <div class="hero-cta animate-on-scroll">
                <a href="#projects" class="btn btn-primary">
                    <span>View My Work</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#contact" class="btn btn-secondary">
                    <span>Let's Talk</span>
                    <i class="fas fa-paper-plane"></i>
                </a>
            </div>
            <div class="hero-stats animate-on-scroll">
                <div class="stat-item">
                    <span class="stat-number" data-count="50">0</span><span class="stat-plus">+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number" data-count="5">0</span><span class="stat-plus">+</span>
                    <span class="stat-label">Years Exp</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number" data-count="30">0</span><span class="stat-plus">+</span>
                    <span class="stat-label">Clients</span>
                </div>
            </div>
        </div>
        <div class="hero-visual animate-on-scroll">
            <div class="hero-avatar-wrapper">
                <div class="avatar-glow"></div>
                <div class="avatar-ring avatar-ring-1"></div>
                <div class="avatar-ring avatar-ring-2"></div>
                <div class="avatar-ring avatar-ring-3"></div>
                <div class="hero-avatar">
                    <i class="fas fa-code hero-icon"></i>
                </div>
                <div class="floating-badge fb-1"><i class="fab fa-react"></i></div>
                <div class="floating-badge fb-2"><i class="fab fa-node-js"></i></div>
                <div class="floating-badge fb-3"><i class="fab fa-python"></i></div>
                <div class="floating-badge fb-4"><i class="fab fa-figma"></i></div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="mouse-wheel"></div>
            </div>
            <span>Scroll Down</span>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">&lt;about&gt;</span>
                <h2 class="section-title">About <span class="highlight">Me</span></h2>
                <div class="section-line"></div>
            </div>
            <div class="about-grid">
                <div class="about-image animate-on-scroll">
                    <div class="about-img-wrapper">
                        <div class="about-img-border"></div>
                        <div class="about-img-content">
                            <i class="fas fa-user-astronaut about-icon"></i>
                        </div>
                        <div class="experience-badge">
                            <span class="exp-number">5+</span>
                            <span class="exp-text">Years<br>Experience</span>
                        </div>
                    </div>
                </div>
                <div class="about-content">
                    <h3 class="about-subtitle animate-on-scroll">
                        A passionate developer who loves turning ideas into reality
                    </h3>
                    <p class="about-text animate-on-scroll">
                        I'm a creative full-stack developer with a deep passion for building beautiful,
                        functional, and user-centered digital experiences. With 5+ years of experience
                        in web development, I specialize in creating solutions that are both visually
                        stunning and technically robust.
                    </p>
                    <p class="about-text animate-on-scroll">
                        My journey began with curiosity and has evolved into a career dedicated to
                        pushing the boundaries of what's possible on the web. I believe that great
                        design and clean code go hand in hand.
                    </p>
                    <div class="about-info-grid animate-on-scroll">
                        <div class="about-info-item">
                            <span class="info-label">Name</span>
                            <span class="info-value">Jeetism</span>
                        </div>
                        <div class="about-info-item">
                            <span class="info-label">Email</span>
                            <span class="info-value">hello@jeetism.dev</span>
                        </div>
                        <div class="about-info-item">
                            <span class="info-label">Location</span>
                            <span class="info-value">Bangladesh</span>
                        </div>
                        <div class="about-info-item">
                            <span class="info-label">Freelance</span>
                            <span class="info-value available">Available</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary animate-on-scroll">
                        <span>Download CV</span>
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="section-close animate-on-scroll">
                <span class="section-tag">&lt;/about&gt;</span>
            </div>
        </div>
    </section>

    <!-- ==================== SKILLS SECTION ==================== -->
    <section id="skills" class="section skills-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">&lt;skills&gt;</span>
                <h2 class="section-title">My <span class="highlight">Skills</span></h2>
                <div class="section-line"></div>
            </div>
            <div class="skills-grid">
                <?php
                $skills = [
                    ['name' => 'HTML5',      'icon' => 'fab fa-html5',       'percent' => 95, 'color' => 'yellow'],
                    ['name' => 'CSS3',       'icon' => 'fab fa-css3-alt',    'percent' => 90, 'color' => 'blue'],
                    ['name' => 'JavaScript', 'icon' => 'fab fa-js-square',   'percent' => 88, 'color' => 'yellow'],
                    ['name' => 'React',      'icon' => 'fab fa-react',       'percent' => 85, 'color' => 'blue'],
                    ['name' => 'Node.js',    'icon' => 'fab fa-node-js',     'percent' => 82, 'color' => 'yellow'],
                    ['name' => 'PHP',        'icon' => 'fab fa-php',         'percent' => 80, 'color' => 'blue'],
                    ['name' => 'Python',     'icon' => 'fab fa-python',      'percent' => 78, 'color' => 'yellow'],
                    ['name' => 'Figma',      'icon' => 'fab fa-figma',       'percent' => 75, 'color' => 'blue'],
                ];
                foreach ($skills as $skill):
                ?>
                <div class="skill-card card-<?= $skill['color'] ?> animate-on-scroll" data-tilt>
                    <div class="skill-card-glow"></div>
                    <div class="skill-icon">
                        <i class="<?= $skill['icon'] ?>"></i>
                    </div>
                    <h3 class="skill-name"><?= $skill['name'] ?></h3>
                    <div class="skill-bar">
                        <div class="skill-bar-fill" data-width="<?= $skill['percent'] ?>"></div>
                    </div>
                    <span class="skill-percent"><?= $skill['percent'] ?>%</span>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="section-close animate-on-scroll">
                <span class="section-tag">&lt;/skills&gt;</span>
            </div>
        </div>
    </section>

    <!-- ==================== PROJECTS SECTION ==================== -->
    <section id="projects" class="section projects-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">&lt;projects&gt;</span>
                <h2 class="section-title">My <span class="highlight">Projects</span></h2>
                <div class="section-line"></div>
            </div>
            <div class="project-filters animate-on-scroll">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web App</button>
                <button class="filter-btn" data-filter="mobile">Mobile</button>
                <button class="filter-btn" data-filter="design">Design</button>
            </div>
            <div class="projects-grid">
                <?php
                $projects = [
                    [
                        'title'    => 'E-Commerce Platform',
                        'desc'     => 'A full-featured online store with real-time inventory, AI recommendations, and seamless checkout.',
                        'icon'     => 'fas fa-shopping-cart',
                        'tags'     => ['React', 'Node.js', 'MongoDB'],
                        'category' => 'web',
                        'color'    => 'yellow',
                    ],
                    [
                        'title'    => 'Fitness Tracker App',
                        'desc'     => 'Mobile app with workout tracking, nutrition logging, and social challenges.',
                        'icon'     => 'fas fa-heartbeat',
                        'tags'     => ['React Native', 'Firebase'],
                        'category' => 'mobile',
                        'color'    => 'blue',
                    ],
                    [
                        'title'    => 'Analytics Dashboard',
                        'desc'     => 'Real-time data visualization dashboard with interactive charts and custom reports.',
                        'icon'     => 'fas fa-chart-line',
                        'tags'     => ['Vue.js', 'D3.js', 'Python'],
                        'category' => 'web',
                        'color'    => 'yellow',
                    ],
                    [
                        'title'    => 'Brand Identity System',
                        'desc'     => 'Complete brand identity including logo, typography, color system, and design guidelines.',
                        'icon'     => 'fas fa-palette',
                        'tags'     => ['Figma', 'Illustrator'],
                        'category' => 'design',
                        'color'    => 'blue',
                    ],
                    [
                        'title'    => 'Real-time Chat App',
                        'desc'     => 'End-to-end encrypted messaging with voice/video calls and group collaboration features.',
                        'icon'     => 'fas fa-comments',
                        'tags'     => ['Socket.io', 'WebRTC', 'React'],
                        'category' => 'web',
                        'color'    => 'yellow',
                    ],
                    [
                        'title'    => 'AI Assistant Bot',
                        'desc'     => 'Intelligent chatbot with NLP capabilities, context awareness, and multi-language support.',
                        'icon'     => 'fas fa-robot',
                        'tags'     => ['Python', 'TensorFlow', 'NLP'],
                        'category' => 'mobile',
                        'color'    => 'blue',
                    ],
                ];
                foreach ($projects as $project):
                ?>
                <div class="project-card card-<?= $project['color'] ?> animate-on-scroll" data-category="<?= $project['category'] ?>" data-tilt>
                    <div class="project-card-glow"></div>
                    <div class="project-image">
                        <div class="project-img-placeholder">
                            <i class="<?= $project['icon'] ?>"></i>
                        </div>
                        <div class="project-overlay">
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title"><?= $project['title'] ?></h3>
                        <p class="project-desc"><?= $project['desc'] ?></p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                            <span class="tag"><?= $tag ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="section-close animate-on-scroll">
                <span class="section-tag">&lt;/projects&gt;</span>
            </div>
        </div>
    </section>

    <!-- ==================== EXPERIENCE SECTION ==================== -->
    <section id="experience" class="section experience-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">&lt;experience&gt;</span>
                <h2 class="section-title">My <span class="highlight">Journey</span></h2>
                <div class="section-line"></div>
            </div>
            <div class="timeline">
                <div class="timeline-line"></div>
                <?php
                $experiences = [
                    [
                        'date'    => '2024 — Present',
                        'title'   => 'Senior Full-Stack Developer',
                        'company' => 'TechVision Inc.',
                        'desc'    => 'Leading development of enterprise-scale web applications. Mentoring junior developers and architecting microservice solutions.',
                        'side'    => 'left',
                        'color'   => 'yellow',
                    ],
                    [
                        'date'    => '2022 — 2024',
                        'title'   => 'Full-Stack Developer',
                        'company' => 'Digital Dynamics',
                        'desc'    => 'Built and maintained multiple client projects using React, Node.js, and cloud services. Improved performance by 40%.',
                        'side'    => 'right',
                        'color'   => 'blue',
                    ],
                    [
                        'date'    => '2021 — 2022',
                        'title'   => 'Frontend Developer',
                        'company' => 'CreativePixel Studio',
                        'desc'    => 'Crafted pixel-perfect responsive interfaces. Specialized in animations and interactive experiences.',
                        'side'    => 'left',
                        'color'   => 'yellow',
                    ],
                    [
                        'date'    => '2019 — 2021',
                        'title'   => 'Junior Developer',
                        'company' => 'StartUp Labs',
                        'desc'    => 'Started my professional journey building web apps. Learned agile methodologies and collaborative development.',
                        'side'    => 'right',
                        'color'   => 'blue',
                    ],
                ];
                foreach ($experiences as $exp):
                ?>
                <div class="timeline-item <?= $exp['side'] ?> animate-on-scroll">
                    <div class="timeline-dot">
                        <div class="dot-pulse"></div>
                    </div>
                    <div class="timeline-card card-<?= $exp['color'] ?>" data-tilt>
                        <div class="timeline-card-glow"></div>
                        <span class="timeline-date"><?= $exp['date'] ?></span>
                        <h3 class="timeline-title"><?= $exp['title'] ?></h3>
                        <h4 class="timeline-company"><?= $exp['company'] ?></h4>
                        <p class="timeline-desc"><?= $exp['desc'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="section-close animate-on-scroll">
                <span class="section-tag">&lt;/experience&gt;</span>
            </div>
        </div>
    </section>

    <!-- ==================== CONTACT SECTION ==================== -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <span class="section-tag">&lt;contact&gt;</span>
                <h2 class="section-title">Get In <span class="highlight">Touch</span></h2>
                <div class="section-line"></div>
            </div>
            <div class="contact-grid">
                <div class="contact-info animate-on-scroll">
                    <h3 class="contact-subtitle">Let's work together</h3>
                    <p class="contact-text">
                        Have a project in mind? Let's create something extraordinary together.
                        I'm always open to discussing new projects, creative ideas, or opportunities.
                    </p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon card-yellow">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <span class="contact-label">Email</span>
                                <span class="contact-value">hello@jeetism.dev</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon card-blue">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <span class="contact-label">Location</span>
                                <span class="contact-value">Bangladesh</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon card-yellow">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <span class="contact-label">Phone</span>
                                <span class="contact-value">+880 1234 567890</span>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
                <form class="contact-form animate-on-scroll" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" class="form-input" placeholder=" " required>
                        <label for="name" class="form-label">Your Name</label>
                        <div class="form-line"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" class="form-input" placeholder=" " required>
                        <label for="email" class="form-label">Your Email</label>
                        <div class="form-line"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" class="form-input" placeholder=" " required>
                        <label for="subject" class="form-label">Subject</label>
                        <div class="form-line"></div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-input form-textarea" placeholder=" " required></textarea>
                        <label for="message" class="form-label">Your Message</label>
                        <div class="form-line"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
            <div class="section-close animate-on-scroll">
                <span class="section-tag">&lt;/contact&gt;</span>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <span class="logo-bracket">&lt;</span>
                    <span class="logo-text">JEETISM</span>
                    <span class="logo-bracket">/&gt;</span>
                </div>
                <p class="footer-text">
                    Designed &amp; Built with <span class="heart">&hearts;</span> by Jeetism
                </p>
                <p class="footer-copyright">
                    &copy; <?php echo date('Y'); ?> JEETISM. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script src="assets/js/particles.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
