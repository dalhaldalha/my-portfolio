<?php
require_once 'includes/functions.php';
require_once 'includes/header.php';

$skills = getSkills();
$experience = getExperience();
$projects = getProjects();
?>

<!-- Hero Section -->
<section id="hero">
    <!-- Animated Background Shapes -->
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
    </div>
    
    <div class="container hero-content">
        <div class="hero-text">
            <span class="hero-greeting fade-in">Hi, i'm</span>
            <h1 class="hero-title fade-in" style="animation-delay: 0.1s;">
                <span id="typed-name"></span><span class="cursor">|</span>
            </h1>
            <h2 class="hero-subtitle fade-in" style="animation-delay: 0.2s;">I build things for the web.</h2>
            <p class="hero-desc fade-in" style="animation-delay: 0.3s; color: var(--text-muted); margin-bottom: 2rem; max-width: 500px;">
                I'm a Junior PHP Developer specializing in building (and occasionally designing) exceptional digital experiences. Currently, I'm focused on building accessible, human-centered products.
            </p>
            <div class="hero-cta fade-in" style="animation-delay: 0.4s;">
                <a href="#portfolio" class="btn">Check out my work!</a>
                <a href="#contact" class="btn btn-outline contact-me" style="margin-left: 1rem; border-color: var(--text-muted); color: var(--text-muted);">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><span class="section-number">01.</span> About Me</h2>
        </div>

        <div class="about-grid">
            <div class="about-text">
                <p>Hi, I’m Dalha. I build custom websites using PHP and WordPress, focusing on clean structure, reliable performance, and features that actually fit your needs. I started with WordPress and moved into PHP as I got hooked on creating more flexible, purposeful solutions.</p>
                <p>I care about making websites that feel solid, clear, and easy to use. Whether I’m refining an existing project or building something from scratch, I approach each job with the goal of helping clients feel confident that their site works the way it should.</p>
                <p>Reach out and let’s create something you can rely on.</p>
            
            </div>
                
            <div class="about-image">
                <div class="about-image-wrapper">
                    <img src="assets/images/profile-pic-2.png" alt="Dalha - PHP Developer" class="profile-pic">
                    <div class="image-border"></div>
                </div>
            </div>
                
            
                
        </div>
    </div>
</section>

<!-- My Skills Section -->
<section id="skills" class="skills-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><span class="section-number">03.</span> My Skills</h2>
        </div>

        <div class="skills-grid">
            <?php 
            $allSkills = getSkills();
            $flatSkills = array_merge($allSkills['Backend'], $allSkills['Frontend'], $allSkills['Tools']);
            foreach($flatSkills as $skill): 
            ?>
                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <div class="skill-bar-info">
                            <i class="<?php echo $skill['icon']; ?> skill-icon"></i>
                            <span class="skill-name"><?php echo $skill['name']; ?></span>
                        </div>
                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-level="<?php echo $skill['level']; ?>"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><span class="section-number">02.</span> Where I've Worked</h2>
        </div>

        <div class="timeline">
            <?php foreach($experience as $job): ?>
                <div class="timeline-item">
                    <span class="timeline-year"><?php echo $job['year']; ?></span>
                    <h3 class="timeline-role"><?php echo $job['role']; ?></h3>
                    <div class="timeline-company"><?php echo $job['company']; ?></div>
                    <p class="timeline-desc"><?php echo $job['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><span class="section-number">04.</span> Some Things I've Built</h2>
        </div>

        <div class="projects-grid">
            <?php foreach($projects as $project): ?>
                <div class="project-card" data-id="<?php echo $project['id']; ?>">
                    <div class="project-image">
                        <?php if(!empty($project['images'])): ?>
                            <img src="<?php echo $project['images'][0]; ?>" alt="<?php echo $project['title']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else: ?>
                            <i class="fas fa-folder-open" style="font-size: 3rem; opacity: 0.5;"></i>
                        <?php endif; ?>
                    </div>
                    <div class="project-content">
                        <span class="project-cat"><?php echo $project['category']; ?></span>
                        <h3 class="project-title"><?php echo $project['title']; ?></h3>
                        <p class="project-desc"><?php echo $project['desc']; ?></p>
                        <button class="project-link view-project-btn" 
                                data-title="<?php echo htmlspecialchars($project['title']); ?>"
                                data-category="<?php echo htmlspecialchars($project['category']); ?>"
                                data-details="<?php echo htmlspecialchars($project['details']); ?>"
                                data-tech="<?php echo htmlspecialchars(json_encode($project['tech_stack'])); ?>"
                                data-images="<?php echo htmlspecialchars(json_encode($project['images'])); ?>"
                                data-link="<?php echo $project['link']; ?>">
                            View Project <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section id="contact">
    <div class="container contact-content">
        <span class="section-number" style="color: var(--accent); font-family: var(--font-mono);">05. What's Next?</span>
        <h2 class="hero-title" style="font-size: 3rem; margin: 1rem 0;">Get In Touch</h2>
        <p class="contact-text">
            I’m always open to new projects, collaborations, or opportunities to build something meaningful. Whether you have a question, an idea, or you’re ready to start a project, feel free to reach out.
            <br> <br>
            You can contact me anytime by email and I’ll get back to you as soon as possible.
        </p>
        <a href="mailto:<?php echo SITE_EMAIL; ?>" class="btn">Say Hello</a>
    </div>
</section>

<!-- Project Detail Modal -->
<div id="project-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        
        <div class="modal-body">
            <div class="modal-image-container">
                <div class="carousel-container">
                    <div class="carousel-track" id="modal-carousel-track">
                        <!-- Images injected via JS -->
                    </div>
                    <button class="carousel-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-btn next-btn"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots" id="modal-carousel-dots"></div>
                </div>
            </div>
            
            <div class="modal-info">
                <span class="modal-category" id="modal-category"></span>
                <h2 class="modal-title" id="modal-title"></h2>
                
                <div class="modal-tech-stack" id="modal-tech-stack">
                    <!-- Tech tags injected via JS -->
                </div>
                
                <div class="modal-desc">
                    <p id="modal-details"></p>
                </div>
                
                <a href="#" class="btn modal-link" id="modal-link" target="_blank">Visit Site <i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>