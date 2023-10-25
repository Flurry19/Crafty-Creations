{{--@extends('footer')--}}
@extends('layout')
@extends('nav')

@section('content')


<main>
    <section class="py-12 sm:py-16">

        <div class="container mx-auto px-4">
            <a href="/" class="text-white bg-blue-300 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-500">Terug</a>

            <div class="lg:col-gap-12 xl:col-gap-16 mt-8 grid grid-cols-1 gap-12 lg:mt-12 lg:grid-cols-5 lg:gap-16">
                <div class="lg:col-span-3 lg:row-end-1">
                    <div class="lg:flex lg:items-start">
                        <div class="lg:order-2 lg:ml-5">
                            <div class="max-w-xl overflow-hidden rounded-lg">
                                <img class="h-full w-full max-w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />
                            </div>
                        </div>

                        <div class="mt-2 w-full lg:order-1 lg:w-32 lg:flex-shrink-0">
                            <div class="flex flex-row items-start lg:flex-col">
                                <button type="button" class="flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border-2 border-gray-900 text-center">
                                    <img class="h-full w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />
                                </button>
                                <button type="button" class="flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border-2 border-transparent text-center">
                                    <img class="h-full w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />
                                </button>
                                <button type="button" class="flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border-2 border-transparent text-center">
                                    <img class="h-full w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 lg:row-span-2 lg:row-end-2">
                    <h1 class="sm: text-2xl font-bold text-gray-900 sm:text-3xl">{{$product->title}}</h1>
                    <h2 class="sm: text-sm text-gray-900 sm:text-sm">verkocht door</h2>
                    <h2 class="sm: text-1xl font-bold text-gray-900 sm:text-xl">{{$product->shop->name}}</h2>
                    <div class="mt-10 flex flex-col items-center justify-between space-y-4 border-t border-b py-4 sm:flex-row sm:space-y-0 grid grid-rows-3">
                        <div class="flex items-end row-span-3">
                            <h1 class="text-3xl font-bold">€{{$product->price}}</h1>
                        </div>
                        <div class="row-span-2 py-2">
                        <button type="button" class="flex items-center justify-center rounded-md border-2 border-transparent bg-gray-900 bg-none px-12 py-3 text-center text-base font-bold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-gray-800">
                            Voeg toe aan favorieten
                        </button>
                        </div>
                        <div class="row-span-1 py-2">
                        <button type="button" class="inline-flex items-center justify-center rounded-md border-2 border-transparent bg-gray-900 bg-none px-12 py-3 text-center text-base font-bold text-white transition-all duration-200 ease-in-out focus:shadow hover:bg-gray-800">
                            Bestel op webshop
                        </button>
                    </div>
                    </div>

                    <ul class="mt-8 space-y-2">
                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                            <svg class="mr-2 block h-5 w-5 align-middle text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" class=""></path>
                            </svg>
                            Geproduceerd in {{$product->shop->nation}}
                        </li>

                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                            <svg class="mr-2 block h-5 w-5 align-middle text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                            </svg>
                            Handgemaakt
                        </li>
                        <li class="flex items-center text-left text-sm font-medium text-gray-600">
                            <svg class="mr-2 block h-5 w-5 align-middle text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="5" y="3" width="14" height="6" rx="2" />  <path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2" />  <rect x="10" y="15" width="4" height="6" rx="1" /></svg>
                            Materialen: {{$product->materials}}
                        </li>
                    </ul>
                </div>

                <div class="lg:col-span-3 mx-10">

                    <div class="mt-8 flow-root sm:mt-12">
                        <h1 class="text-3xl font-bold">Omschrijving</h1>
                        <p class="mt-4">{{$product->excerpt}}</p>
                        <p class="mt-4">{{$product->body}}</p>
                        <p class="mt-4">{{$product->extra}}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


</main>
@endsection
