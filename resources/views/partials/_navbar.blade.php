
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container-fluid">
    {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('img/pc-logo.svg')}}" class="img-fluid navbar-logo" alt="WGA Logo" style="width: 7rem;"></a> --}}
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
    @include('partials._navbar-logo2')
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger link" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger link" href="#products">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger link" href="#services">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger link" href="#footer">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link" href="{{ route('admin') }}">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>