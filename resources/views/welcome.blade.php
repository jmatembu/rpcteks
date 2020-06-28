<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="bg-green-100 text-gray-500 flex flex-row justify-between pt-2 px-32">
        <div class="contacts">
            <ul class="flex flex-row items-center">
                <li class="flex flex-row items-center mr-3">
                    <svg class="h-5 w-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>+1208-779-7759</span>
                </li>
                <li class="flex flex-row items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>support@reliablepctekservices.com</span>
                </li>
            </ul>
        </div>
        <div class="social"></div>
    </div>
    <header class="px-32 bg-green-100">
        <div class="flex flex-row items-center justify-between py-4">
            <div class="">
                <h1 class=" font-extrabold text-3xl">
                    <span class="text-green-700">R</span>eliable <span class="text-green-700">Pc</span> <span class="text-green-700">T</span>eck <span class="text-green-700">S</span>ervices</h1>
                <small class="text-base text-gray-600">Computer and Printer Repair</small>
            </div>
            <div class="w-1/2 px-8">
                <form class="relative">
                    <input class="border border-gray-300 focus:outline-none focus:border-gray-500 bg-gray-100 rounded-full  px-5 py-3 w-full text-lg" type="search" placeholder="Search products...">
                    <svg class="w-8 h-8 absolute top-0 right-0 text-gray-500 mt-2 mr-3" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>
            </div>
            <div class="">
                <ul class="flex flex-row">
                    <li class="flex flex-row mr-3">
                        <svg class="h-6 w-6 mr-1 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <a href="#" class="text-blue-700">Cart <sup class="bg-pink-800 text-gray-100 py-1 px-2 rounded-full">1</sup></span>
                    </li>
                    <li class="flex flex-row">
                        <svg class="h-6 w-6 mr-1 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <a href="#" class="text-blue-700">My Account</span>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <nav class="flex flex-row justify-center px-32 bg-green-700 text-lg shadow-xl">
        <a href="{{ url('/') }}" class="py-4 px-6 text-gray-100 border-b-2 border-transparent hover:border-gray-100">
            Shop
        </a>
        <a href="#" class="py-4 px-6 text-gray-100 border-b-2 border-transparent hover:border-gray-100">
            Services
        </a>
        <a href="#" class="py-4 px-6 text-gray-100 border-b-2 border-transparent hover:border-gray-100">
            About Us
        </a>
        <a href="#" class="py-4 px-6 text-gray-100 border-b-2 border-transparent hover:border-gray-100">
            Support
        </a>
    </nav>

    <div class=" flex flex-row pt-16 px-32 mb-16">
        <div class="w-9/12 pr-8">
            <div class="grid grid-cols-3 gap-4">
                <!-- component -->
                @for($i = 1; $i <= 12; $i++) @include('partials.product') @endfor </div> <div class="flex flex-col items-center my-12">
                    <div class="flex text-gray-700">
                        <div class="h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-6 h-6">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </div>
                        <div class="flex h-12 font-medium rounded-full bg-gray-200">
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">1</div>
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full bg-teal-600 text-white ">2</div>
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">3</div>
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">...</div>
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">13</div>
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">14</div>
                            <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full  ">15</div>
                            <div class="w-12 h-12 md:hidden flex justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-teal-600 text-white">2</div>
                        </div>
                        <div class="h-12 w-12 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-6 h-6">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </div>
            </div>
        </div>
        <div class="w-3/12 pl-6">
            <h3 class="font-bold text-xl mb-3 text-green-900">Categories</h3>
            <ul class="mb-6">
                <li class="mb-2"><a href="#" class="text-blue-700">Computer Parts</a></li>
                <li class="mb-2"><a href="#" class="text-blue-700">Desktop Accessories</a></li>
                <li class="mb-2"><a href="#" class="text-blue-700">Desktop Computers</a></li>
                <li class="mb-2"><a href="#" class="text-blue-700">Desktop Hard Drives</a></li>
                <li class="mb-2"><a href="#" class="text-blue-700">Desktop Memory</a></li>
            </ul>
            <h3 class="font-bold text-xl mb-3 text-green-900">Country</h3>
            <select class="w-full focus:outline-none focus:border-gray-500 px-4 py-3 border border-gray-300 rounded-full mb-6">
                <option>Uganda</option>
                <option selected>United States</option>
            </select>

            <h3 class="font-bold text-xl mb-3 text-green-900">Currency</h3>
            <select class="w-full focus:outline-none focus:border-gray-500 px-4 py-3 border border-gray-300 rounded-full">
                <option>Uganda Shilling (UGX)</option>
                <option selected>United States Dollar ($)</option>
            </select>
        </div>
    </div>
    <div>

    </div>
    <footer class="flex flex-row px-32 bg-green-900 text-white py-16">
        <div class="w-1/2 flex flex-grow items-center">
            <div class="mr-6">
                <h2 class="font-bold text-xl mb-2">Reliable Pc Tek Services</h2>
                <p class="text-gray-400">®RPCTEKS-2020 375 <br>
                    Buckboard Lane, Idaho Falls, ID 83402 <br>
                    Call: 208-779-7759</p>
            </div>
            <ul>
                <li class="flex flex-row items-center">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 5l7 7-7 7"></path>
                    </svg>
                    <a href="#" class="hover:underline">Privacy Policy</a>
                </li>
                <li class="flex flex-row items-center">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 5l7 7-7 7"></path>
                    </svg>
                    <a href="#" class="hover:underline">Cookie Policy</a>
                </li>
            </ul>
        </div>
        <div class="bg-white rounded w-1/2 flex items-center justify-center"><img src="{{ asset('images/2.png') }}" alt=""></div>
    </footer>
</body>

</html>
