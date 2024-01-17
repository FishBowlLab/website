@extends('layouts.app')

@section("content")
    {{--<a href="/{{Auth::user()->role}}">Back</a>--}}
    <a href="/teacher">Back</a>
    <h1>Edit Lessons: Class {{$class_id}}</h1>
    <div class="row row-content">
        <div class="col-12">
            <div class="tab-content">
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th >Expectation</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Change Access</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($module_data as $module)
                            {{html()->form($method="POST", $action=route("teacher.update", $module->lesson_number_available))->open()}}     
                            {{--
                            {!!Form::open(["action" => ["TeacherController@update", $module->lesson_number_available], "method" => "POST"])!!}
                            --}}
                            <tr>
                                <td>{{$module->expectation}}</td>
                                <td class="text-left">{{$module->title}}</td>
                                
                                @if ($module->availability ==0)
                                    {{--
                                        Begin changing to a switch
                                    --}}

                                    <td>Not Available</td>
                                    <td class="text-center">
                                        {{html()->submit('On')->class('btn btn-success')}}
                                        <div class="form-check form-switch">
                                            {{html()->input()->class('form-check-input')->type('checkbox')}}
                                            <input class="form-check-input" type="submit">
                                        </div>
                                    </td>
                                @else
                                    <td><p>Available</p></td>
                                    <td class="text-center">
                                        {{html()->submit('Off')->class('btn btn-secondary')}}
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </td>
                                @endif
                                    {{html()->hidden($name="class_id", $value=$class_id)}}
                                    {{html()->hidden($name="_method", $value="PUT")}}
                            {{ html()->form()->close() }}

                            {{html()->form('POST', route('teacher.destroy', $module->lesson_number_available))->open()}}  
                            {{--!!Form::open(["action" => ["TeacherController@destroy", $module->lesson_number_available], "method" => "POST"])!!--}}
                                {{html()->hidden($name="class_id", $value=$class_id)}}
                                {{html()->hidden($name="_method", $value="DELETE")}}
                                <td>
                                    {{--html()->submit('Delete')->class('btn btn-danger')->onclick("return confirm('Are you sure you?')")--}}
                                    {{html()->submit('Delete')->class('btn btn-danger')}}
                                </td>
                            {{ html()->form()->close() }}
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection