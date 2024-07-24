<?php

include 'config.php';

session_start();

$_SESSION["username"];

if (!isset($_SESSION["username"])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lawyer Website </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- NAVBAR SECTION -->

    <nav class="bg-gray-700">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <!-- <img class="h-8 w-auto" src="/img/logo.png" alt="Your Company"> -->
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <span class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium cursor-pointer" aria-current="page">LAWYER</span>
                            <a href="./home.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm hover:underline hover:font-semibold font-medium">HOME</a>
                            <a href="./about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm hover:underline hover:font-semibold font-medium">ABOUT</a>
                            <a href="./service.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm hover:underline hover:font-semibold font-medium">SERVICES</a>
                            <a href="./blog.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm hover:underline hover:font-semibold font-medium">BLOG</a>
                            <a href="./contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm hover:underline hover:font-semibold font-medium">CONTACT</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="search" name="" id="" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Search Here">

                        </div>
                    </div>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>

                        <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                        <div class="absolute right-0 z-10 mt-5 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="./adminhome.php" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0"> <?php echo $_SESSION["username"] ?> </a>
                            <a href="./logout.php" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="./home.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">HOME</a>
                <a href="./about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">ABOUT</a>
                <a href="./service.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">SERVICES</a>
                <a href="./blog.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">BLOG</a>
                <a href="./contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">CONTACT</a>
            </div>
        </div>
    </nav>

    <!-- ADMIN HOME CONTENT -->

    <section class="text-gray-600 body-font">
        <h2 class="text-3xl font-bold tracking-widest text-gray-700 sm:text-4xl text-center pt-10">ADMIN PANEL</h2>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">                       
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://i.pinimg.com/originals/ac/11/aa/ac11aa2add3b0193c8769e0a17d13535.jpg">
                        <p class="leading-relaxed">"Welcome to our website! We're dedicated to providing you with valuable information and resources. Whether you're looking for product details, service offerings, or helpful tips, you've come to the right place. Feel free to explore our site and discover everything we have to offer. If you have any questions or need assistance, don't hesitate to reach out to our friendly team. We're here to help make your experience with us enjoyable and seamless. Thank you for visiting!"</p>
                        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-lg title-font tracking-wider text-lg">USER</h2>
                        <p class="text-gray-500">24.3K</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="data:image/jpeg;base64,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">
                        <p class="leading-relaxed">Here's a brief introduction for a lawyer:

                            "Welcome! Our Website, and I specialize in All Law. With alot of years of experience, I'm dedicated to providing expert legal guidance and representation to my clients. Whether you're facing a complex legal issue or simply need advice, I'm here to help. My goal is to achieve the best possible outcome for you while ensuring a smooth and stress-free legal process. Contact me today to discuss your case and learn how I can assist you."</p>
                        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-lg title-font tracking-wider text-lg">LAWYER</h2>
                        <p class="text-gray-500">328</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="data:image/jpeg;base64,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">
                        <p class="leading-relaxed">Certainly! Here's a concise introduction about scheduling appointments:

                            "Looking to schedule an appointment? You're in the right place! At Lawyer Website, we make it easy to book your appointment at a time that suits you best. Whether you need a consultation, service, or meeting, our scheduling system is designed to accommodate your needs. Simply select your preferred date and time, and we'll take care of the rest. Get started today and let us help you with all your appointment needs!"</p>
                        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-lg title-font tracking-wider text-lg">APPOINTMENT</h2>
                        <p class="text-gray-500">67</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER CONTENT  -->

    <?php
    include './footer.php';
    ?>

</body>

</html>