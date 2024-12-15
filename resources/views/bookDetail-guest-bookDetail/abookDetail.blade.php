@extends('alayouts1.adefault1')

@section('title1', 'BookDetail')

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

    <div class="full-screen-container">
        <div class="bodyBookDetail">
            <!-- Tombol di atas -->
            <div class="top-button-container">
                <a href="{{ route('abook') }}"><button class="top-button">Kembali</button></a>
            </div>

            <div class="bookDetail-container">
                <div class="bookDetail-image">
                    <img src="images/pp-book.png" alt="Book Cover" class="bookDetail-cover">
                </div>
                <div class="bookDetail-info">
                    <h1 class="bookDetail-title">The Great Adventure</h1>
                    <p class="bookDetail-author">by John Doe</p>
                    <p class="bookDetail-release-date">Release Date: January 1, 2024</p>
                    <p class="bookDetail-price">$19.99</p>
                    <p class="bookDetail-description">
                        A thrilling adventure through time and space, following the journey of a young hero destined for greatness. This book
                        takes readers on a roller-coaster ride of emotions, with twists and turns that will keep you hooked until the very end.
                        A thrilling adventure through time and space, following the journey of a young hero destined for greatness. This book
                        takes readers on a roller-coaster ride of emotions, with twists and turns that will keep you hooked until the very end.
                        A thrilling adventure through time and space, following the journey of a young hero destined for greatness. This book
                        takes readers on a roller-coaster ride of emotions, with twists and turns that will keep you hooked until the very end.
                        A thrilling adventure through time and space, following the journey of a young hero destined for greatness. This book
                        takes readers on a roller-coaster ride of emotions, with twists and turns that will keep you hooked until the very end.
                        A thrilling adventure through time and space, following the journey of a young hero destined for greatness. This book
                        takes readers on a roller-coaster ride of emotions, with twists and turns that will keep you hooked until the very end.
                    </p>
                    {{-- <div class="action-buttons">
                        <button class="buy-button">Buy Now</button>
                        <button class="wishlist-button">Add to Wishlist</button>
                    </div> --}}
                </div>
            </div>
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