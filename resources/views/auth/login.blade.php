@extends('layouts.app')
@section('title','會員登錄')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('會員登錄') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
</svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('會員登錄') }}</p>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12 flex items-center">
                  <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
                    <div class="py-12 p-10 bg-white rounded-xl">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">電子信箱</label>
                        <input id="email" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="請輸入電子信箱" />

                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">密碼</label>
                        <input id="password" type="password" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="請輸入密碼" />

                      </div>
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label mr-4 text-gray-700 inline-block" for="remember">
                        {{ __('Remember Me') }}
                      </label>

                      <button class="btn w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300" type="submit">登入</button>

                      <div class="sm:flex sm:flex-wrap mt-6 sm:mb-4 text-sm text-center">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="flex-2 underline">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                        <p class="flex-1 text-gray-500 text-md mx-4 my-1 sm:my-auto">
                            /
                        </p>
            
                        <a href="register" class="flex-2 underline">
                            創建帳號
                        </a>
                      </div>
                    </form>
                    </div>
                  </div>
            </section>
            
        </div>

    </div>
</div>

@stop
