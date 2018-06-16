<div class="container-fluid">
    <div class="row">

        <!-- Social Links -->
        <div class="col-lg-4 order-2 order-lg-1">

            <div class="d-flex justify-content-center social-cont">
                <a href="#"><img src="{{ asset('img/social/facebook.svg') }}" class="img-fluid social-icon" alt="Facebook Icon"></a>
            
                <a href="#"><img src="{{ asset('img/social/instagram.svg') }}" class="img-fluid social-icon" alt="Instagram Icon"></a>
            
                <a href="#"><img src="{{ asset('img/social/twitter.svg') }}" class="img-fluid social-icon" alt="Twitter Icon"></a>
            
                <a href="#"><img src="{{ asset('img/social/linkedin.svg') }}" class="img-fluid social-icon" alt="Linkedin Icon"></a>
            </div>   





        </div>

        <!-- Callout -->
        <div class="col-lg-4 order-1 order-lg-2 text-center callout">
            <h1>GET IN TOUCH</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. </p>

            <!-- Contact -->
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('img/phone.svg') }}" class="img-fluid sr-contact" alt="" style="margin-bottom: 2rem;">
                    <p>123-456-7890</p>
                </div>
                <div class="col-sm-6 email">
                    <img src="{{ asset('img/mail.svg') }}" class="img-fluid sr-contact" alt="" style="margin-bottom: 2rem;">
                    <a href="mailto:your-email@your-domain.com">mattpike@gmail.com</a>
                </div>
                
            </div>

        </div>

        <!-- Navigation -->
        <div class="d-none d-lg-block col-lg-4 order-lg-3">
            <ul class="links">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about"><span>ABOUT</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#products"><span>PRODUCTS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services"><span>SERVICES</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact"><span>CONTACT</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}"><span>LOGIN</span></a>
                </li>
            </ul>
        </div>

        
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col copyright text-center">
            <p class="text-muted">Copyright &copy; WGA <?php echo date("Y"); ?><a href="#"> Imprint</a></p>
        </div>
    </div>
</div>