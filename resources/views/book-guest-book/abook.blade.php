@extends('alayouts1.adefault1')

@section('title1', 'Book')

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

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
          
                        <a href="index.html" class="logo">
                            <h1>Bookber</h1>
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="ahome">Home</a></li>
                            <li class="scroll-to-section"><a href="/ahome#about-us">About us</a></li>
                            <li class="scroll-to-section"><a href="aevent">Event</a></li>
                            <li class="scroll-to-section"><a href="abook" class="active">Books</a></li>
                            <li class="scroll-to-section"><a href="aarticles">Articles</a></li>
                            <li class="scroll-to-section"><a href="adonation">Donation</a></li>
                            <li><a href="aprofile" class="actived">Profile <img src="{{ asset('images/profile-header.jpg') }}" alt="Profile Picture"></a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
    
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="section courses" id="courses">
        <div class="container">
            <!-- Filter Buttons -->
            <ul class="book_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".anakanak">Anak Anak</a>
                </li>
                <li>
                    <a href="#!" data-filter=".remaja">Remaja</a>
                </li>
                <li>
                    <a href="#!" data-filter=".dewasa">Dewasa</a>
                </li>
            </ul>

            <!-- Books Section -->
            <div class="row book_box">
                <!-- Anak Anak -->
                <div class="col-lg-4 col-md-6 book_outer anakanak">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Anak Anak</span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Learn Web Design</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>
                <!-- Anak Anak -->
                <div class="col-lg-4 col-md-6 book_outer anakanak">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Anak Anak</span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Learn Coding for Kids</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

                <!-- Remaja -->
                <div class="col-lg-4 col-md-6 book_outer remaja">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Remaja</span>
                        </div>
                        <div class="down-content">
                            <span class="author">Cindy Walker</span>
                            <h4>Web Design Tips</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

                <!-- Dewasa -->
                <div class="col-lg-4 col-md-6 book_outer dewasa">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Dewasa</span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Master Full Stack Developer</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan lebih banyak item disini -->
                <div class="col-lg-4 col-md-6 book_outer remaja">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Remaja</span>
                        </div>
                        <div class="down-content">
                            <span class="author">Sophia Rose</span>
                            <h4>Online Learning Steps</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

                <!-- Anak Anak -->
                <div class="col-lg-4 col-md-6 book_outer anakanak">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Anak Anak</span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Learn Coding for Kids</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

                <!-- Remaja -->
                <div class="col-lg-4 col-md-6 book_outer remaja">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Remaja</span>
                        </div>
                        <div class="down-content">
                            <span class="author">Cindy Walker</span>
                            <h4>Web Design Tips</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

                <!-- Dewasa -->
                <div class="col-lg-4 col-md-6 book_outer dewasa">
                    <div class="books_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pp-book.png" alt=""></a>
                            <span class="category">Dewasa</span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Master Full Stack Developer</h4>
                            <a href="abookDetail"><button>Detail Book</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright © 2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>
    
</main>
@endsection