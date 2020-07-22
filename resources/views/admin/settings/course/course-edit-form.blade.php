@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
<section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

    @include('admin.includes.alert')

        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Course Edit Form</h4>
            </div>
        </div>

<form action="{{ route('course-update') }}" method="post" enctype="multipart/form-data">
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
                        <select name="department_id" class="form-control @error('department_id') is-invalid @enderror" id="departmentId" required autofocus>
                            <option value="">--Select Department--</option>
                            
                        </select>
                        @error('department_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </td>
        </tr>
    
        <tr>
            <td>
                <div class="form-group row mb-0">
                    <label for="levelTermName" class="col-form-label col-sm-3 text-right">Year & Semester</label>
                    <div class="col-sm-9">
                        <select name="levelterm_id" class="form-control @error('levelterm_id') is-invalid @enderror" id="levelTermId" required autofocus>
                            <option value="">-- Select Year & Semester --</option>
                            @foreach($levelTerms as $levelTerm)
                             <option value="{{$levelTerm->id}}">{{ $levelTerm->level_name}} Year {{ $levelTerm->term_name}} Semester</option>
                            @endforeach
                        </select>
                        @error('levelterm_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
             </td>
          </tr>
          <tr>
            <td>
                <div class="form-group row mb-0">
                    <label for="courseName" class="col-form-label col-sm-3 text-right">Course Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name') }}" id="courseId" placeholder="Write Course Name here" required>
                        @error('course_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group row mb-0">
                    <label for="courseCode" class="col-form-label col-sm-3 text-right">Course Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('course_code') is-invalid @enderror" name="course_code" value="{{ old('course_code') }}" id="courseId" placeholder="Write Course Cradit here" required>
                        @error('course_code')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group row mb-0">
                    <label for="courseCradit" class="col-form-label col-sm-3 text-right">Course Cradit</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('course_cradit') is-invalid @enderror" name="course_cradit" value="{{ old('course_cradit') }}" id="courseId" placeholder="Write Course Cradit here" required>
                        @error('course_cradit')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </td>
        </tr>

<input type="hidden" name="course_id" value="{{ $course->id }}" />

     <tr><td><button type="submit" class="btn btn-block my-btn-submit">Update</button></td></tr>
    </table>
</div>
</form>
    </div>
</div>
</section><br/><br>
 <!--Content End-->
 <script>
     $('#facultyId').change(function(){
        var facultyId =$(this).val();
        if(facultyId){
           $('#overlay .loader').show();
           $.get("{{ route('faculty-wise-department')}}",{ faculty_id:facultyId },function(data){
              $('#overlay .loader').hide();
               console.log(data);
               $('#departmentId').empty().html(data);
           });
        }else{
          $('#departmentId').empty().html('--Select Department--');
        }
    });
 </script>
@endsection



