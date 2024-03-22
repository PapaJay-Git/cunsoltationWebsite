


<section class="px-4 w-full py-12 md:py-20 relative {{ $isReverse ? 'default-bg text-white' : 'bg-white default-text-color' }}">
    <div class="absolute right-0 bottom-0 w-2/3 h-32 {{ $isReverse ? 'bg-gray-900' : 'bg-sky-200' }} ">

    </div>
    <div class="absolute left-0 top-0 w-1/2 xl:w-1/3 h-32 {{ $isReverse ? 'bg-gray-900' : 'bg-sky-100' }} ">

    </div>
    <div class="container mx-auto">
      <div class="grid grid-cols-12 gap-4">

        <div class="col-span-12 md:col-span-5 xl:col-span-4 md:-mt-5 flex justify-center  mx-5 ">
            <img src="./images/{{ $imageBackground }}" alt="{{ $serviceName }} image background" class="h-56 w-full sm:h-72 md:h-[76] object-cover shadow-xl shadow-sky-900 opacity-0 animate__animated animate__delay-1s {{ $classIdentifier."-1" }} ">
        </div>

        <div class="col-span-12 md:col-span-7 xl:col-span-8  mx-4 sm:mx-6 md:mx-8 pt-5 md:pt-0">
            <div class="flex h-full w-full flex-col justify-center">
                <div class="font-extralight lg:font-light">
                    <div class="text-center md:text-left text-lg sm:text-xl md:text:text-2xl md:text-3xl  animate__animated animate__delay-1s archivo-black-regular {{ $classIdentifier."-2" }} opacity-0">
                        {{ $serviceName }}
                    </div>
                </div>
                <div class="text-center md:text-left mt-6 text-xs md:text-sm font-base animate__animated animate__delay-2s pt-3 pb-10 lg:pb-5 {{ $classIdentifier."-3" }} opacity-0">
                    {{ $description }}
                </div>
            </div>
        </div>


    </div>
</section>
<div class="relative">
    <div class="custom-shape-divider-bottom-1710986517 {{ $isReverse ? 'reverse-true' : 'reverse-false' }}">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</div>
