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

  <!-- HOME CONTENT -->

  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="https://media.istockphoto.com/id/937346262/photo/group-of-confident-perky-lawyers-standing-together.webp?b=1&s=170667a&w=0&k=20&c=JXglESNhrUIiT9cnBzqcXCxn5oHXFfOBTTB8NrUXbYs=">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"> ASSOCIATES LAW FIRM
        </h1>
        <p class="mb-8 leading-relaxed">Welcome to Associates Law Firm, where your legal needs are our top priority. Our team of experienced attorneys is dedicated to providing personalized and effective legal solutions to individuals and businesses alike.</p>
      </div>
    </div>
  </section>


  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">CLIENT SITUATION
          <br class="hidden lg:inline-block">UNDERSTANDIND
        </h1>
        <p class="mb-8 leading-relaxed">At Associates Law Firm, we understand that every client's situation is unique, which is why we take the time to listen carefully to your concerns and objectives. Our goal is to develop tailored strategies designed to achieve the best possible outcome for you.</p>
        <div class="flex justify-center">
          <a href="./contact.php" class="ml-4 inline-flex text-gray-100 bg-gray-600 border-0 py-2 px-6 focus:outline-none hover:bg-gray-900 rounded text-lg">Get In Touch </a>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="https://cdn.pixabay.com/photo/2023/12/12/09/18/criminal-8444883_640.jpg">
      </div>
    </div>
  </section>

  <!-- FOOTER CONTENT  -->

<?php
include './footer.php';
?>

</body>

</html>