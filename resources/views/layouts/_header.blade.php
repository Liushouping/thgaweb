<div class="hidden md:flex items-center py-4 px-4 md:px-10 w-full bg-gray-800 justify-between text-yellow-300 z-0">
  <h5 class="text-sm">{{ __('歡迎來到 台灣客家美食交流協會') }}</h5>
  <span class="flex space-x-2">
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
      </svg>
    </a>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
      </svg>
    </a>
  </span>
</div>
<div class="antialiased bg-gray-10">
  <div class="w-full text-gray-700 bg-white">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl md:px-4 px-0 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
 <div class="flex flex-row items-center justify-between p-4">
   <a href="{{ route('home' )}}" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline"><img src="{{ asset('/image/thga_logo.png') }}" class="w-60 lg:w-80"></a>
   <button class="mobile-menu-button rounded-lg md:hidden focus:outline-none focus:shadow-outline z-10" @click="open = !open">
    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
      <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
      <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
   </button>
 </div>
 <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-start md:flex-row md:relative fixed w-screen h-full md:h-auto z-20 items-center justify-center md:bg-white md:text-gray-600 bg-gray-800 text-white ">
   <button class="mobile-menu-button rounded-lg md:hidden focus:outline-none focus:shadow-outline z-30 absolute top-7 right-7" @click="open = !open">
    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
      <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
      <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
   </button>
   <a class="px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300 {{ request()->is('/') ? 'border-b-2 border-yellow-300 text-yellow-300' : '' }}" href="{{ route('home' )}}">{{ __('首頁') }}</a>
   <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300">
          <span>{{ __('關於我們') }}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow md:w-36">
          <div class="p-2 bg-white rounded-md shadow-xl relative z-50">
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Ai' )}}">{{ __('協會簡介') }}</a>
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Or' )}}">{{ __('組織架構') }}</a>
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Su' )}}">{{ __('理監事簡介') }}</a>
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Pp' )}}">{{ __('歷屆理事長') }}</a>
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Ac' )}}">{{ __('協會顧問') }}</a>
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('users.index' )}}">{{ __('會員列表') }}</a>
          </div>
        </div>
   </div> 
   <a class="px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300 {{ request()->is('activity') ? 'border-b-2 border-yellow-300 text-yellow-300' : '' }}" href="{{ route('activity.indexActivity' ) }}">{{ __('最新消息') }}</a>
   <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <span class="animate-bounce hidden md:inline-flex bg-red-500 shadow-md text-white rounded-full px-2 py-1 justify-center items-center absolute right-3 -top-5 box-bottom text-xs">New</span>
        <button @click="open = !open" class="flex flex-row items-center px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300">
          <span>{{ __('協會活動') }}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow md:w-48">
          <div class="p-2 bg-white rounded-md shadow-xl relative z-50">
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('Ai' )}}">{{ __('伯公照護站 - 深耕計畫') }}</a>
          </div>
        </div>
   </div> 
   <a class="px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300 {{ request()->is('posts') ? 'border-b-2 border-yellow-300 text-yellow-300' : '' }}" href="{{ route('posts' ) }}">{{ __('活動花絮') }}
   </a>
   <a class="px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300 {{ request()->is('contact') ? 'border-b-2 border-yellow-300 text-yellow-300' : '' }}" href="{{ route('contact' ) }}">{{ __('聯絡我們') }}</a>
 </nav>
   @guest
    @if (Route::has('login'))
    <a class="hidden md:flex w-24 justify-center items-center mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 text-white px-3 py-2 bg-red-500 rounded-full hover:bg-red-600" href="{{ route('login' ) }}">{{ __('登入') }}</a>
    @endif
   @else
    <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="w-40 hidden md:flex flex-row items-center px-4 py-1 mt-2 text-xl md:text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-yellow-300 hover:border-b-2 hover:border-yellow-300">
          <img src="{{ Auth::user()->avatar ?: asset('image/default_logo.png') }}" class="rounded-full mr-3" width="30px" height="30px">
          <span>{{ Auth::user()->name }}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow md:w-36">
          <div class="p-2 bg-white rounded-md shadow-xl relative z-50">
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('users.show', Auth::id()) }}">{{ __('用戶中心') }}</a>
            <a class="flex items-center px-2 py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('users.edit', Auth::id()) }}">{{ __('編輯資料') }}</a>
            <div class="py-2">
                <hr></hr>
            </div>
    
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="px-2 w-full text-left py-2 mt-1 text-md md:text-sm font-semibold bg-transparent rounded-lg md:mt-0 text-gray-700 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline btn" href="{{ route('logout') }}" type="submit">{{ __('登出') }}</button>
            </form>

          </div>
        </div>
   </div>
   @endguest
    </div>
  </div>
</div>

