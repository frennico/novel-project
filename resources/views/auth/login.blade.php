@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-32">
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <div class="text-2xl font-bold mb-6">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-input mt-1 block w-full border-2 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input mt-1 block w-full border-2 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-checkbox">
                            <label for="remember" class="ml-2 text-sm">{{ __('Remember Me') }}</label>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="ml-4 text-blue-500" href="{{ route('password.request') }}">
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
