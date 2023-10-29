@extends('footer')
@extends('layout')
@extends('nav')

@section('content')
<div>
    <main>
    <form method="POST" action="/admin/products" enctype="multipart/form-data">
        @csrf

                <section class="py-12 sm:py-16">

                    <div class="container mx-auto px-4">
                        <a href="/" class="text-white bg-blue-300 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-500">Terug</a>

                        <div class="lg:col-gap-12 xl:col-gap-16 mt-8 grid grid-cols-1 gap-12 lg:mt-12 lg:grid-cols-5 lg:gap-16">
                            <div class="lg:col-span-3 lg:row-end-1">
                                <div class="lg:flex lg:items-start">
                                    <div class="lg:order-2 lg:ml-5">
                                        <div class="max-w-xl overflow-hidden rounded-lg">
                                           <input type="file" name="image" id="image"></input>
                                        </div>
                                    </div>

{{--                                    <div class="mt-2 w-full lg:order-1 lg:w-32 lg:flex-shrink-0">--}}
{{--                                        <div class="flex flex-row items-start lg:flex-col">--}}
{{--                                            <button type="button" class="flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border-2 border-gray-900 text-center">--}}
{{--                                                <img class="h-full w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />--}}
{{--                                            </button>--}}
{{--                                            <button type="button" class="flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border-2 border-transparent text-center">--}}
{{--                                                <img class="h-full w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />--}}
{{--                                            </button>--}}
{{--                                            <button type="button" class="flex-0 aspect-square mb-3 h-20 overflow-hidden rounded-lg border-2 border-transparent text-center">--}}
{{--                                                <img class="h-full w-full object-cover" src="/images/JHxMnVrtPMdcNU1s_7g7f.png" alt="" />--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>

                            <div class="lg:col-span-2 lg:row-span-2 lg:row-end-2">
                                <h1>
                                    <input name="title" type="text" id="title" value="{{old('title')}}" placeholder="Titel" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                    @error('title')
                                    <p class="text-red text-xs mt-2">{{$message}}</p>
                                    @enderror
                                </h1>
                                <h2 class="sm: text-sm text-gray-900 sm:text-sm">verkocht door</h2>
                                <h2 class="sm: text-1xl font-bold text-gray-900 sm:text-xl">shopnaam</h2>
                                <h2 class="sm: text-1xl font-bold text-gray-900 sm:text-xl">
                                    <select name="category_id" id="category_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach(\App\Models\Category::all() as $category)
                                        <option value="{{$category->id}}">
                                            {{old('category_id') === $category->id ? 'selected' : ''}}
                                            {{ucwords($category->name)}}</option>
                                      @endforeach
                                    </select>
                                </h2>

                                <div class="mt-10 flex flex-col items-center justify-between space-y-4 border-t border-b py-4 sm:flex-row sm:space-y-0 grid grid-rows-3">
                                    <div class="flex items-end row-span-3">
                                        <h1 class="text-3xl font-bold">€
                                            <input name="price" type="text" id="price" value="{{old('price')}}" placeholder="Prijs" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                            @error('price')
                                            <p class="text-red text-xs mt-2">{{$message}}</p>
                                            @enderror
                                        </h1>
                                    </div>
                                    <div class="row-span-1 py-2">
                                        <input name="url" type="text" id="url" value="{{old('url')}}" placeholder="URL Webshop Product" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                        @error('url')
                                        <p class="text-red text-xs mt-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <ul class="mt-8 space-y-2">
                                    <li class="flex items-center text-left text-sm font-medium text-gray-600">
                                        <svg class="mr-2 block h-5 w-5 align-middle text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" class=""></path>
                                        </svg>
                                        Geproduceerd in

                                    </li>
{{--                                    <li>--}}
{{--                                        <input type="text" id="nation" value="{{old('nation')}}" placeholder="(Nederland, Verenigd Koninkrijk, Verenigde Staten, ...)" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>--}}
{{--                                    </li>--}}

                                    <li class="flex items-center text-left text-sm font-medium text-gray-600">
                                        <svg class="mr-2 block h-5 w-5 align-middle text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
                                        </svg>
                                        Handgemaakt
                                    </li>
                                    <li class="flex items-center text-left text-sm font-medium text-gray-600">
                                        <svg class="mr-2 block h-5 w-5 align-middle text-gray-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="5" y="3" width="14" height="6" rx="2" />  <path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2" />  <rect x="10" y="15" width="4" height="6" rx="1" /></svg>
                                        Materialen
                                    </li>
                                    <li>
                                        <input name="materials" type="text" id="materials" value="{{old('materials')}}" placeholder="(Glas, Hout, Metaal, ...)" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                        @error('materials')
                                        <p class="text-red text-xs mt-2">{{$message}}</p>
                                        @enderror
                                    </li>
                                    <li>
                                        <input name="slug" type="text" id="slug" value="{{old('slug')}}" placeholder="slug" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                        @error('slug')
                                        <p class="text-red text-xs mt-2">{{$message}}</p>
                                        @enderror
                                    </li>
                                </ul>
                            </div>

                            <div class="lg:col-span-3 mx-10">

                                <div class="mt-8 flow-root sm:mt-12">
                                    <h1 class="text-3xl font-bold">Omschrijving</h1>
                                    <p class="mt-4">
                                        <input name="excerpt" type="text" id="excerpt" value="{{old('excerpt')}}" placeholder="Tekst 1" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>

                                    </p>
                                    @error('excerpt')
                                    <p class="text-red text-xs mt-2">{{$message}}</p>
                                    @enderror
                                    <p class="mt-4">
                                        <input name="body" type="text" id="body" value="{{old('body')}}" placeholder="Tekst 2 (mag leeggelaten worden)" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">

                                    </p>
                                    @error('body')
                                    <p class="text-red text-xs mt-2">{{$message}}</p>
                                    @enderror
                                    <p class="mt-4">
                                        <input name="extra" type="text" id="extra" value="{{old('extra')}}" placeholder="Tekst 3 (mag leeggelaten worden)" class="shadow-sm bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">

                                    </p>
                                    @error('extra')
                                    <p class="text-red text-xs mt-2">{{$message}}</p>
                                    @enderror

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="py-4 px-4">
        <button type="submit" class="text-white bg-blue-300 hover:bg-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-300 dark:hover:bg-blue-500 dark:focus:ring-blue-500">Plaats product</button>
                    </div>
                </section>
    </form>
</main>
</div>
@endsection
