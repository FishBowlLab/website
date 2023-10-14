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
                <a class='portfolio-link' href='#'>Technology</a>
              </li>    
              <li class='portfolio-item'>
                <a class='portfolio-link' href='#'>Contact</a>
              </li>    
            </ul>
          </div>
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
