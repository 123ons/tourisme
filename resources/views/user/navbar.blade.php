

<div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="" class="nav-item nav-link active">Accueil</a>
                        <a href="" class="nav-item nav-link">à Propos</a>
                        <a href="" class="nav-item nav-link">Destination</a>
                        <a href="" class="nav-item nav-link">Services</a>
                        <a href="" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="guide.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>

                       <a href="contact.html" class="nav-item nav-link">Contact</a>

                       @if(Route::has('login'))

                       @auth

                       <x-app-layout>
                        
                       </x-app-layout>


                       @else

                        <li class="nav-item">
                           <a class="btn btn-primary ml-lg-3 " href="{{route('login')}}" >login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-primary ml-lg-3 " href="{{route('register')}}" >register</a>
                        </li>

                        @endauth

                        @endif
                       
                        

                    </div>
                </div>
            </nav>
        </div>
    </div>
   

