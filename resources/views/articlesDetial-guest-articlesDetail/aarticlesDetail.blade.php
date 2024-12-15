@extends('alayouts1.adefault1')

@section('title1', 'ArticlesDetail')

@section('content1')
<main>
    @if(session()->has('success'))
    <div id="notification" class="notification success">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif
    
    @if(session()->has('error'))
    <div id="notification" class="notification error">
        <p>{{ session()->get('error') }}</p>
    </div>
    @endif
    
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div>

    <!-- Container Utama -->
    <div class="containerDetail">
        <!-- Tombol Back -->
        <button class="back-buttonDetail" onclick="window.location.href='{{ route('aarticles') }}'">
            Kembali
        </button>

        <!-- Header Judul -->
        <h1 class="titleDetail">New Event</h1>
        <p class="authorDetail">Detail Event</p>
        <p class="dateDetail">Kamis, 07 Desember 2023</p>

        <!-- Gambar Utama -->
        <div class="image-containerDetail">
            <img src="images/event-1.jpg" alt="event-1" class="main-imageDetail">
            <p class="captionDetail">penjelasan singkat event</p>
        </div>

        <!-- Konten Artikel -->
        <div class="contentDetail">
            <p>Jakarta – Ketua Majelis Permusyawaratan Partai Perindo, Hary Tanoesoedibjo (HT), bicara perjuangan Prabowo Subianto menjadi Presiden RI. Donald Trump hingga Presiden Joko Widodo (Jokowi). Momen tersebut terjadi di HUT ke-9 Partai Perindo di Jakarta, Kamis (7/12/2023).</p>
            <p>Hary Tanoe menyebutkan bahwa menjadi seorang pemimpin tidak mudah. Banyak rintangan dan pengorbanan. “Kita lihat perjuangan Prabowo Subianto. Tahun 2014 kalah, 2019 kalah lagi. Tapi, tetap berjuang dan sekarang terdepan,” ujar Hary Tanoe di hadapan kader Partai Perindo.</p>
            <p>Lebih lanjut, Hary Tanoe menyinggung perjalanan Donald Trump yang akhirnya menjadi Presiden Amerika Serikat. Menurut dia, Trump awalnya tidak diunggulkan, tetapi mampu menjadi pemimpin di negeri Paman Sam.</p>
            <p>"Hal inilah yang perlu kita teladani. Kalau ada kesempatan, kita harus ambil. Tidak boleh mudah menyerah," ujar Hary Tanoe.</p>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright © 2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>

</main>
@endsection