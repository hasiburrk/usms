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
                    <h4 class="text-center font-weight-bold font-italic mt-3">Course Students</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>student Name</th>
                            <th>Student Roll</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($courses as $course) 
                        {{-- @if( $course->department_id == $student->department_id &&
                        $course->levelterm_id == $student->levelterm_id ) --}}
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $course->department_id }}</td>
                            <td>{{ $course->session_id }}</td>
                            <td>{{ $course->levelterm_id }}</td>
                        </tr>
                       {{-- @endif --}}

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><br/>
<!--Content End-->
@endsection