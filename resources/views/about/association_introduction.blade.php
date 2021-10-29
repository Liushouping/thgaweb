@extends('layouts.app')
@section('title','協會簡介')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('協會簡介') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
</svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('協會簡介') }}</p>
            </div>

            <section class="max-w-4xl mx-auto px-4 lg:px-0 mt-12 mb-12">
                <article>
                    <section class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 tracking-wider">

                    <h1 class="text-3xl font-bold">協會簡介 暨 策略目標及歷年活動</h1>
                    <p class="font-thin">飲食是重要的文化象徵與考掘對象，而客家飲食可說是客家文化的重要組成部分，構成了客家文化的基礎和核心，經過政府與民間多年的努力推廣，客家菜逐漸跳 脫傳統生活的脈絡，成為新的符號商品及族群認同的表徵，如今，不分族群是多元而非單一的一部分，尤其是在歷史和地理條件之下，融合之後發展出多彩多姿的客家飲食文化，非常值得保存/發揚/研究。

                    近年來，由於時空的轉變，獨特而豐富的客家飲食產業快速蓬勃發展，並且不斷在追求精緻化/健康化/創新化和國際化。客家飲食發展最為關鍵的因素就是融合各界菁英一貣共同努力，而其中最重要的就是客家界的廚師必頇能夠團結的合作凝聚共識。

                    我們秉持發揚客家美食和傳承客家文化的使命，培訓未來優秀的客家人才，賦予客家新亮點，未來將舉 辦客家美食文化展演/客家美食研習和交流論壇，發揚與發展客家美食文化，讓 客家美食的真善美廣為傳播下去。

                    【 協會經歷活動 】
                    2015 第一屆客家名廚認證 台灣客家美食人才培育暨交流論壇推廣計畫
                    2016 台灣客家美食精進、傳承暨國際化推廣計畫 台灣客家產業博覽會
                    2017 第二屆客家名廚認證 客家美食競賽精進研習計畫 台灣美食展
                    2018 客家美食義廚人才培訓及創新加值計畫 國際客家慢食季 海外客家行動灶下
                    2019 聚初心 客醬展藝比賽
                    2019 客庄社區及伯公照護站義廚人才培育暨行銷推廣計畫
                    2019 客庄美食推廣暨消保宣導計畫

                    【 協會目標及策略 】
                    1. 客家美食技藝提升、推廣
                    2. 客庄社區營運模式研究發展
                    3. 客家餐廳管理教育訓練
                    4. 客家廚師培育認證考試
                    5. 國際客家美食交流
                    6. 客家名廚、名店、名物輔以廣宣、出版、活動謀合 協助向上發展機制
                    7. 製作電子食譜 影像集
                    8. 各區幹部定時聯誼地區會員於客家產業間策略聯盟活動、敘共創價值鍊
                    9. 廚藝競賽參與
                    10. 社會公益</p>

                    </section>
                </article>
            </section>
            
        </div>

    </div>
</div>

@stop
