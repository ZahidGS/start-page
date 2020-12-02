@extends('welcome')

@section('content')

{{-- CAROUSEL --}}
{{-- =================================================== --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/carretera2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/desierto2.jpg')}}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Second slide label</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/hongkong2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Third slide label</h1>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- WHAT WE DO?
  ================================================== -->
<div class="col shadow">
<div class="container mt-4 text-center">

    <h2 class="h2 p-5"><strong>WHAT</strong> WE DO?</h2>
    <div class="row">
        <div class="col-lg-3">
            <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
            class="rounded-circle m-3" width="140" height="140">
            <h3>WEB APPLICATIONS</h3>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit.</p>
            <p><a class="nav-link" href="#" role="button"><strong>Read</strong> More</a></p>
        </div>
        <div class="col-lg-3">
            <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
            class="rounded-circle m-3" width="140" height="140">
            <h3>CLOUD HOSTING</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh.</p>
                <p><a class="nav-link" href="#" role="button"><strong>Read</strong> More</a></p>
            </div>
        <div class="col-lg-3">
            <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
            class="rounded-circle m-3" width="140" height="140">
            <h3>SOCIAL APP</h3>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. </p>
                <p><a class="nav-link" href="#" role="button"><strong>Read</strong> More</a></p>
            </div>
        <div class="col-lg-3">
            <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
            class="rounded-circle m-3" width="140" height="140">
            <h3>SMART DESIGN</h3>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus, porta ac consectetur ac.</p>
                <p><a class="nav-link" href="#" role="button"><strong>Read</strong> More</a></p>
            </div>
    </div><!-- /.row -->
</div>
</div>

{{-- RECENT WORK --}}
{{-- =================================================== --}}

<div class="row shadow" style="background: #ececec;">

    <div class="container">
        <h2 class="h2 p-5 text-center"><strong>RECENT</strong> WORK?</h2>
        <div class="row">
        <div class="col-6 mt-4">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/mac.jpg')}}" class="d-block" alt="..."
                        width="600" height="300">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/mac2.jpg')}}" class="d-block" alt="..."
                        width="600" height="300">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/mac3.png')}}" class="d-block" alt="..."
                        width="600" height="300">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-6 p-3">
            <div class="row">
                <div class="col-1">
                    <ion-icon class="text-right h5" name="logo-twitter"></ion-icon>
                </div>
                <div class="col-11">
                    <h5>SOCIAL APPLICATIONS</h5>
                    <p>Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Phasellus faucibus scelerisque
                        eleifend donec.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <ion-icon class="text-right h5"  name="heart"></ion-icon>
                </div>
                <div class="col-11">
                    <h5>APPLICATIONS AT YOUR CLIENTS</h5>
                    <p>Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Phasellus faucibus scelerisque
                        eleifend donec.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <ion-icon class="text-right h5"  name="construct"></ion-icon>
                </div>
                <div class="col-11">
                    <h5>INNOVATIONS</h5>
                    <p>Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Phasellus faucibus scelerisque
                        eleifend donec.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <ion-icon class="text-right h5"  name="leaf"></ion-icon>
                </div>
                <div class="col-11">
                    <h5>ENVIRONMENT</h5>
                    <p>Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Phasellus faucibus scelerisque
                        eleifend donec.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

{{-- LATEST NEWS --}}
{{-- =================================================== --}}

<div class="col shadow">
        <h2 class="h2 pt-5 text-center"><strong>LATEST</strong> NEWS?</h2>
        <div class="row justify-content-center">

            <div class="card m-3" style="max-width: 500px;">
                <div class="row no-gutters">
                  <div class="col-md-4 text-center">
                    <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
                    class="rounded-circle m-3" width="100" height="100">
                    <p>12 DEC 2012</p>
                </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title"><strong>A NORMAL POST</strong></h3>
                      <p class="card-text p-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card m-3" style="max-width: 500px;">
                <div class="row no-gutters">
                  <div class="col-md-4 text-center">
                    <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
                    class="rounded-circle m-3" width="100" height="100">
                    <p>12 DEC 2012</p>
                </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title"><strong>LINK POST</strong></h3>
                      <p class="card-text p-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card m-3" style="max-width: 500px;">
                <div class="row no-gutters">
                  <div class="col-md-4 text-center">
                    <img src="{{asset('images/imagenweb2.jpg')}}" alt=""
                    class="rounded-circle m-3" width="100" height="100">
                    <p>12 DEC 2012</p>
                </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title"><strong>VIDEO POST</strong></h3>
                      <p class="card-text p-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>


{{-- CLIENTS WE LOVE --}}
{{-- =================================================== --}}

<div class="row shadow" style="background: #ececec;">
    <div class="container">
        <h2 class="h2 pt-5 text-center"><strong>CLIENTS</strong> WE LOVE</h2>
        <div class="owl-carousel owl-theme">
            <img src="{{asset('images/cliente1.jpeg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente2.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente3.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente4.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente5.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente6.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente7.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente8.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente9.jpg')}}" class="m-3" width="180px" height="180px">
            <img src="{{asset('images/cliente10.jpg')}}" class="m-3" width="180px" height="180px">
        </div>
    </div>
</div>
@endsection
