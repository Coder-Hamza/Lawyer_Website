<?php

include 'config.php';

session_start();

$_SESSION["username"];

if(!isset($_SESSION["username"]))
{
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

  <?php
  include './nav.php';
  ?>

  <!-- ABOUT CONTENT -->

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h2 class="text-3xl font-bold tracking-widest text-gray-700 sm:text-4xl">OUR TEAM</h2>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base pt-5">"Welcome to our team! Meet the diverse group of passionate individuals who drive our mission forward. From creative minds to analytical wizards, each member brings unique skills and experiences to the table. Together, we're dedicated to excellence, innovation, and collaboration. Get to know the faces behind our success!".</p>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-60 object-cover object-center sm:mb-0 mb-4" src="https://media.istockphoto.com/id/1424912588/photo/happy-successful-business-leader-in-glasses-head-shot.webp?b=1&s=170667a&w=0&k=20&c=qgbF_FqqT1rNlzen1wp0GfHgSaIrUoZE8miR5CpnMwk=">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Oliver Thompson</h2>
              <h3 class="text-gray-500 mb-3">Civil Lawyer</h3>
              <p class="mb-4">"Civil lawyers are champions of resolution, adept at navigating the intricacies of non-criminal legal matters. From contract disputes to personal injury claims, they provide expert counsel and representation to individuals and businesses seeking justice and fair outcomes in civil court."</p>
              <span class="inline-flex cursor-pointer">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-60 object-cover object-center sm:mb-0 mb-4" src="https://media.istockphoto.com/id/1398385367/photo/happy-millennial-business-woman-in-glasses-posing-with-hands-folded.webp?b=1&s=170667a&w=0&k=20&c=YaXYAUQu3wpM2xiFJgorwMvK5pNnrrdnFeHd1lTVwCs=">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Olivia Williams</h2>
              <h3 class="text-gray-500 mb-3">Divorce & Family Lawyer</h3>
              <p class="mb-4">"Supporting you through life's challenges, our family lawyers provide compassionate guidance and expert counsel to protect what matters most: your loved ones and your future."</p>
              <span class="inline-flex cursor-pointer">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-60 object-cover object-center sm:mb-0 mb-4" src="https://media.istockphoto.com/id/1422877536/photo/confident-handsome-caucasian-business-leader-man-head-shot-portrait.webp?b=1&s=170667a&w=0&k=20&c=rLq8LJ6esN-ze0IuEDBNQJK8Fop9HO3SH3Dux77QdO8=">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Henry Taylor</h2>
              <h3 class="text-gray-500 mb-3">Criminal Lawyer</h3>
              <p class="mb-4">"In the face of legal adversity, our criminal lawyers stand as vigilant defenders of justice, ensuring your rights are upheld and your voice is heard. Trust in our expertise to navigate the complexities of the law and safeguard your liberty."</p>
              <span class="inline-flex cursor-pointer">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-65 object-cover object-center sm:mb-0 mb-4" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGxhd3llciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Amelia Parker</h2>
              <h3 class="text-gray-500 mb-3">Labour Lawyer</h3>
              <p class="mb-4">"Empowering employees and employers alike, our labor lawyers champion fairness, advocate for rights, and navigate the complexities of workplace law with precision and dedication. Trust in our expertise to safeguard your interests and promote equitable outcomes."</p>
              <span class="inline-flex cursor-pointer">
                <a class="text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-2 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TOTAL CASE RECORDS -->

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-3 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-700"> ACCEPT CASES</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base pt-5">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
      <div class="flex flex-wrap justify-center -m-4 text-center pb-7">
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">900</h2>
            <p class="leading-relaxed">Total Cases</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M8 17l4 4 4-4m-4-5v9"></path>
              <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">778</h2>
            <p class="leading-relaxed">Won Cases</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <h2 class="title-font font-medium text-3xl text-gray-900">1346</h2>
            <p class="leading-relaxed">Happy Clients</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- FOOTER CONTENT  -->

  <footer class="text-gray-600  bg-gray-700 body-font">
    <div class="container px-5 py-20 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium items-center md: justify-center text-gray-900">
          <span class="bg-gray-900 text-white rounded-md px-3 py-2 text-lg font-medium cursor-pointer" aria-current="page">LAWYER</span>
        </a>
        <p class="mt-5 text-sm text-white">"Welcome to Lawyer Website, Where legal expertise meets unwavering dedication. With a commitment to justice and personalized service, We are here to guide you through even the most complex legal matters."</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-lg text-gray-900 tracking-widest text-2xl mb-3 underline">SERVICES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-people-group"></i> Family Law</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-user-graduate"></i> Education Law</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-person-military-to-person"></i> Civil Law</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-handcuffs"></i> Criminal Law</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-business-time"></i> Business Law</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-lg mb-3 underline">QUICK LINKS</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-regular fa-address-card"></i> About Us</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-brands fa-servicestack"></i> Services</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-blog"></i> Blog</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-regular fa-address-book"></i> Contact Us</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-lg mb-3 underline">SOCIAL LINKS</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-brands fa-facebook"></i> Facebook</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-brands fa-instagram"></i> Instagram</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-brands fa-twitter"></i> Twitter</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-brands fa-linkedin"></i> Linkdin</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-lg mb-3 underline">FIND US</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-location-dot"></i> Karachi</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-mobile-screen-button"></i> 03100082501</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-regular fa-envelope"></i> Lawyer786@gmail.com</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-900 cursor-pointer"><i class="fa-solid fa-earth-americas"></i> Lawyer_website.com</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>