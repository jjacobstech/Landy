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
            <a href="./<?php base_url(); ?>" class=" mx-2 hover:text-amber-600">Home</a>
            <a href="<?php base_url(); ?>Frontendbooking" class="mx-2 hover:text-amber-600">Book</a>
        </nav>


        <!-- About Us Section -->
        <section class="container " style="padding-top: 20%;">
            <div class="row">
                <h1 class="font-bold text-3xl" style="font-size: 50px;">Contact Us</h1>
                <p class="">
                    +2340000000000 +234000000000 00-000-0000
                </p>
                <p>
                    landyfms@gmail.com
                </p>
                <p>
                    <a href="#"> Company Website</a>
                </p>


                <div style="align-self:center; width:100%; display:flex; justify-content:center;">
                    <a href="#"> <img src="<?php base_url(); ?>assets/uploads/icons8-facebook.png" alt="facebook">
                    </a>

                    <a href="#"> <span> <a href="#"> <img src="<?php base_url(); ?>assets/uploads/icons8-twitterx.png" alt="twitter">
                            </a>

                            <a href="#"> <span> <a href="#"> <img src="<?php base_url(); ?>assets/uploads/icons8-instagram.png" alt="instagram">
                                    </a>
                </div>


            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="flex items-center justify-center bg-spider-black text-white text-center p-5">
            <div class="">

                <p class=" font-bold text-3xl mt-2">Ready to optimize your fleet management? Contact us now!</p>

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