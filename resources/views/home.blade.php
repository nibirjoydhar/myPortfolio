<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nibir Joydhar - Portfolio</title>
    <link rel="icon" href="{{ asset('images/portfolio.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        .glass-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .glass-card-2 {
            padding: 1rem;
        }

        body {
            font-family: 'Inter', 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
            padding-top: 80px;
            background: linear-gradient(to right, #f4f7fc, #dbefff);
            /* background-image: radial-gradient(#cbd5e0 1px, transparent 1px);
            background-size: 20px 20px; */
            color: #2d3748;
        }


        /* Header */
        header {
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.4rem;
            color: #3b82f6 !important;
            font-weight: 700;
        }

        /* Hero Section */
        #hero {
            /* background: linear-gradient(135deg,rgb(203, 212, 226) 0%,rgb(153, 142, 179) 100%); */
            color: rgb(0, 0, 0);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%);
            opacity: 0.3;
        }

        #hero img {
            border: 6px solid #ffffff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        #hero img:hover {
            transform: scale(1.05);
        }

        #hero h1 {
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        #hero .lead {
            font-size: 1.25rem;
            font-weight: 400;
        }

        #hero .social-icons a {
            font-size: 1.5rem;
            color: #ffffff;
            transition: color 0.3s ease;
        }

        #hero .social-icons a:hover {
            color: #dbeafe;
        }

        .ls-15 {
            letter-spacing: 15px;
        }

        .ls-5 {
            letter-spacing: 5px;
        }

        .ls-3 {
            letter-spacing: 3px;
        }

        .ls-2 {
            letter-spacing: 2px;
        }

        /* Section Styling */
        section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2.25rem;
            font-weight: 700;
            color: #1f2937;
            border-left: 6px solid #3b82f6;
            padding-left: 15px;
            margin-bottom: 40px;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Default shadow for all cards */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            /* Move up slightly on hover */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            /* Enhanced shadow on hover */
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
        }

        .card-text,
        .card-body p {
            color: #4b5563;
            font-size: 1rem;
        }

        .card-body ul {
            padding-left: 20px;
            color: #4b5563;
        }

        .card-body ul li {
            margin-bottom: 8px;
        }

        /* Skills Section */
        #skills {
            background: linear-gradient(135deg, rgb(219, 238, 255), rgb(244, 249, 252));
            color: #ffffff;
        }

        #skills .card {
            background: rgba(255, 255, 255, 0.95);
        }

        #skills .card-title,
        #skills .card-body ul {
            color: #1f2937;
        }

        /* Projects Section */
        #projects {
            /* background: #f9fafb; */
        }

        #projects .card a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
        }

        #projects .card a:hover {
            text-decoration: underline;
        }

        /* Achievements Section */
        #achievements {
            background: linear-gradient(135deg, rgb(219, 238, 255), rgb(244, 249, 252));
            color: #ffffff;
        }

        #achievements .card {
            background: #ffffff;
        }

        #achievements .btn-primary {
            background-color: #3b82f6;
            border: none;
            border-radius: 8px;
            padding: 6px 12px;
        }

        #achievements .btn-primary:hover {
            background-color: #2563eb;
        }

        /* Contact Section */
        #contact {
            background: #1f2937;
            color: #ffffff;
        }

        #contact p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        #contact i {
            color: #3b82f6;
            margin-right: 10px;
        }

        /* Buttons */
        .btn-custom {
            background-color: #3b82f6;
            color: #ffffff;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #2563eb;
        }

        /* Carousel */
        .carousel-item img {
            border-radius: 12px;
            max-height: 500px;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 10px 20px;
        }

        mark.search-highlight {
            background-color: yellow;
            padding: 0 2px;
        }

        #hero a {
            pointer-events: auto !important;
            cursor: pointer;
            z-index: 10000;
            position: relative;
        }

        .text-justify {
            text-align: justify;
        }

        header {
            transition: transform 0.3s ease;
            /* Smooth transition for sliding */
        }

        header.hidden {
            transform: translateY(-100%);
            /* Moves the header up and out of view */
        }
    </style>
</head>

<body>

    <header class="bg-light header py-4 shadow-sm fixed-top">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <a href="{{ url('/') }}" class="navbar-brand fw-bold text-primary">MyPortfolio</a>
            <!-- Section Links -->
            <div
                class="d-flex align-items-center gap-3 rounded-pill border border-primary px-4 py-2 text-secondary small">
                <a href="#hero" class="text-dark text-decoration-none">Head</a>
                <a href="#about" class="text-dark text-decoration-none">About</a>
                <a href="#skills" class="text-dark text-decoration-none">Skill</a>
                <a href="#projects" class="text-dark text-decoration-none">Project</a>
                <a href="#achievements" class="text-dark text-decoration-none">Achievements</a>
                <a href="#online-judges" class="text-dark text-decoration-none">Online-Judges</a>
                <a href="#contact" class="text-dark text-decoration-none">Contact</a>
            </div>


            <!-- Search Form -->
            <form class="d-flex align-items-center justify-content-end mt-2 mt-md-0"
                onsubmit="highlightAndNavigate(event)">
                <div class="position-relative">
                    <i
                        class="fas fa-search position-absolute top-50 start-0 translate-middle-y ps-3 text-secondary"></i>
                    <input id="searchInput" type="search" class="form-control form-control-sm ps-5 small"
                        placeholder="Search here" style="font-size: 0.875rem;">
                </div>
                <span id="resultInfo" class="text-muted small ms-2 me-2 d-inline-block d-none"
                    style="font-size: 0.75rem;">0 of
                    0</span>

                <button type="button" class="btn btn-sm btn-outline-success me-1 py-0 px-2 d-none" id="prevBtn"
                    style="font-size: 0.75rem;">←</button>
                <button type="button" class="btn btn-sm btn-outline-success me-1 py-0 px-2 d-none" id="nextBtn"
                    style="font-size: 0.75rem;">→</button>
                <button type="button" class="btn btn-sm btn-outline-danger py-0 px-2 d-none" id="clearBtn"
                    style="font-size: 0.75rem;">✕</button>
            </form>
        </div>
    </header>


    <div class="container">
        <!-- Hero Section -->
        <section id="hero" class="container p-5 mt-4 mb-4 glass-card  align-items-center" data-aos="zoom-in">
            <div class="d-flex flex-column flex-md-column">
                <h2
                    class="mx-auto fw-bold ls-15 text-primary max-w-2xl text-center text-4xl font-medium leading-tight tracking-tighter text-text-primary md:text-6xl md:leading-[64px]">
                    Hi! Here's a Glimpse of My Craft</h2>
            </div>
            <div class="d-flex">
                <div class="container d-flex flex-column flex-md-row align-items-center">
                    <img src="{{ asset('images/nibir.png') }}" class="rounded-circle me-md-5 mb-4 mb-md-0" width="150"
                        height="150" alt="Nibir Joydhar" />
                    <div>
                        <h1 class="display-4 ls-5 text-muted mx-auto text-center">I'm Nibir Joydhar</h1>
                        <p class="lead ls-3">Competitive Programmer | Full Stack Developer | Tech Enthusiast</p>
                        <p class="mb-3 text-muted ls-2">Specialist on Codeforces | MERN & Laravel Developer | ICPC &
                            IEEEXtreme Contestant
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-column">
                <div class="d-flex justify-content-center align-items-center gap-5 flex-wrap">
                    <a href="https://linkedin.com/in/nibirjoydhar" class="text-black" target="_blank"><i
                            class="fab fa-linkedin fa-lg"></i></a>
                    <a href="https://github.com/nibirjoydhar" class="text-black" target="_blank"><i
                            class="fab fa-github fa-lg"></i></a>
                    <a href="https://facebook.com/nibirjoydhar" class="text-black" target="_blank"><i
                            class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://instagram.com/nibirjoydhar" class="text-black" target="_blank"><i
                            class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://x.com/NibirJoydhar" target="_blank" class="text-dark"><i class="fab fa-x"></i></a>
                    <a href="mailto:nibirjoydhar@gmail.com" class="text-dark"><i class="fas fa-envelope fa-lg"></i></a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="container row d-flex flex-row flex-wrap mb-2 glass-card-2">
            <!-- Carousel Start -->
            <div id="carouselExampleIndicators" class=" container col-md-7 carousel slide" data-bs-ride="carousel"
                data-bs-interval="2000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/carousul1.jpg') }}" class="d-block w-100 img-fluid"
                            alt="First slide" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousul2.jpg') }}" class="d-block w-100 img-fluid"
                            alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousul3.jpg') }}" class="d-block w-100 img-fluid"
                            alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousul4.jpg') }}" class="d-block w-100 img-fluid"
                            alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousul5.jpg') }}" class="d-block w-100 img-fluid"
                            alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/carousul6.jpg') }}" class="d-block w-100 img-fluid"
                            alt="Second slide" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel End -->

            <!-- About -->
            <div id="about" class="col-md-5 p-3 text-justify" data-aos="fade-up">
                <div class="container">
                    <h2 class="section-title">About Me</h2>
                    <p>I'm a final year CSE student at Jagannath University, passionate about full-stack development and
                        problem-solving.</p>
                    <p>With 3000+ problems solved across platforms like Codeforces, LeetCode, and AtCoder, I actively
                        compete and represent my university in contests.</p>
                    <p>I love building clean, scalable applications and enjoy mentoring, learning, and exploring the
                        latest in tech.</p>
                </div>

            </div>
        </section>


        <!-- Skills Section -->
        <section id="skills" class="p-5 glass-card">
            <div class="container">
                <h2 class="section-title">Skills</h2>
                <div class="row g-4">
                    <!-- Programming Languages -->
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-code me-2"></i>Languages</h5>
                                <ul class="mb-0">
                                    <li>C/C++</li>
                                    <li>Java</li>
                                    <li>Python</li>
                                    <li>PHP</li>
                                    <li>JavaScript</li>
                                    <li>TypeScript</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Frameworks & Libraries -->
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-layer-group me-2"></i>Frameworks & Libraries
                                </h5>
                                <ul class="mb-0">
                                    <li>Laravel</li>
                                    <li>React</li>
                                    <li>Express.js</li>
                                    <li>Django</li>
                                    <li>Bootstrap, Tailwind CSS</li>
                                    <li>jQuery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Databases -->
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-database me-2"></i>Databases</h5>
                                <ul class="mb-0">
                                    <li>MySQL</li>
                                    <li>MongoDB</li>
                                    <li>Firebase</li>
                                    <li>SQL</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- DevOps & Tools -->
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-tools me-2"></i>DevOps & Tools</h5>
                                <ul class="mb-0">
                                    <li>Git, GitHub</li>
                                    <li>Docker, Kubernetes</li>
                                    <li>CI/CD pipelines</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- OS & IDEs -->
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-laptop-code me-2"></i>OS & IDEs</h5>
                                <ul class="mb-0">
                                    <li>Ubuntu, Lubuntu, Windows 7/10/11</li>
                                    <li>VS Code, Sublime Text, CodeBlocks</li>
                                    <li>NetBeans, PyCharm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Soft Skills & Misc -->
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-user-check me-2"></i>Other Skills</h5>
                                <ul class="mb-0">
                                    <li>Problem Solving (2000+ problems solved)</li>
                                    <li>Leadership, Teamwork, Communication</li>
                                    <li>Photo & Video Editing, Graphics Design</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="p-5 glass-card-2 mt-3">
            <div class="container">
                <h2 class="section-title">Projects</h2>
                <div class="row g-4">

                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Job Board</h5>
                                <p>Cloud-based job platform with login, profiles, post/apply jobs.</p>
                                <p><strong>Tech:</strong> PHP, MySQL, Bootstrap, Docker</p>
                                <div class="d-flex justify-content-center align-items-center text-center gap-5">
                                    <a href="http://3.92.1.108:8080/" target="_blank">Live Demo</a>
                                    <a href="https://github.com/nibirjoydhar/job-board" target="_blank">Git repo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Crop Recommendation</h5>
                                <p>Recommends crops based on soil and weather using ML.</p>
                                <p><strong>Tech:</strong> Python (Flask), Docker</p>
                                <div class="d-flex justify-content-center align-items-center text-center gap-5">
                                    <a href="http://13.239.37.214:5000/" target="_blank">Live Demo</a>
                                    <a href="https://github.com/nibirjoydhar/Crop_Recommendation" target="_blank">Git
                                        repo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Todo List</h5>
                                <p>Simple MERN-based todo list with mark/delete features.</p>
                                <p><strong>Tech:</strong> React, Node.js, MongoDB</p>
                                <div class="d-flex justify-content-center align-items-center text-center gap-5">

                                    <a href="http://52.62.105.224:3000/" target="_blank">Live Demo</a>
                                    <a href="https://github.com/nibirjoydhar/TodoList" target="_blank">Git repo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Ride Me</h5>
                                <p>Instant ride-booking app with surge pricing, ratings, and safety features.</p>
                                <p><strong>Tech:</strong> Java, Firebase</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Organic Food</h5>
                                <p>Pure organic food delivery platform with rating and payment.</p>
                                <p><strong>Tech:</strong> PHP, MySQL, JavaScript</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Smart Lock</h5>
                                <p>Fingerprint + mobile-controlled smart lock system.</p>
                                <p><strong>Tech:</strong> Arduino, Java, Solenoid Lock</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Line Following Robot</h5>
                                <p>Autonomous bot that follows lines and avoids obstacles.</p>
                                <p><strong>Tech:</strong> Arduino Uno, IR Sensors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section -->
        <section id="achievements" class="p-5 glass-card">
            <div class="container">
                <h2 class="section-title">Achievements</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title">🥇 JnU Intra Programming Contest 2024</h5>
                                <p class="card-text">Champion</p>
                                <a href="https://toph.co/contests/training/pefv6lt/standings" target="_blank"
                                    class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title">🥇 CSE Sports Carnival 2023</h5>
                                <p class="card-text">Champion</p>
                                <a href="https://vjudge.net/contest/594718#rank" target="_blank"
                                    class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-body">
                                <h5 class="card-title">🥈 IEEEXtreme 17.0</h5>
                                <p class="card-text">2nd in Bangladesh (Global 556) – Team: JnUxTeam</p>
                                <a href="https://ieeextreme.org/ieeextreme-17-0-ranking/" target="_blank"
                                    class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-body">
                                <h5 class="card-title">🏅 IEEEXtreme 18.0</h5>
                                <p class="card-text">4th in Bangladesh (Global 420) – Team: JnUxTeam</p>
                                <a href="https://ieeextreme.org/ieeextreme-18-0-ranking/" target="_blank"
                                    class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="500">
                            <div class="card-body">
                                <h5 class="card-title">🏅 IUT National ICT Fest 2024</h5>
                                <p class="card-text">27th – Team: JnuXTeam</p>
                                <a href="https://toph.co/c/iut-11th-national-ict-fest-2024/standings" target="_blank"
                                    class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="500">
                            <div class="card-body">
                                <h5 class="card-title">🏅 BUET Inter University Programming Contest 2023</h5>
                                <p class="card-text">49th – Team : JnU_ABC</p>
                                <a href="https://toph.co/c/buet-inter-university-2023/standings" target="_blank"
                                    class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="500">
                            <div class="card-body">
                                <h5 class="card-title">🏅 BUET Inter University Programming Contest 2024</h5>
                                <p class="card-text">54th – Team: JnU_Shomonnoyok</p>
                                <a href="https://toph.co/c/inter-university-buet-cse-fest-2024/standings"
                                    target="_blank" class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="600">
                            <div class="card-body">
                                <h5 class="card-title">🏅 ICPC Dhaka Regional 2023</h5>
                                <p class="card-text">99th – Team: JnU_TLE</p>
                                <a href="https://bapsoj.org/contests/icpc-dhaka-regional-site-2023/standings"
                                    target="_blank" class="btn btn-sm btn-primary">View Standing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100" data-aos="fade-up" data-aos-delay="700">
                            <div class="card-body">
                                <h5 class="card-title">📐 National Math Olympiad 2023</h5>
                                <p class="card-text">Participated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Online Judges Section -->
        <section id="online-judges" class="p-5 glass-card-2" data-aos="fade-right">
            <div class="container">
                <h2 class="section-title">Online Judges</h2>
                <div class="row g-4">

                    <!-- Codeforces -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-code fa-2x text-primary mb-3"></i>
                                <h5 class="card-title">Codeforces</h5>
                                <p class="text-muted">Max Rating: <strong>1580</strong> (Specialist)</p>
                                <a href="https://codeforces.com/profile/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-primary">Visit</a>
                            </div>
                        </div>
                    </div>

                    <!-- LeetCode -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-terminal fa-2x text-warning mb-3"></i>
                                <h5 class="card-title">LeetCode</h5>
                                <p class="text-muted">~800+ Problems Solved</p>
                                <a href="https://leetcode.com/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-warning">Visit</a>
                            </div>
                        </div>
                    </div>
                    <!-- CodeChef -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-laptop-code fa-2x text-success mb-3"></i>
                                <h5 class="card-title">CodeChef</h5>
                                <p class="text-muted">Max Rating: <strong>4★</strong></p>
                                <a href="https://www.codechef.com/users/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-success">Visit</a>
                            </div>
                        </div>
                    </div>

                    <!-- AtCoder
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-keyboard fa-2x text-danger mb-3"></i>
                                <h5 class="card-title">AtCoder</h5>
                                <p class="text-muted">Max Rating: <strong>Green</strong></p>
                                <a href="https://atcoder.jp/users/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-danger">Visit</a>
                            </div>
                        </div>
                    </div> -->



                    <!-- Coding Ninjas -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-user-graduate fa-2x text-info mb-3"></i>
                                <h5 class="card-title">Coding Ninjas</h5>
                                <p class="text-muted">Max Rating: <strong>2439</strong></p>
                                <a href="https://www.codingninjas.com/studio/profile/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-danger">Visit</a>
                            </div>
                        </div>
                    </div>
                    <!-- Toph -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-code mb-3" style="font-size: 32px; color: #17a2b8;"></i>
                                <h5 class="card-title">Toph</h5>
                                <p class="text-muted">~300+ Problems Solved</p>
                                <a href="https://toph.co/u/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-info">Visit</a>
                            </div>
                        </div>
                    </div>

                    <!-- LightOJ -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-laptop-code mb-3" style="font-size: 32px; color: #6c757d;"></i>
                                <h5 class="card-title">LightOJ</h5>
                                <p class="text-muted">~200+ Problems Solved</p>
                                <a href="https://lightoj.com/user/nibirjoydhar" target="_blank"
                                    class="btn btn-sm btn-outline-secondary">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wavy Divider -->
        <div style="margin-top: -5px;">
            <svg viewBox="0 0 1440 100" style="display: block;" xmlns="http://www.w3.org/2000/svg">
                <path fill="#f8f9fa" d="M0,64L1440,100L1440,0L0,0Z"></path>
            </svg>
        </div>

        <!-- Education & Organization Section -->
        <section id="education" class="p-5 bg-light" data-aos="fade-up">
            <div class="container">
                <h2 class="section-title">Education & Organization</h2>
                <div class="row g-4">

                    <!-- University -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-start">
                                <i class="fas fa-university fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">B.Sc. in Computer Science & Engineering</h5>
                                    <p class="mb-1">Jagannath University, Dhaka</p>
                                    <small class="text-muted">CGPA: 3.53 (till 4-1)</small>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Competitive Programming Club -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-start">
                                <i class="fas fa-users fa-2x text-success me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">Member, Competitive Programming Club</h5>
                                    <p class="mb-1">Jagannath University</p>
                                    <small class="text-muted">Since 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IEEE Student Branch -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-start">
                                <i class="fas fa-microchip fa-2x text-info me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">Member, IEEE Student Branch</h5>
                                    <p class="mb-1">Jagannath University</p>
                                    <small class="text-muted">Since 2023</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ICPC Team -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-start">
                                <i class="fas fa-code fa-2x text-danger me-3"></i>
                                <div>
                                    <h5 class="card-title mb-1">Team Leader, JnU_TLE</h5>
                                    <p class="mb-1">ICPC Dhaka Regional 2023</p>
                                    <small class="text-muted">Team: JnU_TLE</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="p-5 glass-card mt-5 bg-dark text-white" data-aos="fade-left">
            <div class="container">
                <div class="row">
                    <!-- Contact Info -->
                    <div class="col-md-6 mb-4">
                        <h1 class="section-title text-white">Get in touch</h1>
                        <div class="container">
                            <p><i class="fas fa-envelope me-2"></i> <a href="mailto:nibirjoydhar@gmail.com"
                                    class="text-white text-decoration-none">nibirjoydhar@gmail.com</a></p>
                            <p><i class="fas fa-phone me-2"></i> <a href="tel:+8801521546883"
                                    class="text-white text-decoration-none">+880 1521 546 883</a></p>
                            <p><i class="fas fa-map-marker-alt me-2"></i> Jagannath University, Dhaka, Bangladesh</p>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                        <div style="border-left: 2px solid #fff; height: 100%;"></div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-md-5">
                        <form id="contactForm">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>

                        <div id="contactResponse" class="mt-3"></div>

                    </div>
                </div>
            </div>
        </section>


    </div>

    <div class="mt-5"></div>
    <footer class="bg-light text-dark pt-4 border-top">
        <div class="container">
            <div class="row">
                <!-- Spacer -->
                <div class="col-md-1 mb-1"></div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <div class="d-flex flex-row">
                        <ul class="list-unstyled me-5">
                            <li><a href="#hero">Head</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#skills">Skill</a></li>
                            <li><a href="#online-judges">Online-Judges</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><a href="#projects">Project</a></li>
                            <li><a href="#achievements">Achievements</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Contact Information -->
                <div class="col-md-4 mb-4">
                    <h5>Contact Me</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>9-10, Chittaranjan Avenue, Dhaka 1100</li>
                        <li><i class="fas fa-phone me-2"></i>+88 015-215 46883</li>
                        <li><i class="fas fa-envelope me-2"></i>nibirjoydhar@gmail.com</li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-md-3 mb-3">
                    <h5>Follow Me</h5>
                    <div class="social-icons d-flex gap-3 fs-5">
                        <a href="https://www.linkedin.com/in/nibirjoydhar" target="_blank" class="text-dark"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/nibirjoydhar" class="text-black" target="_blank"><i
                                class="fab fa-github fa-lg"></i></a>
                        <a href="https://www.facebook.com/whhooami" target="_blank" class="text-dark"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/nibirjoydhar/" target="_blank" class="text-dark"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://x.com/NibirJoydhar" target="_blank" class="text-dark"><i
                                class="fab fa-x"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom bg-secondary text-white py-2 mt-4">
            <div class="container text-center">
                <p class="mb-0">&copy; 2025 myPortfolio. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
            once: true,
            easing: 'ease-in-out'
        });
        //for mailer
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form=e.target;
            const formData=new FormData(form);

            // Log form data
            console.log('Form data:');
            for(let [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }

            fetch("{{ route('contact.send') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
                .then(res => {
                    console.log('Response status:', res.status);
                    if(!res.ok) {
                        return res.json().then(err => {
                            throw new Error(`HTTP error! Status: ${res.status}, Message: ${err.error||'Unknown error'}`);
                        });
                    }
                    return res.json();
                })
                .then(data => {
                    console.log('Success response:', data);
                    document.getElementById('contactResponse').innerHTML=
                        `<div class="alert alert-success">${data.success}</div>`;
                    form.reset();
                })
                .catch(err => {
                    console.error('Fetch error:', err);
                    document.getElementById('contactResponse').innerHTML=
                        `<div class="alert alert-danger">Something went wrong! ${err.message}</div>`;
                });
        });
        //mailer ended

        // for search
        // Sticky Header Scroll Effect
        let lastScroll=0;
        let isProgrammaticScroll=false; // Flag to track programmatic scrolls

        window.addEventListener('scroll', () => {
            const header=document.querySelector('header');
            const currentScroll=window.pageYOffset;

            // Only hide/show header for user-initiated scrolls
            if(!isProgrammaticScroll) {
                if(currentScroll>lastScroll&&currentScroll>100) {
                    header.classList.add('hidden'); // Hide header when scrolling down
                } else {
                    header.classList.remove('hidden'); // Show header when scrolling up
                }
            }

            lastScroll=currentScroll;
        });

        // Search Functionality
        let highlights=[];
        let currentIndex=0;

        function highlightAndNavigate(event) {
            event.preventDefault();
            const term=document.getElementById('searchInput').value.trim();
            if(!term) return clearSearch();

            clearSearch();

            const regex=new RegExp(`(${term})`, 'gi');
            const walker=document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, {
                acceptNode: function(node) {
                    return node.nodeValue.trim().length>0&&node.parentNode.nodeName!=='SCRIPT'
                        ? NodeFilter.FILTER_ACCEPT:NodeFilter.FILTER_REJECT;
                }
            });

            const textNodes=[];
            while(walker.nextNode()) {
                textNodes.push(walker.currentNode);
            }

            textNodes.forEach(node => {
                if(regex.test(node.nodeValue)) {
                    const span=document.createElement('span');
                    span.innerHTML=node.nodeValue.replace(regex, '<mark class="search-highlight">$1</mark>');
                    node.parentNode.replaceChild(span, node);
                }
            });

            highlights=Array.from(document.querySelectorAll('mark.search-highlight'));

            if(highlights.length>0) {
                currentIndex=0;
                updateResultInfo();
                document.getElementById('resultInfo').classList.remove('d-none');
                document.getElementById('prevBtn').classList.remove('d-none');
                document.getElementById('nextBtn').classList.remove('d-none');
                document.getElementById('clearBtn').classList.remove('d-none');
                scrollToCurrent();
            } else {
                document.getElementById('resultInfo').textContent=`No match`;
                document.getElementById('resultInfo').classList.remove('d-none');
                document.getElementById('clearBtn').classList.remove('d-none');
            }
        }

        function updateResultInfo() {
            const resultInfo=document.getElementById('resultInfo');
            resultInfo.textContent=`${highlights.length>0? currentIndex+1:0} of ${highlights.length}`;
        }

        function scrollToCurrent() {
            if(highlights.length===0) return;

            // Set flag to indicate programmatic scroll
            isProgrammaticScroll=true;

            // Ensure header is visible during search navigation
            const header=document.querySelector('header');
            header.classList.remove('hidden');

            highlights.forEach(h => h.style.outline='');
            highlights[currentIndex].scrollIntoView({behavior: 'smooth', block: 'center'});
            highlights[currentIndex].style.outline='2px solid red';
            updateResultInfo();

            // Reset flag after scroll completes (using a timeout to match smooth scroll duration)
            setTimeout(() => {
                isProgrammaticScroll=false;
            }, 600); // Adjust timeout if your smooth scroll duration changes
        }

        function clearSearch() {
            document.querySelectorAll('mark.search-highlight').forEach(mark => {
                const parent=mark.parentNode;
                parent.replaceChild(document.createTextNode(mark.textContent), mark);
                parent.normalize();
            });
            highlights=[];
            currentIndex=0;
            document.getElementById('resultInfo').classList.add('d-none');
            document.getElementById('prevBtn').classList.add('d-none');
            document.getElementById('nextBtn').classList.add('d-none');
            document.getElementById('clearBtn').classList.add('d-none');
        }

        document.getElementById('prevBtn').addEventListener('click', () => {
            if(highlights.length===0) return;
            currentIndex=(currentIndex-1+highlights.length)%highlights.length;
            scrollToCurrent();
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            if(highlights.length===0) return;
            currentIndex=(currentIndex+1)%highlights.length;
            scrollToCurrent();
        });

        document.getElementById('clearBtn').addEventListener('click', clearSearch);


    </script>



</body>

</html>