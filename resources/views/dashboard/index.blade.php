@extends('layouts.app')
@section('content')
<!-- I need to include ckeditor in my build
<script src=''></script>
-->
<div class="container-fluid">
    <div class='row flex-nowrap'>
        <x-dashboard.sidebar></x-dashboard.sidebar>
        <div class='col py-3'>
            <div class="row">
                <div class="col-12 col-md-11 ">
                    <h4 class='fs-4 p-2'>
                        Welcome {{Auth::user()->fname ." ". Auth::user()->lname}}
                    </h4>
                </div>
                <div class='col-12 col-md-1 '>
                    <div class='p-2'>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ticketModal">
                            Create Ticket
                        </button>
                    </div>
                </div>
                <!-- Modal -->
                <!--text-dark is here temporarily until colour scheme is fixed -->
                <div class="modal fade text-dark" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ticketModalLabel">Create Ticket</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!--
                                    Possibly copy this and send the backend info here. But how will JS know?
                                    https://www.w3schools.com/howto/howto_js_autocomplete.asp
                                -->
                                <div class="form-outline">
                                    <input type="search" id="ticketID" class="form-control" placeholder="Search for your product" aria-label="Search" />
                                </div>
                                <!--Boiler Plate Code for CKeditor-->
                                <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
                                <h1>Classic editor</h1>
                                <div id="editor">
                                    <p>This is some sample content.</p>
                                </div>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#editor' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href='{{route("dashboard.create")}}'>Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <x-dashboard.summary-card title="Item 1">
                    This is a test for the slot.
                </x-dashboard.summary-card>
                <x-dashboard.summary-card title="Item 2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum obcaecati maxime distinctio ducimus earum ut voluptatibus. Deleniti mollitia libero eveniet, impedit omnis quae aut ut natus inventore, tenetur debitis ex.
                </x-dashboard.summary-card>
                <x-dashboard.summary-card title="Item 3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. At dicta culpa, minima illo modi eos voluptates ipsum recusandae, ratione consectetur beatae incidunt. Assumenda consectetur quisquam explicabo, totam optio ex minima.
                </x-dashboard.summary-card>
                <x-dashboard.summary-card title="Item 4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. At dicta culpa, minima illo modi eos voluptates ipsum recusandae, ratione consectetur beatae incidunt. Assumenda consectetur quisquam explicabo, totam optio ex minima.
                </x-dashboard.summary-card>
            </div>
            <div class='row'>
                <div class='col-12 col-md-6'>
                    <div class='card'>
                        <div class='card-header'>
                            Project Progress Visual
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>Progress Chart</h5>
                            <!--img src='...' class='card-img-bottom' alt='...'-->
                            <!--Notes on what to do next-->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Fix Pagination and sortable connection
                                </li>
                                <li class="list-group-item">
                                    Style modal and connect ckeditor
                                </li>
                                <li class="list-group-item">
                                    Create tickets using Modal
                                </li>
                                <li class="list-group-item">
                                    Add flagging, task deletion, and watching feature.
                                    Flag should create a ticket maybe?
                                </li>
                                <li class="list-group-item">
                                    Fix spacing between rows
                                </li>
                                <li class="list-group-item">
                                    Insert Analytics using JS package for graph
                                </li>
                                <li class="list-group-item">
                                    Add space for notes to client
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class='col-12 col-md-6'>
                    <div class='card'>
                        <div class='card-header'>
                            Project Graph
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>Graph</h5>
                            <img src='...' class='card-img-bottom' alt='...'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <x-dashboard.summary-table>
                    @foreach ($rows as $row)
                        <x-dashboard.summary-table-row taskID='{{$row->taskID}}' name='{{$row->name}}' component='{{$row->component}}' timestamp='{{$row->updated_at}}' status='{{$row->status}}'>
                        </x-dashboard.summary-table-row>
                    @endforeach
                </x-dashboard.summary-table>
                {{$rows->links()}}
            </div>
        </div>
    </div>
</div>
@endsection