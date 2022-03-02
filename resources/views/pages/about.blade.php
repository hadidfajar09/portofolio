@extends('layouts.master_home')
@section('title')
    About
@endsection
@section('home_content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title center" data-aos="fade-up">
        <h2>My <strong>Profile</strong></h2>
        <p></p>
      </div>

<center>
        <div class="col-lg-3 col-md-6 d-flex align-items-center">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="{{ asset('frontend/assets/img/team/me.jpg') }}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Mochammad Hadiid Fajar</h4>
              <span>Fresh Graduate</span>
            </div>
          </div>
        </div>

      </center>
    </div>
  </section><!-- End Our Team Section -->
  @php
    $abouts = DB::table('abouts')->latest()->first();
@endphp       

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
             I wanna <b>WORK</b> Hard.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  


  <!-- ======= Our Clients Section ======= -->
 

@endsection