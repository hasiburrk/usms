@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
<section class="container">
    <div class="row content">
        <div class="col-md-10 offset-md-1 pl-0 pr-0">
            @include('admin.includes.alert')
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Student Basic Info Update Form</h4>
            </div>
        </div>

    <form action="{{route('student-info-updated')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">

    <tr>
        <td>
            <div class="form-group row">
                <label for="studentName" class="col-sm-3 col-form-label text-right">Student Name:</label>
                <div class="col-sm-9">
                    <input type="text" name="student_name" class="form-control " placeholder="Student Name" value="{{ $student->student_name }}" id="studentName" required autofocus>
                    
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="fatherName" class="col-sm-3 col-form-label text-right">Father's Name</label>
                <div class="col-sm-9">
                <input type="text" name="father_name" class="form-control " placeholder="Father's Name" value="{{ $student->father_name }}" id="fatherName" required autofocus>
                
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="fatherMobile" class="col-sm-3 col-form-label text-right">Father's Mobile No.</label>
                <div class="col-sm-9">
                <input type="text" name="father_mobile" class="form-control " id="fatherMobile" placeholder="8801XXXXXXXXX" value="{{ $student->father_mobile }}" minlength="13" maxlength="13" required>
                
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="fatherProfession" class="col-sm-3 col-form-label text-right">Father's Profession</label>
                <div class="col-sm-9">
                <input type="text" name="father_profession" class="form-control " id="fatherProfession" placeholder="Father's Profession" value="{{ $student->father_profession }}" required>
                
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="motherName" class="col-sm-3 col-form-label text-right">Mother's Name</label>
                <div class="col-sm-9">
                <input type="text" name="mother_name" class="form-control  @error('mother_name') is-invalid @enderror" placeholder="Mother's Name" value="{{ $student->mother_name }}" id="motherName" required>
                @error('mother_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="motherMobile" class="col-sm-3 col-form-label text-right">Mother's Mobile No.</label>
                <div class="col-sm-9">
                <input type="text" name="mother_mobile" class="form-control  @error('mother_mobile') is-invalid @enderror" id="motherMobile" placeholder="8801XXXXXXXXX" value="{{ $student->mother_mobile }}" minlength="13" maxlength="13" required>
                @error('mother_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="motherProfession" class="col-sm-3 col-form-label text-right">Mother's Profession</label>
                <div class="col-sm-9">
                <input type="text" name="mother_profession" class="form-control @error('mother_profession') is-invalid @enderror" id="motherProfession" placeholder="Mother's Profession" value="{{ $student->mother_profession }}" required>
                @error('mother_profession')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="emailAddress" class="col-sm-3 col-form-label text-right">Email Address</label>
                <div class="col-sm-9">
                <input type="email" name="email_address" class="form-control  @error('email_address') is-invalid @enderror" id="emailAddress" placeholder="example@example.com" value="{{ $student->email_address }}">
                @error('email_address')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="smsMobile" class="col-sm-3 col-form-label text-right">Student Mobile No:</label>
                <div class="col-sm-9">
                <input type="text" name="student_mobile" class="form-control @error('student_mobile') is-invalid @enderror" id="studentMobile" placeholder="8801XXXXXXXXX" value="{{ $student->student_mobile }}" minlength="13" maxlength="13" required>
                @error('student_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="studentRelagion" class="col-sm-3 col-form-label text-right">Relagion</label>
                <div class="col-sm-9">
                <input type="text" name="student_relagion" class="form-control @error('student_relagion') is-invalid @enderror" id="studentRelagion" placeholder="Student Relagion" value="{{ $student->student_relagion }}" required/>
                @error('student_relagion')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="studentRoll" class="col-sm-3 col-form-label text-right">Roll Number</label>
                <div class="col-sm-9">
                <input type="text" name="student_roll" class="form-control @error('student_roll') is-invalid @enderror" id="studentRoll" placeholder="Roll Number" value="{{ $student->student_roll }}" required/>
                @error('student_roll')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="studentRoll" class="col-sm-3 col-form-label text-right">Reg. Number</label>
                <div class="col-sm-9">
                <input type="text" name="student_reg" class="form-control @error('student_reg') is-invalid @enderror" id="studentReg" placeholder="Registration Number" value="{{ $student->student_reg }}" required/>
                @error('student_reg')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row ">
                <label for="student image" class="col-sm-3 col-form-label text-right"></label>
                <div class="col-sm-9">
                <img class="img-thumbnail" src="@if(isset($student->student_photo)) {{ asset($student->student_photo) }} @else {{ asset('/') }}/admin/assets/images/avatar.png @endif" alt="Profile Picture" id="studentPhoto" style="max-width: 50%">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row">
                <label for="photo" class="col-sm-3 col-form-label text-right">Student Photo</label>
                <div class="col-sm-9">
                    <input type="file" name="student_photo" class="form-control" id="photo" onchange="showImage(this,'studentPhoto')">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-group row ">
                <label for="address" class="col-sm-3 col-form-label text-right">Address</label>
                <div class="col-sm-9">
                <input type="text" name="address" class="form-control " id="address" placeholder="Detail Address" value="{{ $student->address }}" required/>
                </div>
            </div>
        </td>
    </tr>

<input type="hidden" name="student_id" value="{{ $student->id }}"/>

     <tr><td><button type="submit" class="btn btn-block my-btn-submit">Update</button></td></tr>
    </table>
</div>
</form>
    </div>
</div>
</section><br/>
 <!--Content End-->
@endsection


