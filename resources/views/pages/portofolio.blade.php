@extends('layouts.master_home')
@section('title')
    Portofolio
@endsection
@section('home_content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portofolio</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Portofolio</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
<div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
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