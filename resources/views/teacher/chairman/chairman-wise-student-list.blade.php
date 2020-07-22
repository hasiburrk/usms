
@extends('admin.master')
@section('main-content')
<!--Content Start-->
<br/>
<section class="container-fluid">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            
            @include('admin.includes.alert')

            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">All Student List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Profile</th>
                        <th>Student_Name</th>
                        <th>Father_Name</th>
                        <th>Mother_Name</th>
                        <th>Session</th>
                        <th>Roll_No:</th>
                        <th>Reg_No:</th>
                        <th>Mobile No</th>

                        <th style="width: 100px;">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($students as $student)
                        @if($user->department_id==$student->department_id) 
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>@if(isset($students[0]->student_photo))
                            <img src="{{ asset($students[0]->student_photo) }}" alt="Profile Picture">
                        @else
                           <img src="{{ asset('/admin/assets/images/avatar.png') }}" class="img-thumbnail" style="width: 40%" alt="Profile Picture" >
                         @endif</td>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->father_name }}</td>
                        <td>{{ $student->mother_name }}</td>
                        <td>{{ $student->session_name }}</td>
                        <td>{{ $student->student_roll }}</td>
                        <td>{{ $student->student_reg }}</td>
                        <td>{{ $student->student_mobile }}</td>

                        <td>
                        <a href="{{ route('student-details',['id'=>$student->id]) }}" target="_blank" class="btn btn-sm btn-dark"><span class="fa fa-eye" title="Details" ></span></a>
                            <a href="{{ route('student-details',['id'=>$student->id]) }}" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit"></span></a>
                            <a href="{{ route('student-delete',['id'=>$student->id]) }}" onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></a>
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