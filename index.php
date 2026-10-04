<?php
require 'db.php';

if (isset($_GET['status']) && $_GET['status'] == 'success') {
    // If it is, echo the JavaScript to show an alert box
    echo '<script>alert("Message sent successfully!");</script>';

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) &&!empty($message)) {
        $sql = "INSERT INTO git (name, email, message) VALUES (?, ?, ?)";
        
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
            
            if (mysqli_stmt_execute($stmt)) {
                header("location: index.php?status=success");
            } else {
                echo "Error: Could not execute the query.";
            }
            mysqli_stmt_close($stmt);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitarth Kubavat | Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <header id="header">
        <nav>
            <a href="#" class="logo">Hitarth Kubavat</a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero">
            <div class="hero-content">
                <h1>Hi, I'm <span class="highlight">Hitarth Kubavat</span></h1>
                <h3>I am a <span class="typing"></span></h3>
                <p>I build beautiful, responsive, and user-friendly websites and applications. Welcome to my personal corner of the internet.</p>
                <a href="#projects" class="btn">View My Work</a>
            </div>
        </section>

        <section id="about">
            <h2 class="section-title">About Me</h2>
            <div class="about-container">
                <div class="about-image">
                    <img src="im.jpg" alt="Hitarth Kubavat">
                </div>
                <div class="about-text">
                    <p>Hello! I'm a passionate developer with expertise in front-end and back-end technologies. I love solving complex problems and creating intuitive digital experiences. With a background in Computer Science, I specialize in JavaScript frameworks like React and Node.js.</p>
                    <h3>My Skills</h3>
                    <div class="skills-grid">
                        <div class="skill-item"><i class="fab fa-html5"></i> HTML</div>
                        <div class="skill-item"><i class="fab fa-css3-alt"></i> CSS</div>
                        <div class="skill-item"><i class="fab fa-js"></i> JavaScript</div>
                        <div class="skill-item"><i class="fab fa-git-alt"></i> Git</div>
                        <div class="skill-item"><i class="fab fa-java"></i> Java</div>
                        <div class="skill-item"><i class="fas fa-c"></i> C</div>
                        <div class="skill-item"><i class="fas fa-terminal"></i> C++</div>

                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="1.png" alt="Project One">
                    <div class="project-info">
                        <h3>Java Swing Modern Calculator</h3>
                        <p>A complete, modern GUI calculator built with Java Swing, featuring a dark-mode aesthetic and robust event handling via ActionListener. It performs chained arithmetic operations and provides an enhanced user experience with custom button styles and hover effects.</p>
                        <div class="project-links">
                            <a href="https://github.com/HitarthKubavat/Java-Swing-Modern-Calculator.git" target="_blank" class="btn-secondary">Source Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <img src="2.png" alt="Project Two">
                    <div class="project-info">
                        <h3>C Student Management System</h3>
                        <p>A fundamental C application that demonstrates data persistence by managing student records via binary file I/O. It features full CRUD (Create, Read, Update) functionality, including the advanced C technique of using fseek to update records in place.</p>
                        <div class="project-links">
                            <a href="https://github.com/HitarthKubavat/C-Language-File-IO-Student-Management-System.git" target="_blank" class="btn-secondary">Source Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <img src="3.png" alt="Project Three">
                    <div class="project-info">
                        <h3>C++ Library Management System</h3>
                        <p>This project is a classic demonstration of Object-Oriented Programming (OOP) in C++, using Book and Patron classes to manage data. It showcases encapsulation and basic logic for handling essential library operations like borrowing and returning books.</p>
                        <div class="project-links">
                            <a href="https://github.com/HitarthKubavat/CPlusPlus-OOP-Library-Management-System.git" target="_blank" class="btn-secondary">Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section id="projects">
            
            <div class="projects-grid">
                <div class="project-card">
                    <img src="4.png" alt="Project Four">
                    <div class="project-info">
                        <h3>Php study buddy website</h3>
                        <p>Study Buddy is a collaborative learning platform for students to connect, share knowledge, and support each other's academic journey. Users can create profiles, build study networks, send messages, and access or contribute subject-wise PDFs, lecture notes, and previous question papers.</p>
                        <div class="project-links">
                           
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <img src="5.png" alt="Project Five">
                    <div class="project-info">
                        <h3>PHP & MySQL Blogging Website</h3>
                        <p>A dynamic, full-stack blogging platform built from scratch using PHP and MySQL. It offers complete user management (registration, login, logout) and allows authenticated users to perform all CRUD operations (Create, Read, Update, Delete) on their personalized blog posts.</p>
                        <div class="project-links">
                            <a href="https://github.com/HitarthKubavat/PHP-MySQL-Custom-Blogging-Platform.git" target="_blank" class="btn-secondary">Source Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects">
            
            <div class="projects-grid">
                <div class="project-card">
                    <img src="6.png" alt="Project Five">
                    <div class="project-info">
                        <h3>AI Study Helper</h3>
                        <p>AI Study Helper is a clean, web-based tool powered by Gemini AI. Users can input any subject or topic into the interface, and the application generates clear, intelligent study explanations using their own API key.</p>
                        <div class="project-links">
                            <a href="https://github.com/HitarthKubavat/AI-Study-Helper-Web-App" target="_blank" class="btn-secondary">Source Code</a>
                            <a href="https://ai-study-helper-web-app.onrender.com/" target="_blank" class="btn-secondary">Live Demo</a>
                        </div>
                    </div>
                </div>
                <div class="projects-grid">
                <div class="project-card">
                    <img src="7.png" alt="Project Five">
                    <div class="project-info">
                        <h3>CivicGuide AI</h3>
                        <p>CivicGuide AI is an interactive election assistant designed for Gujarat voters. It provides localized election dates, polling booth locations, step-by-step voter registration guides (Forms 6, 6A, 8), voting day procedures, and a voter awareness quiz.</p>
                        <div class="project-links">
                            <a href="https://github.com/HitarthKubavat/CivicGuide-AI" target="_blank" class="btn-secondary">Source Code</a>
                            <a href="https://civicguide-ai-4ug6.onrender.com/" target="_blank" class="btn-secondary">Live Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2 class="section-title">Get In Touch</h2>
            <p class="contact-subtitle">Have a question or want to work together? Feel free to reach out!</p>
            <form id="contact-form" action='index.php' method='post'>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
            <div class="social-links">
                <a href="https://github.com/HitarthKubavat" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                <a href="http://www.youtube.com/@HITARTH_KUBAVAT" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/hitarth_912?igsh=YzI2djZkYWhncmtp" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Hitarth Kubavat. All Rights Reserved.</p>
    </footer>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>