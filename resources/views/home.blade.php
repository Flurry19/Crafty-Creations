@extends('footer')
@extends('layout')
@extends('nav')

@section('content')
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h2 class="text-2xl font-semibold text-center mb-6">{{ __('Dashboard') }}</h2>

                    <div class="mb-4">
                        @if (session('status'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('status') }}</span>
                            </div>
                        @endif
                    </div>

                    <p class="text-center">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
