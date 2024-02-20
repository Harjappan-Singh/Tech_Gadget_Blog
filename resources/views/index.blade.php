@extends('layouts.app')

@section('content')
{{-- FF1675 --}}

   
<div class="section text-light p-5 text-center myContainer">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div class="content">
                <h2> Hello,
                    <span class="cText">What Would You Like To Read?</span>
                     </h2>
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="new updgrade in java" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                 <div class="suggestion">
                    <span>New update in ios</span>
                    <span>whats new in bootstrap</span>
                    <span>Why learn data science</span>
                </div>
                </div>
            </div>
             <img class="img-fluid w-50 d-none d-sm-block" src="home.svg" alt="">
        </div>
    </div>
</div>

<section class="text-light p-5 m-5 section1">
      <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
          <h3 class="mb-3 mb-md-0">Sign Up For Our Blog List</h3>

          <div class="input-group news-input">
            <input type="text" class="form-control" placeholder="Enter Email" />
            <button class="btn btn-dark btn-lg" type="button">Submit</button>
          </div>
        </div>
      </div>
</section>

<section class="section2">
            <div class="container">
                <h2 class="text-light">Featured Blogs</h2>
                <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://developer.apple.com/news/images/og/ios-17-og.jpg"  class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src=https://community-cdn-digitalocean-com.global.ssl.fastly.net/uCcwj4q1e8Tx91Ce5En11NdE class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src=https://media.licdn.com/dms/image/D4D12AQEaTK5_cv5Fmg/article-cover_image-shrink_720_1280/0/1677082453584?e=2147483647&v=beta&t=hy4wcIl2vOpp5lr5k74obYVN63IT-U4lydNOIo3hHGo class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            </div>
            
    </section>

<section id="instructors" class="p-5">
      <div class="container">
        <h2 class="text-center text-white">Our Writers</h2>
        <p class="lead text-center text-white mb-5">
          Our instructors all have 5+ years working as a writer in the
          industry
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">John Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/11.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Jane Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/men/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Steve Smith</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://randomuser.me/api/portraits/women/12.jpg"
                  class="rounded-circle mb-3"
                  alt=""
                />
                <h3 class="card-title mb-3">Sara Smith</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
                <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
    
     {{-- <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                 <h2 h1 class="sm:text-gray text-2xl font-bold text-shadow-md pb-14">
              There are 50k+ websites out there to learn know about new in tech.
                </h2> 
                <h1 class="sm:text-white text-5xl font-bold text-shadow-md pb-14">
                      But you only need a handful to crsuh it.
                Find the best here:
                </h1>
               
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div> --}}


    {{--
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div> --}}
@endsection