@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-28">
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <div class="text-2xl font-bold mb-6">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-input mt-1 block w-full border-2  @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-input mt-1 block w-full border-2  @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input mt-1 block w-full border-2  @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-sm font-medium text-gray-600">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-input mt-1 block w-full border-2 " name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
