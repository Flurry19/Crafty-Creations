@extends('footer')
@extends('layout')
@extends('nav')

@section('content')
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h2 class="text-2xl font-semibold text-center mb-6">{{ __('Login') }}</h2>

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                        </div>
                        @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        <div class="mb-4">
                            <div class="flex items-center">
                                <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="ml-2 text-gray-700" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

                        <div class="mb-4 text-center">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-gray-600 hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
