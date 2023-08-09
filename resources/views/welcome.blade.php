@extends("layouts.app")
@section("content")
    <div class="container">
      <x-homepage.carousel />
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
      </section>
    </div>
@endsection
