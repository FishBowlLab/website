@extends('layouts.app')

@section('content')
<div class='row'>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Set</th>
          <th scope="col">Condition</th>
          <th scope="col">Finish</th>
          <th scope="col">Source</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cards as $name=>$card)
          <x-buylist.card-row :name='$name' :data='$card'></x-buylist.card-row>
        @endforeach
      </tbody>
    </table>
  </div>
@foreach ($cards as $name=>$card)
    <div class="row">
        <div class='col-12'>
            <p>
                {{$name}}
            </p>
            <p>
                {{$card}}
            </p>
        </div>
    </div>
@endforeach

@endsection