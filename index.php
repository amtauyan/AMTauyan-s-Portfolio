<?php
// Simple contact form handler
$contactStatus = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        $to = 'your.email@example.com'; // TODO: replace with your email
        $subject = 'New inquiry from portfolio contact form';
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";
        $headers = "From: noreply@yourdomain.com\r\nReply-To: $email\r\n";
        if (@mail($to, $subject, $body, $headers)) {
            $contactStatus = 'success';
        } else {
            $contactStatus = 'error';
        }
    } else {
        $contactStatus = 'invalid';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>Angela Tauyan's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo" data-aos="zoom-in" data-aos-duration="1000">
                <span>Angela Tauyan</span>
            </div>
            <div class="links">
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><a href="#home">Home</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><a href="#about">About</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><a href="#skills">Skills</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><a href="#projects">Projects</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><a href="#education">Educational Background</a></div>
                <div class="link contact-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"><a href="#contact">Contact Us</a></div>
            </div>
            <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
        </div>
        <div class="dropdown">
            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">About Me</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact Us</a>
                <a href="#education">Educational Background</a>
                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
            </div>
        </div>
    </nav>
        <section id="home">
            <div class="home-background"></div>
        </section>
        <section id="about">
            <div class="content about-content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>About Me</h2>
                <div class="about-grid">
                    <div class="about-photo" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                        <img src="polaroids.png" alt="Portrait of Laarni" />
                    </div>
                    <div class="about-text" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <h3>From pixels to protocols — innovation through design and security.</h3>
                        <p>
                        I am an Information Technology graduate specializing in Mobile and Internet 
                        Technology, who is passionate about front-end design and user experience 
                        with a touch of cybersecurity skills.<br><br>
                        
                        Primarily using Figma for wireframing and prototyping and have experience 
                        in developing dynamic websites with CodeIgniter and MySQL. Familiar with 
                        basic web development languages such as HTML, Bootstrap, and PHP. Also, 
                        I am familiar with React Native for mobile development. I have been coding 
                        using Arduino language for basic hardware programming. I also have been taking
                        different certifactions related to cybersecurity in IBM SkillsBuild and Linux Foundation.<br><br>
                        
                        With a growing passion for UI/UX design and cybersecurity, I am willing to 
                        build career in the tech industry that combines creativity and functionality. 
                        </p>
                        <div class="btn-group">
                            <a class="btn-download" href="assets/cv.pdf" download="Angela-Tauyan-CV.pdf" title="Download CV (PDF)">Download Intern Resume                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills">
            <div class="main-container">
                <div class="content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Skills</h2>
                    <div class="skills-container">
                        <div class="skills-group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="0">
                            <h3>Hard Skills</h3>
                            <div class="skill">
                                <span class="skill-label">UI/UX Design</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="73%"></span></div>
                            </div>
                            <div class="skill">
                                <span class="skill-label">Website Development</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="60%"></span></div>
                            </div>
                            <div class="skill">
                                <span class="skill-label">Mobile Development</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="55%"></span></div>
                            </div>
                            <div class="skill">
                                <span class="skill-label">Troubleshooting</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="70%"></span></div>
                            </div>
                        </div>
                        <div class="skills-group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <h3>Soft Skills</h3>
                            <div class="skill">
                                <span class="skill-label">Communication</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="95%"></span></div>
                            </div>
                            <div class="skill">
                                <span class="skill-label">Teamwork</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="97%"></span></div>
                            </div>
                            <div class="skill">
                                <span class="skill-label">Conflict Resolution</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="92%"></span></div>
                            </div>
                            <div class="skill">
                                <span class="skill-label">Work Ethic</span>
                                <div class="skill-bar"><span class="skill-fill" data-percent="98%"></span></div>
                            </div>
                        </div>
                        <div class="skills-group tools-group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <h3>Tools and Languages</h3>
                            <div class="tools-logos">
                                <i class="devicon-canva-original" title="Canva"></i>
                                <i class="devicon-androidstudio-plain" title="Android Studio"></i>
                                <i class="devicon-figma-plain" title="Figma"></i>
                                <i class="devicon-expo-plain colored" title="Expo Go"></i>
                                <i class="devicon-vscode-plain" title="Visual Studio Code"></i>
                                <i class="devicon-arduino-plain" title="Arduino"></i>
                                <i class="devicon-codeigniter-plain" title="CodeIgniter"></i>
                            </div>
                            <div class="tools-logos">
                                <i class="devicon-reactnative-original" title="React Native"></i>
                                <i class="devicon-html5-plain" title="HTML"></i>
                                <i class="devicon-css3-plain" title="CSS"></i>
                                <i class="devicon-mysql-original" title="MySQL"></i>
                                <i class="devicon-javascript-plain" title="Javascript"></i>
                                <i class="devicon-cplusplus-plain" title="C++"></i>
                                <i class="devicon-python-plain" title="Python"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects">
            <div class="main-container">
                <div class="content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Projects</h2>
                    <div class="projects-grid">
                        <div class="project-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                            <div class="project-thumb" data-preview="main.png">
                                <img src="campus.png" alt="CSPC Campus Guide thumbnail">
                                <div class="project-overlay">
                                    <a class="btn-link" href="https://snack.expo.dev/@laanacario/cspc_campusguide" target="_blank" rel="noopener">Open Live</a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h3>CSPC Campus Guide</h3>
                                <p>This app serves as a campus guide for new students. It shows all buildings with pictures and Google Map links, and includes CSPC (Camarines Sur Polytechnic College) contact details. Pure UI/UX, no backend. Note: The mobile application is not in APK; the link redirects to its ExpoGo snack for source files and live view.</p>
                            </div>
                        </div>
                        <div class="project-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                            <div class="project-thumb" data-preview="main.png">
                                <img src="cybertips.png" alt="CSPC Campus Guide thumbnail">
                                <div class="project-overlay">
                                    <a class="btn-link" href="https://github.com/ziiielzn/Cybertips" target="_blank" rel="noopener">Open Live</a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h3>Cybertips</h3>
                                <p>CyberTips Learning Hub is an interactive platform that teaches users essential cybersecurity concepts with engaging lessons and a built-in progress tracker. Note: The website is not hosted; the link redirects to its GitHub repository for source files and project details.</p>
                            </div>
                        </div>
                        <div class="project-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                            <div class="project-thumb" data-preview="main.png">
                                <img src="nabua.png" alt="CSPC Campus Guide thumbnail">
                                <div class="project-overlay">
                                    <a class="btn-link" href="https://www.figma.com/proto/aHPiaGZ5I95SczY8jhvevT/Transportation-App?node-id=2-33&t=xppSj7hC60oK38YK-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1" target="_blank" rel="noopener">Open Live</a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h3>Nabua Express</h3>
                                <p>Nabua Express is a wireframe prototype of a navigation app that allows users to pinpoint destinations and view possible routes, transportation options, fares, and estimated travel times.</p>
                            </div>
                        </div>
                        <div class="project-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                            <div class="project-thumb" data-preview="main.png">
                                <img src="bwp1.png" alt="CSPC Campus Guide thumbnail">
                                <div class="project-overlay">
                                    <a class="btn-link" href="https://www.figma.com/design/LvZExjqfBqroXQtuUlJsJa/Website---High-Fidel?node-id=0-1&p=f&t=U7z8nuZowTFHs5RK-0" target="_blank" rel="noopener">Open Live</a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h3>Bamboo Warriors - Website</h3>
                                <p>Bamboo Warriors - Website is a wireframe prototype for a website called Bamboo Warriors who asked the APC students to redesign their website and add some features. This our group's final effort in redesigning the website of Bamboo Warriors Philippines.</p>
                            </div>
                        </div>
                        <div class="project-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                            <div class="project-thumb" data-preview="main.png">
                                <img src="bwp2.png" alt="CSPC Campus Guide thumbnail">
                                <div class="project-overlay">
                                    <a class="btn-link" href="https://www.figma.com/design/dQvA5VYf9ruH4OaqhQQayR/Bamboo-Warriors-high-fidel" target="_blank" rel="noopener">Open Live</a>
                                </div>
                            </div>
                            <div class="project-info">
                                <h3>Bamboo Warriors - Application</h3>
                                <p>Bamboo Warriors - Application is a proposed wireframe prototype for Bamboo Warrior Philippine's Application UI/UX and this is the prototype made by our team.</p>
                            </div>
                        </div>
                        <div class="project-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="0">
                            <div class="project-info">
                                <h3>Not Hosted Projects</h3>
                                <p>Always On Track - an arduino based health monitoring application. Note: Programmed Arduino</p><br>
                                <p>ParkSense - an arduino based parking moniroting system. Note: Programmed Arduino</p><br>
                                <p>For other small school projects, you can visit my github by clicking the github icon.</p>
                                <a href="https://github.com/amtauyan" style="font-size: 40px;" target="_blank" rel="noopener"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="education">
            <div class="main-container">
                <div class="content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Educational Background</h2>
                    <div class="edu-stack">
                        <div class="edu-group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="400">
                            <div class="edu-year">2022 – 2026</div>
                            <div class="edu-card">
                                <div class="edu-course">College</div>
                                <div class="edu-school">Asia Pacific College</div>
                                <div class="edu-school">Bachelor of Science in Information Technology - Specialization in Mobile and Internet</div>
                                <div class="edu-address">Makati City, Metro Manila</div><br>
                                <div class="edu-address">APC – Microsoft Community, Vice President | SY 2024 - 2025</div>
                                <div class="edu-address">APC – Microsoft Community, Director for Membership | SY 2023 - 2024 </div>
                                <div class="edu-address">APC – Microsoft Community, Membership Associate | SY 2022 – 2023</div>
                                <div class="edu-address">APC - Admission Office, Admission Specialist | SY 2023 – 2025 </div>
                                <div class="edu-address">Campus DEVCON Summit, Volunteer | SY 2023 - 2024 </div> 
                            </div>
                        </div>
                        <div class="edu-group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            <div class="edu-year">2020 – 2022</div>
                            <div class="edu-card">
                                <div class="edu-course">Senior High School</div>
                                <div class="edu-school">Parañaque Science High School</div>
                                <div class="edu-school">Science, Technology, Engineering, and Mathematics (STEM)</div>
                                <div class="edu-address">Parañaque City, Metro Manila</div><br>
                                <div class="edu-address">With High Honors</div>
                            </div>
                        </div>
                        <div class="edu-group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                            <div class="edu-year">2016 – 2020</div>
                            <div class="edu-card">
                                <div class="edu-course">Junior High School</div>
                                <div class="edu-school">Parañaque Science High School</div>
                                <div class="edu-address">Parañaque City, Metro Manila</div><br>
                                <div class="edu-address">With Honors</div>
                            </div>
                        </div>
                        <div class="edu-group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                            <div class="edu-year">2009 – 2016</div>
                            <div class="edu-card">
                                <div class="edu-course">Elementary</div>
                                <div class="edu-school">Immaculate Heart of Mary College - Parañaque</div>
                                <div class="edu-address">Parañaque City, Metro Manila</div><br>
                                <div class="edu-address">Top 9 of the Batch</div>
                            </div>
                        </div>
                        <div class="edu-group" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                            <div class="edu-year">2008 – 2009</div>
                            <div class="edu-card">
                                <div class="edu-course">Pre-school</div>
                                <div class="edu-school">Immaculate Heart of Mary College - Parañaque</div>
                                <div class="edu-address">Parañaque City, Metro Manila</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lightbox for project previews -->
        <div class="lightbox" id="lightbox">
            <span class="close" id="lightboxClose">✕</span>
            <img id="lightboxImg" src="" alt="Preview">
        </div>
        <section id="contact">
            <div class="main-container">
                <div class="content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Contact</h2>
                    <?php if ($contactStatus === 'success'): ?>
                        <div class="contact-alert success">Thank you! Your message has been sent.</div>
                    <?php elseif ($contactStatus === 'error'): ?>
                        <div class="contact-alert error">Sorry, something went wrong. Please try again later.</div>
                    <?php elseif ($contactStatus === 'invalid'): ?>
                        <div class="contact-alert error">Please fill in all fields with a valid email.</div>
                    <?php endif; ?>
                    <div class="contact-grid">
                        <div class="contact-details contact-card" data-aos="fade-right" data-aos-duration="800" style="max-width:640px;margin:0 auto;">
                            <h3>Get in touch</h3>
                            <p class="contact-item"><i class="fa-solid fa-envelope"></i><span class="label">Personal Email</span><span class="value">angeltauyan2@gmail.com</span></p>
                            <p class="contact-item"><i class="fa-solid fa-envelope"></i><span class="label">School Email</span><span class="value">amtauyan@student.apc.edu.ph</span></p>
                            <p class="contact-item"><i class="fa-solid fa-phone"></i><span class="label">Phone</span><span class="value">+63 966 894 7402</span></p>
                            <p class="contact-item"><i class="fa-solid fa-location-dot"></i><span class="label">Location</span><span class="value">Parañaque City, Metro Manila</span></p>
                            <div class="contact-socials">
                                <a href="https://www.instagram.com/anmaetyn2_/" target="_blank" rel="noopener"><i class="fa-brands fa-square-instagram"></i></a>
                                <a href="https://www.facebook.com/Angel.Tauyan2" target="_blank" rel="noopener"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/in/amtauyan/" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/amtauyan" target="_blank" rel="noopener"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({offset:0});
        </script>
        <style>
            /* Cursor trail dots */
            .trail-dot{ position: fixed; width:10px; height:10px; border-radius:50%; pointer-events:none; z-index:0; background: rgba(255,255,255,0.7); box-shadow: 0 0 10px rgba(88,166,255,0.6); }
            /* Keep nav fixed; only lift sections above trail */
            section, .lightbox { position: relative; z-index: 1; }
        </style>
        <script>
            function hamburg(){
                const navbar = document.querySelector(".dropdown")
                navbar.style.transform = "translateY(0px)"
            }
            function cancel(){
                const navbar = document.querySelector(".dropdown")
                navbar.style.transform = "translateY(-500px)"
            }
        </script>
        <script>
            // Animate skill bars when #skills enters viewport; fallback for older browsers
            function fillSkillBars(){
                document.querySelectorAll('#skills .skill-fill').forEach(el => {
                    const pct = el.getAttribute('data-percent') || '0%';
                    el.style.width = pct;
                });
            }

            const skillsSection = document.querySelector('#skills');
            if('IntersectionObserver' in window && skillsSection){
                const skillObserver = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if(entry.isIntersecting){
                            fillSkillBars();
                            obs.disconnect();
                        }
                    });
                }, { threshold: 0.3 });
                skillObserver.observe(skillsSection);
            } else {
                // Fallback: fill after load + slight delay
                window.addEventListener('load', () => setTimeout(fillSkillBars, 300));
            }
        </script>
        <script>
            // Close dropdown when a menu link is clicked (mobile)
            document.querySelectorAll('.dropdown .links a').forEach(a => {
                a.addEventListener('click', () => {
                    const navbar = document.querySelector('.dropdown');
                    navbar.style.transform = 'translateY(-500px)';
                });
            });
        </script>
        <script>
            // Scrollspy: highlight active nav link based on visible section
            (function(){
                const sectionIds = ['home','about','skills','projects','education','contact'];
                const links = Array.from(document.querySelectorAll('nav .links a, .dropdown .links a'));
                const idToLinks = new Map();
                links.forEach(a => {
                    const hash = a.getAttribute('href') || '';
                    if(hash.startsWith('#')){
                        const id = hash.slice(1);
                        if(!idToLinks.has(id)) idToLinks.set(id, []);
                        idToLinks.get(id).push(a);
                    }
                });
                function setActive(id){
                    links.forEach(a => a.classList.remove('active'));
                    (idToLinks.get(id) || []).forEach(a => a.classList.add('active'));
                }
                const observer = new IntersectionObserver((entries) => {
                    // pick the most visible entry
                    let top = null;
                    entries.forEach(e => {
                        if(e.isIntersecting){
                            if(top === null || e.intersectionRatio > top.intersectionRatio){ top = e; }
                        }
                    });
                    if(top && top.target && top.target.id){ setActive(top.target.id); }
                }, { rootMargin: '-20% 0px -70% 0px', threshold: [0.25, 0.5, 0.75] });
                sectionIds.forEach(id => { const el = document.getElementById(id); if(el) observer.observe(el); });
                // Also set active on click
                links.forEach(a => a.addEventListener('click', () => {
                    const hash = a.getAttribute('href') || '';
                    if(hash.startsWith('#')) setActive(hash.slice(1));
                }));
            })();
        </script>
        <script>
            // Simple lightbox for project thumbnails
            (function(){
                const lightbox = document.getElementById('lightbox');
                const img = document.getElementById('lightboxImg');
                const close = document.getElementById('lightboxClose');
                function openLightbox(src){ img.src = src; lightbox.classList.add('open'); }
                function closeLightbox(){ lightbox.classList.remove('open'); img.src = ''; }
                document.querySelectorAll('.project-thumb .btn-preview, .project-thumb img').forEach(el => {
                    el.addEventListener('click', (e) => {
                        const card = e.currentTarget.closest('.project-thumb');
                        const src = card?.getAttribute('data-preview') || card?.querySelector('img')?.src;
                        if(src) openLightbox(src);
                    });
                });
                close.addEventListener('click', closeLightbox);
                lightbox.addEventListener('click', (e) => { if(e.target === lightbox) closeLightbox(); });
                document.addEventListener('keydown', (e) => { if(e.key === 'Escape') closeLightbox(); });
            })();
        </script>
        <script>
            const words = ["Developer","UI/UX Designer","Leader"];
            const twEl = document.getElementById("tw");
            let wordIndex = 0;
            let charCount = 0;
            let deleting = false;

            function typeTick(){
                const current = words[wordIndex];
                if(!deleting){
                    charCount++;
                    twEl.textContent = current.slice(0, charCount);
                    if(charCount === current.length){
                        setTimeout(()=>{ deleting = true; }, 800);
                    }
                } else {
                    charCount--;
                    twEl.textContent = current.slice(0, charCount);
                    if(charCount === 0){
                        deleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                    }
                }
                const delay = deleting ? 60 : 100;
                setTimeout(typeTick, delay);
            }
            typeTick();
        </script>
        <script>
            // Cursor trail (non-glow spotlight replacement)
            (function(){
                const maxDots = 12; // short trail
                const dots = [];
                function createDot(){
                    const d = document.createElement('div');
                    d.className = 'trail-dot';
                    document.body.appendChild(d);
                    return d;
                }
                for(let i=0;i<maxDots;i++){ dots.push(createDot()); }
                let mouseX = 0, mouseY = 0; let raf = null;
                const positions = Array.from({length:maxDots}, () => ({x:0,y:0}));
                function animate(){
                    positions[0].x += (mouseX - positions[0].x) * 0.25;
                    positions[0].y += (mouseY - positions[0].y) * 0.25;
                    for(let i=1;i<maxDots;i++){
                        positions[i].x += (positions[i-1].x - positions[i].x) * 0.25;
                        positions[i].y += (positions[i-1].y - positions[i].y) * 0.25;
                    }
                    dots.forEach((d,i) => {
                        const p = positions[i];
                        d.style.transform = `translate(${p.x-5}px, ${p.y-5}px)`;
                        d.style.opacity = String(1 - i/maxDots);
                    });
                    raf = requestAnimationFrame(animate);
                }
                window.addEventListener('mousemove', e => { mouseX = e.clientX; mouseY = e.clientY; if(!raf) raf = requestAnimationFrame(animate); });
                window.addEventListener('mouseleave', () => { cancelAnimationFrame(raf); raf = null; dots.forEach(d => d.style.opacity = '0'); });
            })();
        </script>
    <footer>
        <div class="footer-content">
            <p>&copy; Angela Tauyan. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>