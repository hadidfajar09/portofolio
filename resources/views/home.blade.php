@extends('layouts.master_home')
@include('layouts.body.slider')

@section('title')
    Home
@endsection
@section('home_content')
    

<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Me</strong></h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>{{ $abouts->title }}</h2>
          <h3>{{ $abouts->short_des }}</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p>
            {{ $abouts->long_des }}
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Web Developer - Beginner</li>
            <li><i class="ri-check-double-line"></i> Android Developer - Beginner</li>
            <li><i class="ri-check-double-line"></i> Design Graphic - Beginner</li>
          </ul>
          <p class="font-italic">
I wanna <b>WORK</b> Hard          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</strong></h2>
        <p>Beginner to Expert</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
               
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4><a href="">Web Development</a></h4>
            <p> Aplikasi Website  menggunakan Framework PHP Laravel, HTML, CSS, Javascript, dan MySQL</p>
           
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            
              </svg>
              <i class="bx bx-body"></i>
            </div>
            <h4><a href="">Android Development</a></h4>
            <p> Aplikasi Android menggunakan Kotlin, XML, dan Room Database </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              
              </svg>
              <i class="bx bx-tachometer"></i>
            </div>
            <h4><a href="">Modeling 3D</a></h4>
            <p> Modeling 3D Low Poly menggunakan Blender 3D</p>
          </div>
        </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
               
              </svg>
              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="">Game Development</a></h4>
            <p>Build game menggunakan Game Engine Unity 3D</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                
              </svg>
              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="">Design Graphic</a></h4>
            <p>Photo Editing menggunakan Adobe Photoshop dan Video Editing menggunakan Adobe Premiere Pro</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
               
              </svg>
              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="">Microsoft Office</a></h4>
            <p>Pengolahan Text dan data menggunakan All Office </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
     

      <div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
      </div>
   

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
         
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        
        @foreach ($porto as $row)
            
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="{{ asset($row->brand_image) }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $row->brand_name }}</h4>
            <a href="{{ asset($row->brand_image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{ $row->brand_name }}"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"></a>
          </div>
        </div>

        @endforeach

 
      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Design</h2>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

@php
    $logos = DB::table('multiples')->get();
@endphp        
        @foreach($logos as $row)
        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="{{ $row->image }}" class="img-fluid" alt="">
          </div>
        </div>

        @endforeach
        

      </div>

    </div>
  </section><!-- End Our Clients Section -->

  @endsection