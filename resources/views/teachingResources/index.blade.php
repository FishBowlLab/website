@extends("layouts.app")

@section('content')
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-unstyled">
              <li class="nav-item">
                <a type="button" class="btn btn-primary" href="{{route('resources.create')}}">Create</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="d-flex justify-content-center flex-column gap-4">
        <form class="d-flex">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <ul>
            <li>
                <a type="button" class="btn btn-primary" href="{{route('resources.create')}}">Create</a>
            </li>
        </ul>
    </div>
</div>
<!--Add Panels with components and start creating the querries-->
<div class="row mb-2">
    <x-teaching-resource.resource-panel />
    <x-teaching-resource.resource-panel />
</div>
@endsection