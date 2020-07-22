@extends('admin.master')
@section('main-content')
<!--Content Start-->
<br/>
<section class="container">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            
            @include('admin.includes.alert')

            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">Course List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Course Name</th>
                            <th>Course Code</th>
                            <th>Course Cradit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($courses as $course) 
                        @if($user->department_id==$course->department_id)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_cradit }}</td>
                            <td>
                                
                                <a href="{{ route('course-edit',[$course->id]) }}" target="_blank" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit" ></span></a>
                                {{-- <a href="{{ route('course-delete',[$course->id]) }}" onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></a> --}}

                            </td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><br/>
<!--Content End-->
@endsection