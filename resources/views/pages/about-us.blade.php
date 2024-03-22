@extends('layouts.app')

@section('title')
About Us - DRHM Management Consultancy Services
@endsection

@section('mainContent')

    <x-navigation-component active="about-us" />
    <x-about-us.intro-section-component/>
    <x-dividers.bottom-first />
    <x-about-us.who-we-are-section-component />
    <x-about-us.what-we-do-section-component />
    <section class="default-bg text-white py-16">

        <span class="container mx-auto font-light text-center  text-2xl md:text-3xl lg:text-4xl  animate__animated animate__fadeInLeft animate__delay-1s archivo-black-regular block text-white">
            What We Do
        </span>
        <div class="lg:container mx-auto relative mt-5">
            <img src="./images/what-we-do.jpg" alt="What We Do Image" class="absolute left-0 top-0 bottom-0 w-full lg:w-1/2 h-full object-cover">
            <div class="grid grid-cols-12 relative">
                <div class="col-span-4 xl:col-span-5">

                </div>
                <div class="col-span-12 lg:col-span-8 xl:col-span-7 text-sm md:text-base default-text-color bg-white mx-5 mt-5 mb-0 lg:mx-0 lg:my-5 px-10 py-5">
                        <p class="container font-light text-xl md:text-2xl lg:text-3xl archivo-black-regular">Our Expertise</p>
                        <ul class="mt-6 grid gap-5 grid-cols-1">
                            <li >
                                <p class="font-medium">Manpower Sourcing: </p>
                                <p>We excel in sourcing top talent across various industries and job functions, ensuring that our clients have access to the best candidates for their needs.</p>
                            </li>
                            <li>
                                <p class="font-medium">Staffing Solutions:  </p>
                                <p>Whether you need temporary staff for a short-term project or permanent hires to build your team, we offer flexible staffing solutions to meet your requirements.</p>
                            </li>
                            <li>
                                <p class="font-medium">Workforce Management: </p>
                                <p>Our expertise extends to workforce planning, scheduling, and optimization, helping businesses streamline their operations and maximize productivity.</p>
                            </li>
                            </li>
                                <p class="font-medium">Training and Development: </p>
                                <p>We offer training programs designed to enhance the skills and capabilities of your workforce, ensuring they are equipped to excel in their roles.</p>
                            </li>
                            <li>
                                <p class="font-medium">Consulting Services: </p>
                                <p>Our team of experts provides strategic consulting services to help businesses identify opportunities for improvement and implement effective workforce strategies.</p>
                            </li>
                            <li>
                                <p class="font-medium">Technology Solutions: </p>
                                <p>Leveraging the latest technologies, we offer innovative solutions for recruitment, onboarding, and performance management, enabling businesses to stay ahead in today's digital landscape.</p>
                            </li>
                        </ul>
                        <div class="text-center w-full mt-10 ">

                        <a href="/services" class="bg-blue-700 rounded-full p-4 font-medium text-xs md:text-sm lg:text-base hover:bg-blue-600 text-white">Check Our Services</a>
                        </div>
                </div>
            </div>
        </div>

     </section>


@endsection





