
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home - DRHM Management Consultancy Services</title>
  <!-- CDN ASSETS -->
  <link rel="stylesheet" href="./cdn-assets/css/google-poppins.css">
  <link rel="stylesheet" href="./cdn-assets/css/google-archivo.css">
  <link rel="stylesheet" href="./cdn-assets/css/animate.min.css"/>
  <script src="./cdn-assets/js/jquery-3.6.4.min.js"></script>
  <script src="./cdn-assets/js/ScrollMagic.min.js"></script>
  <script src="./cdn-assets/js/debug.addIndicators.min.js"></script>
  <!-- CDN ASSETS -->

  <!-- TAILWDIND OUTPUT -->
  @vite('resources/css/app.css')
  <!-- TAILWDIND OUTPUT -->

  <!-- CUSTOM CSS -->
  <link href="./css/styles.css" rel="stylesheet">
  <link href="./css/hamburger.css" rel="stylesheet">
  <!-- CUSTOM CSS -->

</head>
<body class="poppins-light">

    <!-- Navigation -->
    <nav class="navigation-color text-white px-4 pb-8 pt-10 fixed w-full top-0 z-20">
      <div class="container mx-auto">
        <div class="flex justify-between">
            <div class="flex row justify-center">
              <a href="#" title="Home">
                <p class="text-4xl archivo-black-regular inline-block">DRHM</p>
                <p class="text-xs inline-block">Management Consultancy <br> Services</p>
              </a>
            </div>


            <div  class="pt-2">
              <ul class="animate__animated hidden row gap-5 lg:flex" id="mainNavigationItems">
                  <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 font-extralight text-sm text-blue-300">HOME</li>
                  <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 font-extralight text-sm">ABOUT US</li>
                  <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 font-extralight text-sm">SERVICES</li>
              </ul>
              <div>
                <span onclick="showFullScreenNav()" class="block lg:hidden">
                  <div id="hambrgerButton">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </span>
              </div>
            </div>
          </div>
      </div>
    </nav>
    <!-- Navigation -->

    <nav class="px-4 navigation-color w-full fixed hidden top-0 bottom-0 text-white animate__animated z-10" id="fullScreenNav">
      <div class="h-screen flex justify-center items-center">
        <ul class="animate__animated animate__fadeInRight animate__delay-1s">
          <li class="flex justify-center items-center text-xl md:text-2xl mb-10 cursor-pointer hover:text-blue-400 font-thin text-blue-300">HOME</li>
          <li class="flex justify-center items-center text-xl md:text-2xl mb-10 cursor-pointer hover:text-blue-400 font-thin">ABOUT US</li>
          <li class="flex justify-center items-center text-xl md:text-2xl  mb-10  cursor-pointer hover:text-blue-400 font-thin">SERVICES</li>
        </ul>
      </div>
    </nav>





    <section class="default-bg w-full pt-44 md:pt-52 lg:pt-64 pb-24 md:pb-36 lg:pb-44 text-white">
      <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 lg:col-span-7 mx-5 sm:mx-10 md:mx-16 lg:mx-24">
            <p class="font-light">
              <p class="text-center lg:text-left text-3xl sm:text-4xl md:text:text-5xl lg:text-6xl  animate__animated animate__fadeInLeft animate__delay-1s archivo-black-regular">Reroute to Success</p>
            </p>
            <p class="text-center lg:text-left mt-6 text-sm font-light animate__animated animate__fadeInLeft animate__delay-2s">
              At <span class="font-bold">DRHM</span>, we believe that success is not just a destination, but a journey of continuous improvement and innovation. Our consulting services offer expert guidance and strategic insights to help businesses navigate their path to success with confidence and clarity...

              <!-- Whether it's achieving quality management certifications, ensuring food safety compliance, optimizing facility layout, or streamlining HR processes, we're here to guide you on your journey. With our tailored solutions and unwavering commitment to excellence, we'll help you reroute any obstacles into opportunities, unlocking new pathways to sustainable growth and prosperity. Let us be your compass on the road to success. -->
            </p>
            <p class="text-center lg:text-left mt-2 animate__animated animate__fadeInLeft animate__delay-3s">
              <button class=" bg-blue-700 rounded-full p-4 font-medium text-xs md:text-sm lg:text-base hover:bg-blue-600 text-white mt-2">Read More</button>
            </p>
          </div>
          <div class="col-span-12 lg:col-span-5 default-bg lg:-mt-5 flex justify-center lg:block lg:justify-start mx-2 sm:mx-4">
              <img src="./images/home-page2.jpg" alt="Consultancy image" class="h-56 w-56 sm:h-72 sm:w-72 md:h-80 md:w-80 lg:h-96 lg:w-96 object-cover rounded-full shadow-xl shadow-sky-900 opacity-0 animate__animated animate__fadeInLeft animate__delay-3s ">
          </div>
      </div>
    </section>





    <!-- divider -->
    <section class="relative w-full">
        <div class="custom-shape-divider-bottom-1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- divider -->




    <section class="px-4 w-full py-16 md:py-28 lg:py-36 default-text-color">
      <div class="container mx-auto">

          <div class="block text-xl md:text-2xl lg:text-3xl text-center font-medium opacity-0 animate__animated animate__delay-1s section-2-header archivo-black-regular">
           Integrated Solutions & Support
          </div>
          <div class="block font-light text-xs md:text-sm lg:text-base text-center px-5 sm:px-10 md:px-16 lg:px-20 opacity-0 animate__animated animate__delay-1s section-2-description pt-5">
            We offer Integrated Solutions & Support to guide businesses on their journey to success
          </div>

          <div class="grid grid-cols-12 gap-4 pt-12">
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 block  text-center opacity-0 animate__animated animate__delay-1s section-2-data-1">
                <img src="./images/comprehensive.svg" alt="Comprehensive image" class="w-14 h-14 block mx-auto" >
                <span class="font-medium text-base lg:text-xl block py-5 archivo-black-regular">Comprehensive</span>
                <p class="font-light text-sm lg:text-base px-5 sm:px-10 md:px-16 lg:px-20 ">
                  Our services cover a wide range of needs, ensuring that clients receive all-encompassing support for their business requirements
                </p>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 block  text-center opacity-0 animate__animated animate__delay-1s section-2-data-2">
                <img src="./images/expertise.svg" alt="Expertise image" class="w-14 h-14 block mx-auto" >
                <span class="font-medium text-base lg:text-xl block py-5 archivo-black-regular">Expertise</span>
                <p class="font-light text-sm lg:text-base px-5 sm:px-10 md:px-16 lg:px-20 ">
                  Our team comprises world-class experts with extensive experience and knowledge in their respective fields
                </p>
            </div>
            <div class="col-span-12 sm:col-span-12 lg:col-span-4 block  text-center opacity-0 animate__animated animate__delay-1s section-2-data-3">
                <img src="./images/support.svg" alt="Supportive image" class="w-14 h-14 block mx-auto" >
                <span class="font-medium text-base lg:text-xl block py-5 archivo-black-regular">Supportive</span>
                <p class="font-light text-sm lg:text-base px-5 sm:px-10 md:px-16 lg:px-20 ">
                  We foster a supportive environment for our clients, offering not just services but also mentorship and community engagement
                </p>
            </div>

          </div>

      </div>
    </section>




    <!-- divider -->
    <section class="relative w-full">
      <div class="custom-shape-divider-top-1">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
              <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
              <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
          </svg>
      </div>
  </section>
  <!-- divider -->

    <section class="px-4 w-full py-16 md:py-28 lg:py-36 default-bg text-white">
      <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-4">

          <div class="col-span-12 lg:col-span-5 lg:-mt-5 flex justify-center mx-5">
            <img src="./images/empowerment.jpg" alt="empowerment image" class="h-56 w-56 sm:h-72 sm:w-72 md:h-80 md:w-80 lg:h-96 lg:w-96 object-cover rounded-full shadow-xl shadow-sky-900 opacity-0 animate__animated animate__delay-1s section-3-data-image ">
        </div>

          <div class="col-span-12 lg:col-span-7 mx-4 sm:mx-6 md:mx-8 lg:mx-16 pt-5 lg:pt-0">
            <p class="font-light">
              <p class="text-center lg:text-left text-base sm:text-xl md:text:text-2xl lg:text-3xl  animate__animated animate__delay-1s archivo-black-regular section-3-data-header opacity-0">If there's one word to describe DRHM, it's "Empowerment".</p>
            </p>
            <p class="text-center lg:text-left mt-6 text-sm font-light animate__animated animate__delay-2s pt-3 pb-10 lg:pb-5 section-3-data-description opacity-0">
              At <span class="font-bold">DRHM</span>, we are dedicated to empowerment. We believe in equipping businesses with the tools, knowledge, and support they need to unlock their full potential and achieve success. Through our comprehensive consulting services, we empower our clients to navigate complex challenges, streamline processes, and cultivate a culture of excellence. With RDHM by your side, you'll have the confidence and resources to overcome obstacles, seize opportunities, and chart a course towards sustainable growth and prosperity. Let us empower your journey to success.
            </p>
          </div>


      </div>
    </section>

    <!-- divider -->
    <section class="relative w-full">
      <div class="custom-shape-divider-bottom-2">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- divider -->


    <section class="px-4 w-full py-10 md:py-16 lg:py-22 default-text-color">
      <div class="container mx-auto">

          <div class="block text-xl md:text-2xl lg:text-3xl text-center font-medium opacity-0 animate__animated animate__delay-1s section-4-header archivo-black-regular">
            Our Clients
           </div>
           <div class="block font-light text-xs md:text-sm lg:text-base text-center px-5 sm:px-10 md:px-16 lg:px-20 opacity-0 animate__animated animate__delay-1s section-4-description pt-5">
            A few of the clients who have benefited from <b>DRHM</b>
           </div>

          <div class="grid grid-cols-12 gap-4 pt-12 text-center text-white">
            <div class="col-span-12 sm:col-span-4 lg:col-span-4 block  text-center opacity-0 animate__animated animate__delay-1s section-4-data-1 default-bg py-8 shadow-sky-800 shadow-2xl">
                <img src="./images/comprehensive.svg" alt="Comprehensive image" class="w-14 h-14 block mx-auto" >
                <span class="font-extralight text-sm lg:text-base block py-5 mx-3">Masagana Farm Agriventures Inc.</span>
            </div>
            <div class="col-span-12 sm:col-span-4 lg:col-span-4 block  text-center opacity-0 animate__animated animate__delay-1s section-4-data-2 default-bg py-8 shadow-sky-800 shadow-2xl">
                <img src="./images/expertise.svg" alt="Expertise image" class="w-14 h-14 block mx-auto" >
                <span class="font-extralight text-sm lg:text-base block py-5 mx-3">Lailens Pastries</span>
            </div>
            <div class="col-span-12 sm:col-span-4 lg:col-span-4 block  text-center opacity-0 animate__animated animate__delay-1s section-4-data-3 default-bg py-8 shadow-sky-800 shadow-2xl">
                <img src="./images/support.svg" alt="Supportive image" class="w-14 h-14 block mx-auto" >
                <span class="font-extralight text-sm lg:text-base block py-5 mx-3">Golden Crown Petals</span>
            </div>

          </div>

      </div>
    </section>






    <section class="px-4 w-full py-6 md:py-16 lg:py-24 default-bg text-white">
      <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-3">
          <div class="col-span-6 sm:col-span-6 lg:col-span-3 pt-10">
            <ul>
              <li class="text-xl mb-5">
                <a href="#" class="me-10">
                  <p class="text-3xl archivo-black-regular inline-block">DRHM</p>
                  <p class="text-xs inline-block">Management Consultancy <br> Services</p>
                </a>
              </li>
              <li class="text-base font-extralight cursor-pointer text-blue-300 hover:border-b hover:border-b-blue-300 w-fit transition-all duration-75 ease-in-out">HOME</li>
              <li class="text-base font-extralight cursor-pointer text-blue-300 hover:border-b hover:border-b-blue-300 w-fit transition-all duration-75 ease-in-out">ABOUT US</li>
              <li class="text-base font-extralight cursor-pointer text-blue-300 hover:border-b hover:border-b-blue-300 w-fit transition-all duration-75 ease-in-out">SERVICES</li>
             </ul>
          </div>
          <div class="col-span-6 sm:col-span-6 lg:col-span-3 pt-10">
            <ul>
              <li class="text-base mb-5">FOLLOW US</li>
              <li class="inline-block">
                <a href="https://facebook.com">
                  <img src="./images/facebook.svg" alt="facebook" class="w-5 h-5" title="DRHM Management Consultancy Services facebook link">
                </a>
              </li>
              <li class="inline-block">
                <a href="https://instagram.com">
                  <img src="./images/instagram.svg" alt="instagram" class="w-5 h-5" title="DRHM Management Consultancy Services instagram link">
                </a>
              </li>
              <li class="inline-block">
                <a href="https://twitter.com">
                  <img src="./images/twitter.svg" alt="twitter" class="w-5 h-5" title="DRHM Management Consultancy Services twitter link">
                </a>
              </li>
            </ul>
          </div>
          <div class="col-span-12 sm:col-span-6 lg:col-span-3 pt-10">
            <ul>
              <li class="text-base mb-5">CONTACTS</li>
              <li class="text-sm pb-2">Office Address</li>
              <li class="text-xs font-thin">
                Block 2 Unit A lot 30-31 Pring Apt. Sunrise Village Maliwalo Tarlac City 2300</li>
            </ul>
          </div>
          <div class="col-span-12 sm:col-span-6 lg:col-span-3 sm:pt-10">
            <ul>
              <li class="text-sm pb-2">Email</li>
              <li class="text-xs font-thin break-words">info.drhmmanagementconsultancy@gmail.com</li>
            </ul>
            <ul>
              <li class="text-sm mt-2 pb-2">Phone</li>
              <li class="text-xs  font-thin break-words">0916-7701330</li>
              <li class="text-xs  font-thin break-words">0970-7427690</li>
            </ul>
          </div>
          <div class="col-span-12 text-center pt-24">
            <p class="text-sm font-thin">© 2024 All rights reserved</p>
          </div>
        </div>
      </div>
    </section>






  </body>

  <!-- CUSTOM JS -->
  <script src="./js/hamburger.js"></script>
  <script src="./js/scroll-magic.js"></script>
  <!-- CUSTOM JS -->
</html>
