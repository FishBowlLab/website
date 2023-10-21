@extends('layouts.app')
@section('content')
<div class='row flex-nowrap'>
    <x-dashboard.sidebar></x-dashboard.sidebar>
    <div class='col py-3'>
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
                        <img src='...' class='card-img-bottom' alt='...'>
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
        <!--Remove this after addressing the note-->
        <div class='row bg-light text-black py-3 fs-3'>
            Maybe create an accordian effect for the notes with the progress?
        </div>
        <div class='row'>
            <x-dashboard.summary-table>
                {{--
                    When the backend is complete, these components should be for looped to be displayed.
                --}}
                <x-dashboard.summary-table-row taskID='1' name='Product X' component='Component A' timestamp='{{now()->format("Y-m-d")}}' status='done'>
                </x-dashboard.summary-table-row>
                <x-dashboard.summary-table-row taskID='2' name='Product X' component='Component B' timestamp='{{now()->format("Y-m-d")}}' status='in progress'>
                </x-dashboard.summary-table-row>
                <x-dashboard.summary-table-row taskID='3' name='Product X' component='Component C' timestamp='{{now()->format("Y-m-d")}}' status='blocked'>
                </x-dashboard.summary-table-row>
                <x-dashboard.summary-table-row taskID='4' name='Product X' component='Component D' timestamp='{{now()->format("Y-m-d")}}' status='pending'>
                </x-dashboard.summary-table-row>
                <x-dashboard.summary-table-row taskID='5' name='Product Y' component='Component A' timestamp='{{now()->format("Y-m-d")}}' status='new'>
                </x-dashboard.summary-table-row>
            </x-dashboard.summary-table>
        </div>
    </div>
</div>
@endsection