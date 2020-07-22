@extends('admin.master')

@section('main-content')<br/>
    <!--Content Start-->
<section class="container-fluid">
    <div class="row content">
        <div class="col-sm-12 pl-0 pr-0 ">

            @include('admin.includes.alert')

        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Student Registration Form</h4>
            </div>
        </div>


    <form action="{{ route('student-save') }}" method="post" enctype="multipart/form-data" class="form-inline">
            @csrf
            <div class="form-group col-md-6 mb-3">
                <label for="studentName" class="col-sm-4 col-form-label text-right">Student Name</label>
                <input type="text" name="student_name" class="form-control col-sm-8  @error('student_name') is-invalid @enderror" placeholder="Student Name" value="" id="studentName" required autofocus>
                @error('student_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="fatherName" class="col-sm-4 col-form-label text-right">Father's Name</label>
                <input type="text" name="father_name" class="form-control col-sm-8 @error('father_name') is-invalid @enderror" placeholder="Father's Name" value="" id="fatherName" required>
                @error('father_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="fatherMobile" class="col-sm-4 col-form-label text-right">Father's Mobile No.</label>
                <input type="text" name="father_mobile" class="form-control col-sm-8 @error('father_mobile') is-invalid @enderror" id="fatherMobile" placeholder="8801XXXXXXXXX" value="" minlength="13" maxlength="13" required>
                @error('father_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="fatherProfession" class="col-sm-4 col-form-label text-right">Father's Profession</label>
                <input type="text" name="father_profession" class="form-control col-sm-8 @error('father_profession') is-invalid @enderror" id="fatherProfession" placeholder="Father's Profession" value="" required>
                @error('father_profession')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="motherName" class="col-sm-4 col-form-label text-right">Mother's Name</label>
                <input type="text" name="mother_name" class="form-control col-sm-8 @error('mother_name') is-invalid @enderror" placeholder="Mother's Name" value="" id="motherName" required>
                @error('mother_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="motherMobile" class="col-sm-4 col-form-label text-right">Mother's Mobile No.</label>
                <input type="text" name="mother_mobile" class="form-control col-sm-8 @error('mother_mobile') is-invalid @enderror" id="motherMobile" placeholder="8801XXXXXXXXX" value="" minlength="13" maxlength="13" required>
                @error('mother_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="motherProfession" class="col-sm-4 col-form-label text-right">Mother's Profession</label>
                <input type="text" name="mother_profession" class="form-control col-sm-8 @error('mother_profession') is-invalid @enderror" id="motherProfession" placeholder="Mother's Profession" value="" required>
                @error('mother_profession')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="emailAddress" class="col-sm-4 col-form-label text-right">Email Address</label>
                <input type="email" name="email_address" class="form-control col-sm-8 @error('email_address') is-invalid @enderror" id="emailAddress" placeholder="example@example.com" value="">
                @error('email_address')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="smsMobile" class="col-sm-4 col-form-label text-right">Student Mobile No:</label>
                <input type="text" name="student_mobile" class="form-control col-sm-8 @error('student_mobile') is-invalid @enderror" id="studentMobile" placeholder="8801XXXXXXXXX" value="" minlength="13" maxlength="13" required>
                @error('student_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="studentRelagion" class="col-sm-4 col-form-label text-right">Relagion</label>
                <input type="text" name="student_relagion" class="form-control col-sm-8 @error('student_relagion') is-invalid @enderror" id="studentRelagion" placeholder="Student Relagion" value="" required/>
                @error('student_relagion')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="studentRoll" class="col-sm-4 col-form-label text-right">Roll Number</label>
                <input type="text" name="student_roll" class="form-control col-sm-8 @error('student_roll') is-invalid @enderror" id="studentRoll" placeholder="Roll Number" value="" required/>
                @error('student_roll')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="studentRoll" class="col-sm-4 col-form-label text-right">Reg. Number</label>
                <input type="text" name="student_reg" class="form-control col-sm-8 @error('student_reg') is-invalid @enderror" id="studentReg" placeholder="Registration Number" value="" required/>
                @error('student_reg')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
            </div>

            <div class="form-group col-md-6 mb-3">
             <label for="facultyId" class="col-sm-4 col-form-label text-right">Faculty</label>
                <select name="faculty_id" class="form-control col-sm-8 @error('faculty_id') is-invalid @enderror" id="facultyId" required>
                     <option value="">Select Faculty</option>
                     @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->faculty_name}}</option>
                     @endforeach
                </select>
                @error('faculty_id')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="departmentId" class="col-sm-4 col-form-label text-right">Department</label>
                   <select name="department_id" class="form-control col-sm-8 @error('department_id') is-invalid @enderror" id="departmentId" required>
                        <option value="">Select Department</option>
                        
                   </select>
                   @error('department_id')
                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                   @enderror
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="leveltermId" class="col-sm-4 col-form-label text-right">Level & Term</label>
                    <select name="levelterm_id" class="form-control col-sm-8 @error('levelterm_id') is-invalid @enderror" id="levelTermId" required autofocus>
                        <option value="">-- Select Year & Semester --</option>
                        @foreach($levelTerms as $levelTerm)
                         <option value="{{$levelTerm->id}}">{{ $levelTerm->level_name}} Year {{ $levelTerm->term_name}} Semester</option>
                        @endforeach
                    </select>
                    @error('levelterm_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
              
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="sessionId" class="col-sm-4 col-form-label text-right">Session</label>
                    <select name="session_id" class="form-control col-sm-8 @error('session_id') is-invalid @enderror" id="sessionId" required autofocus>
                        <option value="">--Select Session--</option>
                        @foreach($sessions as $session)
                         <option value="{{$session->id}}">{{ $session->session_name}}</option>
                        @endforeach
                    </select>
                    @error('session_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
              
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="photo" class="col-sm-4 col-form-label text-right">Student Photo</label>
                <input type="file" name="student_photo" class="form-control col-sm-8" id="photo">
            </div>

            <div class="form-group col-12 mb-3 pl-2">
                <label for="address" class="col-sm-2 col-form-label text-right">Address</label>
                <input type="text" name="address" class="form-control col-sm-10" id="address" placeholder="Detail Address" value="" required/>
            </div>

            <input type="hidden" name="status" value="1"/>

            <div class="form-group col-md-12 mb-3">
                <button type="submit" class="btn btn-block my-btn-submit">Save Student</button>
            </div>
        </form>
    </div>
</div>
</section>
 <!--Content End-->
 <style>#overlay .loader{ display: none }</style>
 @include('admin.includes.loader')
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
    })
    </script>

@endsection