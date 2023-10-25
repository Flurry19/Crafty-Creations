@extends('footer')
@extends('layout')
@extends('nav')

@section('content')
    <div class="relative h-[300px] font-[sans-serif]">
        <img src="https://readymadeui.com/cardImg.webp" alt="Banner Image" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center text-white  px-6">
            <h2 class="text-4xl font-bold mb-4">Producten</h2>
            <p class="text-lg text-center mb-6">Vind hier de leukste handgemaakte cadeaus van allerlei small businesses!</p>
            <p class="text-lg text-center mb-6">Hier kan je en small businesses supporten en leuke handgemaakte cadeaus vinden!</p>
            <p class="text-lg text-center mb-6">Alle items worden gecontroleerd op dropshipping of dergelijke om echt alleen handgemaakte producten te promoten.</p>


        </div>
    </div>

    <form method="GET" action="#">
        <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only dark:text-white">Zoek</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="default-search" value="{{request('search')}}" class="block w-500 p-4 pl-10 text-sm text-black rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-black dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Zoek op producten..." required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-300 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-300">Search</button>
        </div>
    </form>

    <main>
        <div class="grid grid-cols-5 gap-4">
        @foreach($products as $product)
            <div class="w-full max-w-sm bg-white border border-gra y-200 rounded-lg shadow dark:bg-white dark:border-gray-700 ">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{asset('img/logo.png')}}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-black dark:text-black">
                            <a href="/products/{{$product->slug}}">
                                {{$product->title}}
                            </a></h5>
                    </a>
{{--                    <div class="flex items-center mt-2.5 mb-5">--}}
{{--                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">--}}
{{--                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>--}}
{{--                        </svg>--}}
{{--                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">--}}
{{--                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>--}}
{{--                        </svg>--}}
{{--                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">--}}
{{--                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>--}}
{{--                        </svg>--}}
{{--                        <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">--}}
{{--                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>--}}
{{--                        </svg>--}}
{{--                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">--}}
{{--                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>--}}
{{--                        </svg>--}}
{{--                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>--}}
{{--                    </div>--}}
                    <div class="flex items-center justify-between">
                        <span class="text-1xl font-bold text-black dark:text-black">{{$product->category->name}}</span>
                        <span class="text-4xl font-bold text-black dark:text-black">€{{$product->price}}</span>
                    </div>
                    <div class="flex flex-col">
                        <a href="/products/{{$product->slug}}" class="text-white bg-blue-300 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-500 mt-4">Meer informatie</a>
                        <a href="/categories/{{$product->category->slug}}" class="text-white bg-blue-300 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-500 mt-4">{{$product->category->name}}</a>
                        <a href="/shops/{{$product->shop->slug}}" class="text-white bg-blue-300 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-500 mt-4">{{$product->shop->name}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
    </div>
@endsection

