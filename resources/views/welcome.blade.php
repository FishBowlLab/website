@extends("layouts.app")
@section("content")
    <div class="container">
      <div class="landing min-vh-100">
        <div class="vh-100 row content-main">
          <div class="col-md-6 col-12 d-flex flex-column justify-content-center left-panel">
            <h1 class="header-main">
              Welcome to Fish Bowl Lab
            </h1>
            <h2 class="subheading-main fs-6 w-100 text-end">
              Created by Wilfred Ho
            </h2>
            <p class="fs-5">
              Education Consultant / Content Developer / Web Developer
            </p>
          </div>
          <div class="col-md-6 col-12 d-flex flex-column align-items-center justify-content-center right-panel">
            <ul class='portfolio-nav'>
              <li class='portfolio-item'>
                <a class='portfolio-link' href='/resources'>Teaching</a>
              </li>    
              <li class='portfolio-item'>
                <a class='portfolio-link' href='/dashboard'>Technology</a>
              </li>    
              <li class='portfolio-item'>
                <a class='portfolio-link' href='#'>Contact</a>
              </li>    
            </ul>
          </div>
          <div>
            <p class='fs-5'>
              This site is currently being upgraded from Laravel 8 to Laravel 9. 
            </p>
          </div>
          <footer class="py-3">
            <p class='fs-6'>
              Built with Boostrap 5, Vanilla Javascript, and PHP Laravel.
            </p>
            <ul class="nav justify-content-center border-top pb-3 mb-3">
              <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary"><i class="fa-solid fa-house"></i></a></li>
              <li class="nav-item"><a href="https://www.linkedin.com/company/fish-bowl-lab" class="nav-link px-2 text-body-secondary"><i class="fa-brands fa-linkedin"></i></a></li>
              <li class="nav-item"><a href="https://github.com/FishBowlLab/website" class="nav-link px-2 text-body-secondary"><i class="fa-brands fa-github"></i></a></li>
              <li class="nav-item"><a href="mailto: info@fishbowllab.com" class="nav-link px-2 text-body-secondary"><i class="fa-regular fa-envelope"></i></i></a></li>
            </ul>
          </footer>
        </div>
      </div>
      {{--
      <section id="features" class="features" >
        <div>
          <div class="section-heading text-center">
            <h2>Feature/Product Header</h2>
            <p class="text-muted">Subheader text</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <x-homepage.tile title="Title 1">
                  <p>Tile Description 1</p>
                </x-homepage.tile>
                <x-homepage.tile title="Title 2">
                  <p>Tile Description 2</p>
                </x-homepage.tile>
                <x-homepage.tile title="Title 3">
                  <p>Tile Description 3</p>
                </x-homepage.tile>
              </div>
            </div>
          </div>
        </div>
        --}}
      </section>
    </div>
@endsection
