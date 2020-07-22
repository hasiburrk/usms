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
                    <h4 class="text-center font-weight-bold font-italic mt-3">All Course List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive  text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        
                        <th>course code</th>
                        <th>course Name</th>
                        <th>course cradit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($studentdetails as $studentdetail) 
                    <tr>
                        <td>{{ $i++ }}</td>
                       
                        <td>{{ $studentdetail->course_code }}</td>
                        <td>{{ $studentdetail->course_name }}</td>
                        <td>{{ $studentdetail->course_cradit }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><br/>
<!--Content End-->
@endsection