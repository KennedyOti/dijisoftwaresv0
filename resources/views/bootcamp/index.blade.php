<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Bootcamp - DijiSoftwares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Hero Section */
        .hero {
            background: url('/assets/img/bootcamp2.jpg') no-repeat center center;
            background-size: cover;
            height: 70vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }

        /* Add a semi-transparent overlay to improve text visibility */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            /* Darker overlay for better text contrast */
            z-index: 0;
        }

        .hero-content {
            z-index: 1;
            padding: 0 15px;
        }

        /* Give the hero text a red blend for better visibility */
        

        .hero p {
            font-size: 1.1rem;
            margin-top: 15px;
            color: #fff;
            /* Lightened red text */
        }

        .hero a {
            font-size: 1.1rem;
            color: #ff6666;
            background-color: #ffffff;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .hero a:hover {
            background-color: #ff6666;
            color: #fff;
        }

        /* Countdown Timer */
        .countdown {
            font-size: 1.5rem;
            color: #ffeb3b;
            /* Bright yellow for the countdown text */
            font-weight: bold;
            background-color: #333;
            /* Dark background for the countdown */
            padding: 10px 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* Subtle shadow for depth */
        }

        /* What You'll Learn Section */
        .content-section {
            padding: 30px 15px;
        }

        .content-section h2 {
            font-weight: bold;
            font-size: 2rem;
            color: #ff3333;
            /* Red color for heading */
            margin-bottom: 20px;
        }

        .content-section .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            padding: 15px;
            transition: transform 0.2s ease-in-out;
        }

        .content-section .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        /* Remove bold and large text styling */
        .content-section .card h4 {
            font-size: 1rem;
            /* Smaller font size */
            color: #343a40;
            /* Normal text color */
            font-weight: normal;
            /* Remove bold */
        }

        .content-section .card p {
            font-size: 0.9rem;
            /* Keep text size small */
            color: #6c757d;
            /* Normal text color */
            font-weight: normal;
            /* Remove bold */
        }

        /* Application Form Section */
        #apply form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #apply h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #ff3333;
            /* Red heading for consistency */
        }

        .form-check-label {
            margin-left: 10px;
        }

        /* Responsive Media Queries */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero a {
                font-size: 1rem;
            }

            .countdown {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                height: 60vh;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 0.9rem;
            }

            .countdown {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content container">
            <h1 style="color: #ff3333">Introduction to Programming Using Python</h1>
            <p>Learn the fundamentals of Python programming in this hands-on Bootcamp.</p>
            <a href="#apply" class="btn btn-light btn-lg mt-4">Register Now</a>
            <div id="countdown" class="countdown mt-4"></div>
        </div>
    </div>

    <!-- What You'll Learn Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="text-center">What You Will Learn</h2>
            <div class="row">
                <!-- Content cards -->
                <div class="col-md-6">
                    <div class="card">
                        <h4>1. What is Programming? Understanding the Basics</h4>
                        <p>Introduction to how computers follow instructions and solve problems.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>2. Introduction to Python: A Beginner-Friendly Language</h4>
                        <p>Discover why Python is a great starting point for new programmers.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>3. Writing Your First Python Program</h4>
                        <p>Step-by-step guide to creating your first Python script.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>4. Variables: Storing Information in a Program</h4>
                        <p>Learn how to use variables to store and manipulate data.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>5. Simple Math with Python</h4>
                        <p>Perform basic arithmetic operations and understand mathematical expressions in Python.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>6. Making Decisions: If Statements and Loops</h4>
                        <p>Control the flow of your programs with conditional statements and loops.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>7. How to Organize Code: Functions and Why They Matter</h4>
                        <p>Learn how to create and use functions to organize and reuse code.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>8. Lists and Dictionaries: Organizing Data</h4>
                        <p>Manage collections of data using lists and dictionaries.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>9. Getting Input from Users and Displaying Output</h4>
                        <p>Interact with users by getting input and providing feedback.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h4>10. Problem-Solving and Building Simple Programs</h4>
                        <p>Apply your knowledge to solve problems and build simple Python programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section id="apply" class="content-section bg-light">
        <div class="container">
            <h2 class="text-center">Apply for the Bootcamp</h2>
            @if (session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
            <form action="{{ route('bootcamp.index') }}" method="POST" method="POST" class="mt-4">
                @csrf
                <div class="row">
                    <!-- Form fields -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="education" class="form-label">Highest Level of Education</label>
                            <select name="education" id="education" class="form-control" required>
                                <option value="" disabled selected>Select your education level</option>
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Certificate">Certificate</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Bachelors Degree">Bachelor's Degree</option>
                                <option value="Master Degree">Master's Degree</option>
                            </select>
                        </div>
                    </div>
                    <!-- New Career Path field -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="career_path" class="form-label">Career Path</label>
                            <input type="text" name="career_path" id="career_path" class="form-control" required>
                        </div>
                    </div>

                    <!-- New Level of Computer Literacy field -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="computer_literacy" class="form-label">Level of Computer Literacy</label>
                            <select name="computer_literacy" id="computer_literacy" class="form-control" required>
                                <option value="" disabled selected>Select your level</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Expert">Expert</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="motivation" class="form-label">Why do you want to join this Bootcamp?</label>
                            <textarea name="reason_for_joining" id="reason_for_joining" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>

        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Countdown Timer Script -->
    <script>
        // Set the correct event date and time for East African Time (EAT)
        const eventDate = new Date("2024-09-28T20:00:00+03:00").getTime(); // East African Time is UTC+3
        const countdownElement = document.getElementById("countdown");

        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = eventDate - now;

            if (timeLeft > 0) {
                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `Event starts in: ${days}d ${hours}h ${minutes}m ${seconds}s`;
            } else {
                countdownElement.innerHTML = "The event has started!";
            }
        }

        // Update countdown every second
        setInterval(updateCountdown, 1000);
    </script>
</body>

</html>
