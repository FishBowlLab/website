@extends("layouts.app")

@section('content')
{{--
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a type="button" class="btn btn-primary" href="{{route('teaching.create')}}">Create</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
</div>
--}}
<div class="row">
  <div class="col">
    <h2>Add a toggle for user type</h2>
    <p>
      Maybe default the teacher view and connenct all the views. <br>
      The challenge will be to stitch together all the AUTH.
      There also is no container here. Look into the templating. Priority is the routing and we can fix the front end later.
    </p>
    <a href="{{route('teacher.index')}}" class="btn btn-primary">Teacher View</a>
    <a href="{{route('student.index')}}" class="btn btn-primary">Student View</a>
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
{{--
<!--Add Panels with components and start creating the querries-->
<div class="row mb-2">
    <x-teaching-resource.resource-panel />
    <x-teaching-resource.resource-panel />
</div>
--}}
@endsection