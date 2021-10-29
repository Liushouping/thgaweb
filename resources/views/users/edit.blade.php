@extends('layouts.app')
@section('title','編輯個人資料')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('編輯個人資料') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
</svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('編輯個人資料') }}</p>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12 flex items-center">
                  <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
                    <div class="py-12 p-10 bg-white rounded-xl">

                    <form action="{{ route('users.update', $user->id) }}" method="POST" 
                    accept-charset="UTF-8" 
                    enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                      <div class="mb-6">
                        @if($user->avatar)
                        <label class="h-60 w-60 rounded-full mx-auto bg-gray-100 border">
                        <img
                          class="h-60 w-60 rounded-full mx-auto"
                          src="{{ old('avatar', $user->avatar) }}"
                          id="preview-image-before-upload"
                        />
                        <input type='file' class="hidden" name="avatar" id="avatar"/>
                        </label>
                        @endif
                        @empty($user->avatar)
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                          <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>請選擇相片</p>
                          </div>
                          <input type='file' class="hidden" name="avatar" id="avatar" />
                        </label>
                        @endempty
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">姓名</label>
                        <input id="name" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus placeholder="請輸入姓名" />
                      </div>

                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">性別</label>
                        <div class="block space-x-4">
                          <label>
                            <input
                              type="radio"
                              name="gender"
                              value="0" @if(old('gender') == '0' || $user->gender == '0') checked @endif
                              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
                            />
                            男性
                          </label>
                          <label>
                            <input
                              type="radio"
                              name="gender"
                              value="1"@if(old('gender') == '1' || $user->gender == '1') checked @endif
                              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
                            />
                            女性
                          </label>
                        </div>
                      </div>

                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="email">電子信箱</label>
                        <input id="email" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" autofocus placeholder="請輸入電子信箱" />
                      </div>

                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="current_job">現任職稱</label>
                        <input id="current_job" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('current_job') is-invalid @enderror" name="current_job" value="{{ old('current_job', $user->current_job) }}" required autocomplete="current_job" autofocus placeholder="請輸入現任職稱" />
                      </div>

                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="current_restaurant">現任餐廳</label>
                        <input id="current_restaurant" type="text" class="border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded form-control @error('current_restaurant') is-invalid @enderror" name="current_restaurant" value="{{ old('current_restaurant', $user->current_restaurant) }}" required autocomplete="current_restaurant" autofocus placeholder="請輸入現任餐廳" />
                      </div>

                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="introduction">個人簡介</label>
                        <textarea id="introduction-field" rows="5" name="introduction" class="resize-none border bg-gray-100 py-2 px-4 w-full outline-none focus:ring-2 focus:ring-indigo-400 rounded" placeholder="請輸入個人簡介">{{ old('introduction', $user->introduction) }}</textarea>
                      </div>

                      <button class="btn w-full mt-6 text-indigo-50 font-bold bg-indigo-600 py-3 rounded-md hover:bg-indigo-500 transition duration-300" type="submit">保存</button>

                    </form>

                    </div>
                  </div>
            </section>
            
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function (e) {
 
   
   $('#avatar').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
</script>
@stop