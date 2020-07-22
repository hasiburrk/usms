@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
 <section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

            @include('admin.includes.alert')
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Course Marks Add Form</h4>
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
                <label for="studentRoll" class="col-form-label col-sm-3 text-right">Student Roll</label>
                <div class="col-sm-9">
                    <select name="student_roll" class="form-control @error('student_roll') is-invalid @enderror" id="studentRoll" required autofocus>
                        <option value="">-- Select Student Roll--</option>
                       
                    </select>
                    @error('student_roll')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="studentName" class="col-form-label col-sm-3 text-right">Student Name</label>
                <div class="col-sm-9">
                    <select name="student_name" class="form-control @error('student_name') is-invalid @enderror" id="studentName" required autofocus>
                        <option value="">-- Select Student Name--</option>
                       
                    </select>
                    @error('student_name')
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
                <label for="attendencemark" class="col-form-label col-sm-3 text-right">Attendence Mark</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('attendence_mark') is-invalid @enderror" name="attendence_mark" value="{{ old('attendence_mark') }}" id="attendencemarkId" placeholder="Write attendence mark Here" required>
                    @error('attendence_mark')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="markCT1" class="col-form-label col-sm-3 text-right">Mark CT-1</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('mark_ct1') is-invalid @enderror" name="mark_ct1" value="{{ old('mark_ct1') }}" id="markCT1" placeholder="Write CT-1 Mark Here" required>
                    @error('mark_ct1')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="markCT2" class="col-form-label col-sm-3 text-right">Mark CT-2</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('mark_ct2') is-invalid @enderror" name="mark_ct2" value="{{ old('mark_ct2') }}" id="markCT2" placeholder="Write CT-2 Mark Here" required>
                    @error('mark_ct2')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="markCT3" class="col-form-label col-sm-3 text-right">Mark CT-3</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('mark_ct3') is-invalid @enderror" name="mark_ct3" value="{{ old('mark_ct3') }}" id="markCT3" placeholder="Write CT-3 Mark Here" required>
                    @error('mark_ct3')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="filalExamMark" class="col-form-label col-sm-3 text-right">Final Exam Mark</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('exam_mark') is-invalid @enderror" name="exam_mark" value="{{ old('exam_mark') }}" id="filalExamMarkId" placeholder="Write CT-3 Mark Here" required>
                    @error('exam_mark')
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



