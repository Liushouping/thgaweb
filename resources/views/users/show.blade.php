@extends('layouts.app')
@section('title','個人中心')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('個人中心') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
</svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('個人中心') }}</p>
            </div>

            <section class="flex justify-center px-4 lg:px-0 mt-12 mb-12 ">
                <article>
                    <section class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 tracking-wider">
                    
                    <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
                            <div class="flex justify-center my-6">
                            <img class="w-60 h-60 rounded-full object-center" src="{{ $user->avatar ?: asset('image/default_logo.png') }}" alt="{{ $user->name }}">
                            </div>
                            <div class="flex items-center justify-center px-6 py-3 bg-gray-900">
                                <h1 class="mx-3 text-yellow-300 font-semibold text-lg">台灣客家美食交流協會</h1>
                            </div>
                            <div class="py-4 px-6 w-96">
                                <h1 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h1>
                                <p class="py-2 text-lg text-gray-700">{{ $user->introduction }}</p>
                                <small>{{ $user->created_at->diffForHumans() }}</small>
                                <div class="flex items-center mt-4 text-gray-700">
                                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                        <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                                    </svg>
                                    <h1 class="px-2 text-sm">{{ $user->email }}</h1>
                                </div>
                                <div class="flex items-center mt-4 text-gray-700">
                                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                        <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
                                    </svg>
                                    <h1 class="px-2 text-sm">{{ $user->current_restaurant }}</h1>
                                </div>
                                <div class="flex items-center mt-4 text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                    </svg>
                                    <h1 class="px-2 text-sm">{{ $user->current_job }}</h1>
                                </div>
                            </div>
                    </div>

                    </section>
                </article>
            </section>
            
        </div>

    </div>
</div>

@stop
