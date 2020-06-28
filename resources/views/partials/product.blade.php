<!-- component -->
<div class="flex flex-col justify-center items-center max-w-sm mx-auto mb-8 px-2">
    <div style="background-image: url({{ asset('images/1.jpg') }})" class="bg-gray-300 h-64 w-full rounded-t-lg bg-cover bg-center mb-2"></div>
    <!-- <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden mb-3">
        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">2020 HP ZBook 15 G5 15.6″ FHD (1920×1080)</div>
        <div class="flex items-center justify-between py-2 px-3 bg-yellow-100">
            <h1 class="text-gray-800 font-bold ">$129</h1>
            <button class=" bg-orange-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Add to cart</button>
        </div>
    </div> -->
    <div class="">
        <h1 class="text-gray-800 font-extrabold text-lg flex flex-row justify-between mb-2">
            <span>$129</span>
            <a href="#" class="w-6 h-4"><svg class="text-gray-500 hover:text-orange-600" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg></a>
        </h1>
        <a href="" class="text-blue-600 block mb-5">Mobile Workstation Laptop (Intel 6-Core Xeon E-2176M...</a>
        @if (array_rand([1,2]) === 1)
        <a href="#" class="bg-pink-800 hover:bg-pink-700 shadow-xl text-gray-100 w-full block text-center py-2 rounded">Add to Cart</a>
        @else
        <a href="#" class="bg-pink-800 hover:bg-pink-700 shadow-xl text-gray-100 w-full block text-center py-2 rounded">Choose Options</a>
        @endif

    </div>

</div>
