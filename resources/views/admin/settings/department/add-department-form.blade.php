@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
 <section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

            @include('admin.includes.alert')
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Department Add Form</h4>
            </div>
        </div>

 <form action="{{ route('department-save') }}" method="post" enctype="multipart/form-data">
 @csrf
 <div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
       
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="facultyName" class="col-form-label col-sm-3 text-right">Faculty Name</label>
                <div class="col-sm-9">
                    <select name="faculty_id" class="form-control @error('faculty_id') is-invalid @enderror" id="facultyId" required autofocus>
                        <option value="">--Select Faculty--</option>
                        @foreach($faculties as $faculty)
                    <option value="{{$faculty->id}}">{{ $faculty->faculty_name}}</option>
                        @endforeach
                    </select>
                    @error('faculty_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="departmentName" class="col-form-label col-sm-3 text-right">Department Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name" value="{{ old('department_name') }}" id="departmentId" placeholder="Write Department Name here" required>
                    @error('department_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>

     <tr><td><button type="submit" class="btn btn-block my-btn-submit">Save</button></td></tr>
    </table>
 </div>
 </form>
    </div>
 </div>
 </section><br/><br/>
 <!--Content End-->

@endsection



