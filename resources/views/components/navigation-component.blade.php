

        <div class="max-w-full overflow-hidden">
            <nav class="navigation-color text-white px-4 pb-5 pt-5 fixed w-screen top-0 z-20 ">
                <div class="container mx-auto ">
                    <div class="flex justify-between items-center">
                        <div class="flex row justify-center">
                            <a href="/" title="Home">
                            <img src="./images/DRHM_LOGO.png" alt="DRHM logo" class="w-auto h-10 md:h-12 rounded-md">
                            <p class="source-code-pro-200 text-xs ps-7 md:ps-9">REROUTE TO SUCCESS</p>
                            </a>
                        </div>


                        <div  class="pt-2">
                            <ul class="animate__animated hidden row gap-5 lg:flex source-code-pro-200" id="mainNavigationItems">
                                <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 text-sm {{ $active == 'home' ? ' text-blue-300' : ''  }}"><a href="/">HOME</a></li>
                                <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 text-sm {{ $active == 'about-us' ? ' text-blue-300' : ''  }}"><a href="/about-us">ABOUT-US</a></li>
                                <li class="animate__animated cursor-pointer transition-colors duration-200 ease-in hover:text-blue-400 text-sm {{ $active == 'services' ? ' text-blue-300' : ''  }}"><a href="/services">SERVICES</a></li>
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



            <nav class="px-4 navigation-color w-full fixed hidden top-0 bottom-0 text-white animate__animated z-10 source-code-pro-200" id="fullScreenNav">
                <div class="h-screen flex justify-center items-center">
                    <ul class="animate__animated animate__fadeInRight animate__delay-1s">
                    <li class="flex justify-center items-center text-base md:text-xl mb-10 cursor-pointer hover:text-blue-400  {{ $active == 'home' ? ' text-blue-300' : ''  }}"><a href="/">HOME</a></li>
                    <li class="flex justify-center items-center text-base md:text-xl mb-10 cursor-pointer hover:text-blue-400  {{ $active == 'about-us' ? ' text-blue-300' : ''  }}"><a href="/about-us">ABOUT-US</a></li>
                    <li class="flex justify-center items-center text-base md:text-xl mb-10 cursor-pointer hover:text-blue-400  {{ $active == 'services' ? ' text-blue-300' : ''  }}"><a href="/services">SERVICES</a></li>
                    </ul>
                </div>
            </nav>
        </div>
