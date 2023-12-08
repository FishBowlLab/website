@extends("layouts.app")

@section("content")
  <header id="home" class="masthead">
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center">
      <div class="header-content">
        <h1> Welcome to <br>Fish Bowl Lab<br></h1> 
        <div>
          <p>
            Our mission is to deliver a web application, utilizing the Blockly API, aimed at helping the teaching of mathematical concepts. 
            Through this project, we showcase a user-oriented approach that prioritizes effective education. <br><br>
            Development on the site has been paused to update to <b>Laravel 9</b>.
          </p>
        </div>
      </div>
    </div>
  </header>
  <section id="features" class="features" >
    <div class="container">
      <div class="section-heading text-center">
        <h2>Feature/Product Header</h2>
        <p class="text-muted">Subheader text</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 my-auto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <div class="feature-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" style='height:300px' alt="laravel">
                  <h3>Built on Laravel</h3>
                  <p class="text-muted">From the front-end (Bootstrap, Vanilla JavaScript) to the back-end (PHP Laravel, MySQL), 
                    this app leverages the strength of several frameworks. 
                  </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="feature-item">
                <img src="https://developers.google.com/static/blockly/images/logos/logo_vertical.svg" style='height:300px' alt="blockly">
                  <h3>Built with Blockly</h3>
                  <p class="text-muted">This application attempts to create a mobile first application, targeting cellphone screens
                     using the blockly API to improve student experience in a classroom setting.
                  </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="feature-item">
                <i class="text-primary icon-screen-desktop" style="height:300px">Coming Soon</i>
                  <h3>Content Management </h3>
                  <p class="text-muted">Instructors will be able to upload and customize content on the platform</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection