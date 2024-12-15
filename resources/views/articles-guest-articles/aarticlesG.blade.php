@extends('alayouts1.adefault1')

@section('title1', 'ArticlesG')

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
                            <li class="scroll-to-section"><a href="/">Home</a></li>
                            <li class="scroll-to-section"><a href="/#about-us">About us</a></li>
                            <li class="scroll-to-section"><a href="aeventG">Event</a></li>
                            <li class="scroll-to-section"><a href="abookG">Books</a></li>
                            <li class="scroll-to-section"><a href="adonation" class="active">Articles</a></li>
                            <li class="scroll-to-section"><a href="{{ route('aregisterNotif') }}">Donation</a></li>
                            <li class="scroll-to-section"><a href="alogin" class="actived">Login Now!</a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
    
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <!-- Event items (seperti sebelumnya) -->
            
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                            <img src="images/event-2.jpg" alt="">
                            </div>
                        </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                            <img src="images/event-2.jpg" alt="">
                            </div>
                        </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                            <img src="images/event-2.jpg" alt="">
                            </div>
                        </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                <img src="images/event-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">New Event</span>
                                        <h4>Event Name</h4>
                                    </li>

                                </ul>
                                <a href="{{ route('aarticlesDetailG') }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ulangi untuk item lainnya -->
            </div>
    
            <!-- Pagination -->
            <div class="pagination-wrapper text-center mt-4">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
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