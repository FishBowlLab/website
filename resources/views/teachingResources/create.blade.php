@extends('layouts.app')

@section("content")
    <h1>Create Content</h1>
    {{--
        {{html()->text("title")->name('title')->class("form-control")->placeholder("Title")}}
        {{ html()->closeModelForm() }}
    --}}
    {{html()->form('POST')->route('resources.store')->class('form-group')->open()}} 
        <div class='form-group'>
            {{html()->text("title")->name('title')->class("form-control")->placeholder("Title")}}
        </div>
        <div class='form-group'>
            {{html()->textarea("description")->id('editor')->class('form-control')->placeholder('Activity Description')}}
        </div>
        <div class="mb-3">
            <input 
                type="file" 
                name="file" 
                multiple
                id="file"
                class="form-control @error('file') is-invalid @enderror">

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{html()->submit('Submit')->class('btn btn-primary')}}
    {{ html()->form()->close() }}
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
   
    @endsection