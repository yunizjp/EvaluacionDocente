@extends('layouts.plantillabase')

@section('contenido')

<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>44</h3>
                <p>Docentes Contratados</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>+875<sup style="font-size: 20px"></sup></h3>
                <p>Estudiantes Matriculados</p>
            </div>
            <div class="icon">
                <i class="fas fa-university"></i>
            </div>
            <a href="#" class="small-box-footer">
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-blue">
            <div class="inner">
                <h3>+1500<sup style="font-size: 20px"></sup></h3>
                <p>Estudiantes Graduados</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>10</h3>
                <p>Carreras Ofertadas</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">
            </a>
        </div>
    </div>

</div>

<div>   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('images/1.jpg') }}" alt="slide1">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/2.jpg') }}" alt="slide2">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="slide3">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/4.jpg') }}" alt="slide4">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/5.jpg') }}" alt="slide5">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/6.jpg') }}" alt="slide6">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/7.jpg') }}" alt="slide7">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/8.jpg') }}" alt="slide8">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/9.jpg') }}" alt="slide9">
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
</div>
<!-- <div class="col-lg-2 col-6">
    <div class="slideshow">
        <ul class="slider">
        <li style="display: none;"> <img src="{{ asset('images/1.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/2.jpg') }}" alt=""> </li>
        <li style="display: list-item;"> <img src="{{ asset('images/3.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/4.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/5.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/6.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/7.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/8.jpg') }}" alt=""> </li>
        <li style="display: none;"> <img src="{{ asset('images/9.jpg') }}" alt=""> </li>
        </ul>
        <div class="left"> 
            <span class="fa fa-chevron-left"></span> 
        </div>
        <div class="right"> 
            <span class="fa fa-chevron-right"></span> 
        </div>
    </div>
</div> -->


@endsection