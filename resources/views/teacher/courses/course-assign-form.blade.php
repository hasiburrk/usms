@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
 <section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

            @include('admin.includes.alert')
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Course Assign Form</h4>
            </div>
        </div>

 <form action="{{ route('course-assign-save') }}" method="post" enctype="multipart/form-data">
 @csrf
 <div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
        <tr style="visibility: hidden">
            <td>
                <div class="form-group row mb-0">
                    <label for="departmentName" class="col-form-label col-sm-3 text-right">Department Name</label>
                    <div class="col-sm-9">
                        <select name="department_id" class="form-control @error('department_id') is-invalid @enderror" id="departmentId" required autofocus>
                        <option value="{{$user->department_id}}">{{$user->department_id}}</option> 
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
                <label for="teacherName" class="col-form-label col-sm-3 text-right">Teacher Name</label>
                <div class="col-sm-9">
                    <select name="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror" id="teacherId" required autofocus>
                        <option value="">--Select Teacher--</option>
                        @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{ $teacher->name}}</option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="sessionId" class="col-form-label col-sm-3 text-right">Session</label>
                <div class="col-sm-9">
                    <select name="session_id" class="form-control @error('session_id') is-invalid @enderror" id="sessionId" required autofocus>
                        <option value="">-- Select Session --</option>
                        @foreach($sessions as $session)
                         <option value="{{ $session->id }}">{{ $session->session_name }}</option>
                        @endforeach
                    </select>
                    @error('session_id')
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
                    <select name="course_id" class="form-control @error('course_id') is-invalid @enderror" id="courseId" required autofocus>
                        <option value="">--Select Course--</option>
                        
                    </select>
                    @error('course_id')
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
 </section><br/>
 <!--Content End-->
 <style>#overlay .loader{ display: none }</style>
 @include('admin.includes.loader')
 
  <script>
     $("#levelTermId").change(function() { 
     var levelTermId = $(this).val();
     
     var departmentId = $('#departmentId').val();
     if(departmentId && levelTermId){
         $('#overlay .loader').show();
         $.get("{{ route('course-list-by-levelterm') }}", {
             department_id:departmentId,
             levelterm_id:levelTermId,
         }, function(data){
             $('#overlay .loader').hide();
             console.log(data);
             $("#courseId").html(data);
       })
       }else{
         $("#courseId").empty().html('--Select Course--');
       }
 
     })
 
 
   </script>

@endsection



