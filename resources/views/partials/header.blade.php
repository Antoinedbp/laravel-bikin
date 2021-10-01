<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Bikin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            @foreach ($headers as $item)
            <li><a class="nav-link scrollto " href="#{{ $item->chemin }}">{{ $item->chemin }}</a></li>
            @endforeach
         
          
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block d-flex">
                    @auth
                    <form style=" margin-left:1; width:100%" method="POST" action="{{ route('logout') }}">
        
                        @csrf
                        <x-dropdown-link style="width: 100%; padding-left: 0 !important;" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <span class="links_name">Log Out</span>
                        </x-dropdown-link>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->