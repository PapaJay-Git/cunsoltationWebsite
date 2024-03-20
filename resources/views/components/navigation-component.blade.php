

        <div>
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
                                <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 font-extralight text-sm {{ $active == 'home' ? ' text-blue-300' : ''  }}"><a href="/">HOME</a></li>
                                <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 font-extralight text-sm {{ $active == 'services' ? ' text-blue-300' : ''  }}"><a href="/services">SERVICES</a></li>
                                <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 font-extralight text-sm {{ $active == 'about-us' ? ' text-blue-300' : ''  }}"><a href="/about-us">ABOUT US</a></li>
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



            <nav class="px-4 navigation-color w-full fixed hidden top-0 bottom-0 text-white animate__animated z-10" id="fullScreenNav">
                <div class="h-screen flex justify-center items-center">
                    <ul class="animate__animated animate__fadeInRight animate__delay-1s">
                    <li class="flex justify-center items-center text-xl md:text-2xl mb-10 cursor-pointer hover:text-blue-400 font-thin  {{ $active == 'home' ? ' text-blue-300' : ''  }}"><a href="/">HOME</a></li>
                    <li class="flex justify-center items-center text-xl md:text-2xl mb-10 cursor-pointer hover:text-blue-400 font-thin  {{ $active == 'services' ? ' text-blue-300' : ''  }}"><a href="/services">SERVICES</a></li>
                    <li class="flex justify-center items-center text-xl md:text-2xl mb-10 cursor-pointer hover:text-blue-400 font-thin  {{ $active == 'about-us' ? ' text-blue-300' : ''  }}"><a href="/about-us">ABOUT US</a></li>
                    </ul>
                </div>
            </nav>
        </div>
