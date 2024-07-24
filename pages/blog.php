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
  <link rel="stylesheet" href="design.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- NAVBAR SECTION -->

  <?php
  include './nav.php';  
  ?>

  <!--  BLOG CONTENT  -->

  <section class="text-gray-600 body-font mt-20">
    <div class="container px-5 pb-10 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/id/1481286553/photo/law-and-justice-concept-businessman-holding-lawyer-virtual-icon-consultation-and-conference.webp?b=1&s=170667a&w=0&k=20&c=HXMNtJA8a8zphRPnPdMyB0Q3ZXK4YgDWPrcYbI6hNww=" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">CASE STUDIES</h1>
              <p class="leading-relaxed mb-3">Lawyer blogs often feature case studies or real-life examples to illustrate legal principles in practice. These case studies can help readers better understand how the law applies to different situations and how legal strategies are implemented.</p>
              <div class="flex items-center flex-wrap ">
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>View 12.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>432
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/id/1643971181/photo/judge-hands-and-professional-man-typing-communication-networking-or-texting-legal-contact-law.jpg?s=612x612&w=0&k=20&c=_QPHBF3nbnapOG45kNZ3ax9jESuSBWDVdC-N5rZvR9U=" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">LEGAL UPDATES AND NEWS</h1>
              <p class="leading-relaxed mb-3">Lawyer blogs frequently include updates on changes in laws, regulations, and court decisions. Providing timely legal news keeps readers informed about recent developments that may impact them personally or professionally..</p>
              <div class="flex items-center flex-wrap">
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>View 7.98K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>100
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/id/1454530428/photo/group-of-business-persons-talking-in-the-office.webp?b=1&s=170667a&w=0&k=20&c=eg2e-NxZFUQlTwpzsZHLyeRgoOw15A8lCuQtUcS2gS8=" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">GUEST POSTS AND INTERVIEWS</h1>
              <p class="leading-relaxed mb-3">Lawyer blogs may feature guest posts or interviews with legal experts, industry professionals, or clients. These guest contributions provide diverse perspectives and insights, enriching the content and offering additional value to readers.</p>
              <div class="flex items-center flex-wrap">
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>View 10.8K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>320
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OTHER BLOG CONTENT -->


  <div class="bg-white pb-8 mb-10 sm:1">
    <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
      <div class="mx-auto">
        <h2 class="text-3xl font-bold tracking-tight text-gray-700 sm:text-4xl text-center">EXPERT LAWYER</h2>
        <!-- <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p> -->
      </div>
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">LAWYER</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                Demonstrate Expertise:
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">A lawyer's blog allows them to showcase their knowledge and expertise in their field of law. By writing informative and insightful articles on relevant legal topics, they can establish themselves as authorities in their practice area.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Henry Taylor
                </a>
              </p>
              <p class="text-gray-600">Criminal Lawyer</p>
            </div>
          </div>
        </article>
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">Nov 29, 2013</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">LAWYER</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                Build Trust And Credibility:
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Regularly publishing high-quality content demonstrates the lawyer's commitment to helping their audience. It builds trust and credibility with current and potential clients, as well as with other professionals in the legal community.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Olivia Williams
                </a>
              </p>
              <p class="text-gray-600">Family Lawyer</p>
            </div>
          </div>
        </article>
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">Feb 23, 2008</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">LAWYER</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                Educate Clients And Potential Clients:
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">A blog provides an opportunity to educate clients and potential clients about legal issues, processes, and rights. This can help demystify the legal system for them and empower them to make informed decisions.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://images.pexels.com/photos/697509/pexels-photo-697509.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Alexander Smith
                </a>
              </p>
              <p class="text-gray-600">Education Lawyer</p>
            </div>
          </div>
        </article>
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">July 04, 2018</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">LAWYER</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                Engage with the audience:
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">A blog allows lawyers to engage with their audience by inviting comments, questions, and feedback. This interaction can lead to valuable insights, foster a sense of community, and even generate ideas for future blog posts.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://media.istockphoto.com/id/1471845315/photo/happy-portrait-or-business-woman-taking-a-selfie-in-office-building-for-a-social-media.webp?b=1&s=170667a&w=0&k=20&c=2-VGjlhPIjfj1I98HnA_qVM7TePchgVXe2y3TI65Y-0=" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Sophia Davis
                </a>
              </p>
              <p class="text-gray-600">Civil Lawyer</p>
            </div>
          </div>
        </article>     
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">Sep 20, 2016</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">LAWYER</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                Improve Search Engine Visibility:
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">A blog can improve a lawyer's website's search engine optimization (SEO) by providing fresh, relevant content that incorporates keywords related to their practice area. This can help the website rank higher in search engine results, making it easier for potential clients to find.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZmlsZSUyMHBpY3R1cmV8ZW58MHx8MHx8fDA%3D" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Benjamin Brown
                </a>
              </p>
              <p class="text-gray-600">Business Lawyer</p>
            </div>
          </div>
        </article>         
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">May 14, 2011</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">LAWYER</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                Estate Planning Essentials:
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Planning for the future is essential for everyone, regardless of age or wealth. In this post, we highlight the importance of estate planning and offer practical tips for creating a comprehensive estate plan that reflects your wishes and protects your assets.</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://media.istockphoto.com/id/1300972573/photo/pleasant-young-indian-woman-freelancer-consult-client-via-video-call.webp?b=1&s=170667a&w=0&k=20&c=VxVGh1MZrvvnb5xo0wDvlA9LmJ5EuZl24Tq_NPNZiFc=" alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Nancy Wheeler
                </a>
              </p>
              <p class="text-gray-600">Estate Lawyer</p>
            </div>
          </div>
        </article>        
      </div>
    </div>
  </div>


  <!-- FOOTER CONTENT  -->


  <?php
include './footer.php';
?>

</body>
</html>