@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
 <section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

            @include('admin.includes.alert')
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Routine Add Form</h4>
            </div>
        </div>

    <form action="" method="post" enctype="multipart/form-data">
 @csrf
 <div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="departmentName" class="col-form-label col-sm-3 text-right">Department Name</label>
                <div class="col-sm-9">
                    <select name="department_id" class="form-control @error('department_id') is-invalid @enderror" id="departmentId" required autofocus>
                        <option value="">--Select Department--</option>
                        @foreach($departments as $department)
                    <option value="{{$department->id}}">{{ $department->department_name}}</option>
                        @endforeach
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
                <label for="courseName" class="col-form-label col-sm-3 text-right">Course</label>
                <div class="col-sm-9">
                    <select name="course_name" class="form-control @error('course_name') is-invalid @enderror" id="courseId" required autofocus>
                        <option value="">-- Select Course--</option>
                       
                    </select>
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
                <label for="dayName" class="col-form-label col-sm-3 text-right">Day</label>
                <div class="col-sm-9">
                    <select name="day_name" class="form-control" id="dayId">
                        <option value="">Select Day</option>
                        <option value="SAT">Saterday</option>
                        <option value="SUN">Sunday</option>
                        <option value="MON">Monday</option>
                        <option value="TUE">Tuesday</option>
                        <option value="WED">Wednesday</option>
                        <option value="TRI">Triday</option>
                    </select>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="timename" class="col-form-label col-sm-3 text-right">Time</label>
                <div class="col-sm-9">
                    <select name="ctime" class="form-control" id="ctimeId">
                        <option value="">Select Time</option>
                        <option value="8.45-9.30">8.45-9.30</option>
                        <option value="9.35-10.20">9.35-10.20</option>
                        <option value="10.25-11.10">10.25-11.10</option>
                        <option value="11.35-12.20">11.35-12.20</option>
                        <option value="12.35-1.10">12.35-1.10</option>
                        <option value="1.15-2.00">1.15-2.00</option>
                        <option value="2.25-3.10">2.25-3.10</option>
                        <option value="3.15-4.00">3.15-4.00</option>
                        <option value="4.05-4.50">4.05-4.50</option>
                    </select>
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
 <style>#overlay .loader{ display: none }</style>
 @include('admin.includes.loader')
 <script>
    $('#levelTermId').change(function(){

        var levelTermId =$(this).val();
        var departmentId = $('#departmentId').val();
        if(levelTermId && departmentId){
           $('#overlay .loader').show();
           $.get("{{ route('levelterm-wise-course')}}",{levelterm_id:levelTermId,department_id:departmentId},function(data){
              $('#overlay .loader').hide();
               console.log(data);
               $('#courseId').empty().html(data);
           });
        }else{
          $('#courseId').empty().html('--Select Course--');
        }
    })
  </script>

@endsection



