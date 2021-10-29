@extends('layouts.app')
@section('title','用戶列表')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('用戶列表') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
              </svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('用戶列表') }}</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 my-12">
            @foreach ($users as $user)
            
                  <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg relative overflow-hidden">
<!--                     <div class="absolute top-0 -left-5 rounded-lg p-3 bg-red-500">理監事長</div> -->
                    <div class="inline-flex rounded-full overflow-hidden h-40 w-40">
                      <img src="{{ $user->avatar ?: asset('image/default_logo.png') }}"
                         class="h-full w-full">
                    </div>

                    <h2 class="mt-4 font-bold text-xl">{{ $user->name }}</h2>

                    <h6 class="mt-2 text-sm font-light">{{ $user->current_restaurant }}</h6>
                    <h6 class="mt-2 text-sm font-light">{{ $user->current_job }}</h6>

                    <hr class="text-gray-900 w-full my-3">
                    <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
                      <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">
                        <a href="{{ route('users.show', $user) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg></a>
                      </div>
                    </div>
                    <ul class="flex flex-row space-x-2">
                      <li>
                        <a href="mailto:{{ $user->email }}" class="flex items-center justify-center h-8 w-8 text-gray-500 border-gray-500">
                          <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                          </svg>
                        </a>
                      </li>
                    </ul>

                  </div>
            @endforeach

            </div>
                        <div class="my-10">
                {{ $users->render() }}
            </div>
        </div>

    </div>
</div>
@endsection