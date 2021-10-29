@extends('layouts.app')
@section('title','會員註冊')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('會員註冊') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('會員註冊') }}</p>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12 flex items-center">
                  <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
                    <div class="py-12 p-10 bg-white rounded-xl">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">姓名</label>
                        <input id="name" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus placeholder="請輸入姓名" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">性別</label>
                        <div class="block space-x-4">
                          <label>
                            <input
                              type="radio"
                              name="gender"
                              value="1"
                              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
                            />
                            {{ (old('gender') == '1') ? 'checked' : '' }} 男性
                          </label>
                          <label>
                            <input
                              type="radio"
                              name="gender"
                              value="0"
                              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
                            />
                            {{ (old('gender') == '0') ? 'checked' : '' }} 女性
                          </label>
                        </div>
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="email">電子信箱</label>
                        <input id="email" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="請輸入電子信箱" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="current_job">現任職稱</label>
                        <input id="current_job" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('current_job') is-invalid @enderror" name="current_job" value="{{ old('current_job') }}" required autocomplete="current_job" autofocus placeholder="請輸入現任職稱" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="current_restaurant">現任餐廳</label>
                        <input id="current_restaurant" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('current_restaurant') is-invalid @enderror" name="current_restaurant" value="{{ old('current_restaurant') }}" required autocomplete="current_restaurant" autofocus placeholder="請輸入現任餐廳" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="password">密碼</label>
                        <input id="password" type="password" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="請輸入密碼" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="password-confirm">再次輸入密碼</label>
                        <input id="password-confirm" type="password" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control" name="password_confirmation" required autocomplete="new-password" placeholder="請再輸入密碼" />
                      </div>

                      <div class="relative mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="captcha">驗證碼</label>
                        <input id="captcha" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control {{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required autocomplete="captcha" autofocus placeholder="點擊圖片重新獲取驗證碼" />

                        <img class="thumbnail captcha mt-3 mb-2 p-1 border rounded-md" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="點擊圖片重新獲取驗證碼">
                    </div>

                      <button class="btn w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md w-full hover:bg-indigo-500 transition duration-300" type="submit">送出</button>
                    </form>
                    </div>
                  </div>
            </section>
            
        </div>

    </div>
</div>

@stop
