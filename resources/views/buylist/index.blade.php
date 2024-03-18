@extends('layouts.app')

@section('content')
<div class='row'>
    <div class='col-12'>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                Add Card List
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="upload-tab" data-bs-toggle="tab" data-bs-target="#upload" type="button" role="tab" aria-controls="upload" aria-selected="false">
                Upload List
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">
                Add Card
              </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="mb-3">
              <!--Convert this into a proper form after-->
              {{html()->form('POST')->route('buylist.store')->class('form-group')->open()}}   
                <label for="cardListText" class="form-label">Paste list here</label>
                
                {{html()->textarea("cardListText")->class("form-control overflow-scroll")->id("cardListText")->rows('3')->placeholder("#example &#10;Underground Sea &#10;Taiga")}}
                {{html()->submit('Submit')->class('btn btn-primary')}}
              {{ html()->form()->close() }}
            </div>
        </div>
        <!--File Upload Tab-->
        <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
          <div class="mb-3">
            <label for="formFile" class="form-label">Upload a txt or csv file</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">...</div>
        </div>
    </div>
</div>

<div class='row'>
    <div class='col-12'>
        <p>
            Use the scryfall API to fetch
            <br><br>
            https://scryfall.com/docs/api
            <br><br>
            Or store all the versions using MTGJSON
            <br><br>
            https://mtgjson.com/downloads/all-sets/
        </p>
        <p>
            First build a searchable interface. Then load data from stores
        </p>
    </div>
</div>

@endsection