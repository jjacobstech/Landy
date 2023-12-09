<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Management System</title>
    <link href="<?= base_url(); ?>assets/css/tailwind.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <!-- Hero Section with Image Slider -->
    <header class="relative bg-spider-black text-white text-center">
        <nav class="fixed z-20 top-0 left-0 flex items-center justify-end bg-navbar w-full p-5">
            <a href="<?= base_url(); ?>Login" class="mx-2 hover:text-amber-600">Administrator</a>
            <a href="<?= base_url(); ?>Frontendbooking" class="mx-2 hover:text-amber-600">Book </a>
        </nav>
        <div class="slider-container">
            <div class="slider">
                <div class="slide slide--1">
                    <div class="">
                        <h1 class="text-4xl font-bold mb-3">Welcome to Our Fleet Management System</h1>
                        <p class="text-lg">Your Solution for Efficient Fleet Management</p>
                    </div>
                </div>
                <div class="slide slide--2">
                    <div class="">
                        <h1 class="text-4xl font-bold mb-3">Welcome to Our Fleet Management System</h1>
                        <p class="text-lg">Your Solution for Efficient Fleet Management</p>
                    </div>
                </div>
                <div class="slide slide--3">
                    <div class="">
                        <h1 class="text-4xl font-bold mb-3">Welcome to Our Fleet Management System</h1>
                        <p class="text-lg">Your Solution for Efficient Fleet Management</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Us Section -->
    <section class="about-us container flex items-center px-5 py-4">
        <div class="">
            <h2 class="text-3xl font-bold mb-4">About Project</h2>
            <p class="mb-4">
                The fleet management system is a robust and user-friendly solution designed to streamline your vehicle
                tracking and management needs.
            </p>
            <p>
                With a focus on simplicity and efficiency, our platform empowers you to monitor and optimize your
                fleet's performance, enhance driver safety, and reduce operational costs. Whether you have a small fleet
                or a large-scale operation, our solution provides the tools you need to stay in control and make
                informed decisions.
            </p>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="flex items-center justify-center bg-spider-black text-white text-center p-5">
        <div class="">
            <h2 class="font-bold text-3xl">Get Started Today</h2>
            <p class="mt-2">Ready to optimize your fleet management? Contact us now!</p>
            <a href="<?php base_url(); ?>Contactus">
                <button class="bg-white text-charcoal px-5 py-3 rounded-lg mt-4 hover:shadow hover:shadow-amber-600 hover:bg-amber-600 duration-300 hover:text-white">Contact
                    Us</button>
            </a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-footer text-center py-5 text-gray-200">
        <p>&copy; 2023 Fleet Management System. All Rights Reserved.</p>
    </footer>

    <script>
        // JavaScript for image slider
        const slider = document.querySelector('.slider');
        let slideIndex = 0;

        function nextSlide() {
            slideIndex = (slideIndex + 1) % 3; // Change '3' to the number of images you have
            updateSlider();
        }

        function updateSlider() {
            slider.style.transform = `translateX(-${slideIndex * 100}%)`;
        }

        setInterval(nextSlide, 5000); // Change '5000' to the desired time interval in milliseconds
    </script>
</body>

</html>