@extends('layouts.welcome') 
@section('content')

<section id="about">
    <div class="container section">
        <div class="row">

            <div class="col text-center">
                <hr style="2px solid red;">
                <img src="{{asset('img/heading-dec-left.svg')}}" alt="Heading decoration" style="display: inline; margin-right: 3rem; width: 1.5rem;">
                <h1 style="display: inline-block; margin-bottom: 0;">ABOUT US</h1><img src="{{asset('img/heading-dec-right.svg')}}" alt="Heading decoration" style="display: inline; margin-left: 3rem; width: 1.5rem;">

                <hr style="2px solid red; margin-bottom: 4rem;">
                <p class="lead text-col">Eu cillum qui deserunt cupidatat ea elit ut ea ipsum culpa officia duis. Lorem Lorem do ipsum eu irure ea.
                    <span
                        class="d-none d-lg-block">
                        Minim minim mollit est sunt nisi ullamco incididunt aliquip occaecat cupidatat. Amet ea esse ut minim aliqua aliquip cupidatat
                        eu deserunt.</span>
                </p>
                {{-- <a class="btn btn-md btn-primary sr-button" href="../../components/navbar/" role="button">BUTTON TEXT</a> --}}
                <a href="">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section id="products">

    <div class="container section" style="position: relative;">
        <div class="row">
            <div class="col text-center">
                <hr style="2px solid red;">
                <img src="{{asset('img/heading-dec-left.svg')}}" alt="Heading decoration" style="display: inline; margin-right: 3rem; width: 1.5rem;">
                <h1 style="display: inline-block; margin-bottom: 0;">PRODUCTS</h1><img src="{{asset('img/heading-dec-right.svg')}}" alt="Heading decoration" style="display: inline; margin-left: 3rem; width: 1.5rem;">

                <hr style="2px solid red; margin-bottom: 6rem;">
            </div>
        </div>

        <div class="row">
            <div class="col-lg text-center">
                <h2>GRAIN 1</h2>
                <img class="icon sr-icons" src="{{ asset('img/sack.png') }}" alt="Grain Sack">
                <p class="lead text-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            </div>
            <div class="col-lg text-center">
                <h2>GRAIN 2</h2>
                <img class="icon sr-icons" src="{{ asset('img/sack.png') }}" alt="Checked Icon">
                <p class="lead text-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique
                    adipiscing.
                </p>
            </div>
            <div class="col-lg text-center">
                <h2>GRAIN 3</h2>
                <figure><img class="icon sr-icons" src="{{ asset('img/sack.png') }}" alt="Truck Icon"></figure>
                <p class="lead text-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            </div>
        </div>

        

    </div>
</section>

<section id="services">

    <div class="container section" style="position: relative;">
        <div class="row">
            <div class="col text-center">
                <hr style="2px solid red;">
                <img src="{{asset('img/heading-dec-left.svg')}}" alt="Heading decoration" style="display: inline; margin-right: 3rem; width: 1.5rem;">
                <h1 style="display: inline-block; margin-bottom: 0;">SERVICES</h1><img src="{{asset('img/heading-dec-right.svg')}}" alt="Heading decoration" style="display: inline; margin-left: 3rem; width: 1.5rem;">

                <hr style="2px solid red; margin-bottom: 6rem;">
            </div>
        </div>

        <div class="row">
            <div class="col-lg text-center">
                <h2>SALES</h2>
                <img class="icon sr-icons" src="{{ asset('img/sack.png') }}" alt="Grain Sack">
                <p class="lead text-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            </div>
            <div class="col-lg text-center">
                <h2>IMPORT/EXPORT</h2>
                <img class="icon sr-icons" src="{{ asset('img/checked-656565.svg') }}" alt="Checked Icon">
                <p class="lead text-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique
                    adipiscing.
                </p>
            </div>
            <div class="col-lg text-center">
                <h2>TRANSPORT</h2>
                <figure><img class="icon sr-icons" src="{{ asset('img/pickup.png') }}" alt="Truck Icon"></figure>
                <p class="lead text-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            </div>
        </div>

        

    </div>
</section>

<section>
    @include('partials._gallery')
</section>

{{-- <section id="contact">
    <div class="container section">
        <div class="row">
            <div class="col text-center">
                <h1>TRISTIQUE ADIPISCING</h1>
                <a class="btn btn-md btn-primary sr-button" href="../../components/navbar/" role="button">BUTTON TEXT</a>
            </div>
        </div>
    </div>
</section> --}}
@endsection