@extends('layouts.master_home')
@section('title')
    Skills
@endsection
@section('home_content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Skills</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Skills</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  

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

  
  <section id="skills" class="skills">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Details <strong>Skills</strong></h2>
        <p>More Details about my skill</p>
        <br>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">Laravel 8 <i class="val">Intermediate | 1 year</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">HTML <i class="val">Beginner | 1 year</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">Beginner | 1 year</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">Beginner | 1 year</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Blender 3D <i class="val">Beginner | 1 year</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress">
            <span class="skill">Kotlin <i class="val">Beginner | 1 year</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          

          <div class="progress">
            <span class="skill">Photoshop <i class="val">Intermediate | 2 years</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Premiere Pro <i class="val">Intermediate | 2 years</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Unity <i class="val">Beginner | 1 years</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Microsoft Office <i class="val">Intermediate | 3 years</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Our Skills Section -->

  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tools</h2>
        <p>Supporting software in application creation or design</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3><a href="">Visual Studio Code</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3><a href="">Android Studio</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3><a href="">Xampp</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3><a href="">Browser</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3><a href="">Adobe Product</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3><a href="">Microsoft Office Product</a></h3>
          </div>
        </div>
         <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #b1f100;"></i>
            <h3><a href="">Postman</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #7d3eff;"></i>
            <h3><a href="">Unity</a></h3>
          </div>
        </div>
     

    </div>
  </section><!-- End Features Section -->

@endsection