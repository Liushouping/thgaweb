@extends('layouts.app')
@section('title','忘記密碼')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('忘記密碼') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('忘記密碼') }}</p>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12 flex items-center">
                  <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
                    <div class="py-12 p-10 bg-white rounded-xl">
                    @if (session('status'))
                        <div
                             class="w-full bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-sm flex items-center mx-auto"
                             >
                          <svg
                               viewBox="0 0 24 24"
                               class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
                               >
                            <path
                                  fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                                  ></path>
                          </svg>
                          <span class="text-green-800">{{ session('status') }} </span>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="請輸入電子信箱" />
                      </div>

                      <button class="btn w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </form>

                    </div>
                  </div>
            </section>
            
        </div>

    </div>
</div>
@endsection
