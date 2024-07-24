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

  <!-- SERVICES CONTENT -->

  <section class="text-gray-600 body-font">
    <div class="container px-5 pt-20 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
            <i class="fa-solid fa-handcuffs text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3 ">CRIMINAL LAW</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Henry Taylor</h2>
            <p class="leading-relaxed mb-3">"Guiding clients through the complexities of the legal system, criminal lawyers are dedicated advocates committed to protecting the rights and freedoms of those facing criminal charges. With expertise in criminal law and a passion for justice, they tirelessly defend their clients' interests both inside and outside the courtroom."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 1.2K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>312
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-people-group text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">DIVORCE & FAMILY LAW</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Olivia Williams</h2>
            <p class="leading-relaxed mb-3">"Specializing in the delicate realm of family law, divorce lawyers provide compassionate guidance and strategic representation to individuals navigating the challenges of marital dissolution and family disputes. With a focus on resolving matters with empathy and expertise, they strive to achieve fair outcomes while prioritizing the well-being of their clients and their families."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 3.5K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>436
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-gavel text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">CIVIL LAW</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Oliver Thompson</h2>
            <p class="leading-relaxed mb-3">"Civil lawyers are champions of resolution, adept at navigating the intricacies of non-criminal legal matters. From contract disputes to personal injury claims, they provide expert counsel and representation to individuals and businesses seeking justice and fair outcomes in civil court. With a focus on negotiation and advocacy."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 5.9K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>887
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 pt-20 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-graduation-cap text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">EDUCATIONAL LAW</h1>
            <span class=""></span>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Alexander Smith</h2>
            <p class="leading-relaxed mb-3">"Educational law, also referred to as education law or school law, encompasses the legal principles and regulations that govern the operation of educational institutions at all levels, from elementary schools to universities. It covers a wide range of legal issues related to students, teachers, administrators, and educational policies. Educational law addresses matters such as students' rights and responsibilities, special education, school safety."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 7.6K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>332
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-business-time text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">BUSINESS LAW</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Benjamin Brown</h2>
            <p class="leading-relaxed mb-3">"A business lawyer, also known as a corporate lawyer or commercial lawyer, specializes in legal matters related to businesses and corporations. They advise clients on various aspects of business law, including corporate governance, contracts, mergers and acquisitions, intellectual property, employment law, compliance, and litigation. Business lawyers play a crucial role in helping businesses navigate legal complexities, protect their interests, and ensure compliance with relevant regulations."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 9.99K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>545
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-paste text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">AFFIDAVIT</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Nancy Wheeler</h2>
            <p class="leading-relaxed mb-3">"An affidavit is a written sworn statement of fact voluntarily made by an individual under oath or affirmation, typically administered by a notary public or other authorized official. It serves as evidence in legal proceedings and is often used to present factual information or testimony to the court. Affidavits are commonly used in various legal contexts, including civil litigation, probate matters, family law cases, and immigration proceedings."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 2.88K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>651
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-20 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-people-carry-box text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">LABOUR LAW</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Amelia Parker</h2>
            <p class="leading-relaxed mb-3">"Empowering employees and employers alike, our labor lawyers champion fairness, advocate for rights, and navigate the complexities of workplace law with precision and dedication. Trust in our expertise to safeguard your interests and promote equitable outcomes."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 10.6K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>878
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-regular fa-credit-card text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">BANKRUPTCY LAW:</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Charlotte Davis</h2>
            <p class="leading-relaxed mb-3">"Bankruptcy law encompasses a set of federal statutes and regulations designed to provide relief to debtors burdened by overwhelming financial obligations. It serves as a mechanism for debtors to reorganize their finances or obtain a fresh start by either liquidating assets to repay creditors or developing a structured repayment plan."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 6.73K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>922
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3">
          <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <i class="fa-solid fa-user-tie text-4xl pb-5"></i>
            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">DISCUSS STRATEGY BUILDS</h1>
            <h2 class="tracking-widest text-lg title-font font-medium text-gray-600 mb-1">Michael Foster</h2>
            <p class="leading-relaxed mb-3">"
              In an ever-evolving business environment, strategic planning serves as a compass, guiding organizations toward their desired goals and objectives. By systematically analyzing internal capabilities, market dynamics, and competitive landscapes, businesses can identify opportunities, mitigate risks, and chart a course for sustainable growth."</p>
            <a href="./appointment.php" class="text-indigo-500 inline-flex items-center">Appointment
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4 cursor-pointer">
              <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>View 4.67K
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>821
              </span>
            </div>
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