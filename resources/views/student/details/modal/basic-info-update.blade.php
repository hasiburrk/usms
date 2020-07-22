<!--modal -->
<div class="modal fade bd-example-modal-lg" id="studentBasicInfoUpdate" tabindex="-1" role="dialog" aria-labelledby="studentBasicInfoUpdate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="studentBasicInfoUpdate">Student Basic Info Update Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">*</span>
          </button>
        </div>

      <form action="{{ route('student-basic-info-update') }}" method="POST" >
            @csrf
        <div class="modal-body">
            
            <div class="form-group row">
                <label for="studentName" class="col-sm-3 col-form-label text-right">Student Name</label>
                <div class="col-sm-9">
                    <input type="text" name="student_name" class="form-control " placeholder="Student Name" value="{{ $students[0]->student_name }}" id="studentName" required autofocus>
                    
                </div>
            </div>

            <div class="form-group row">
                <label for="fatherName" class="col-sm-3 col-form-label text-right">Father's Name</label>
                <div class="col-sm-9">
                <input type="text" name="father_name" class="form-control " placeholder="Father's Name" value="{{ $students[0]->father_name }}" id="fatherName" required>
                
                </div>
            </div>

            <div class="form-group row">
                <label for="fatherMobile" class="col-sm-3 col-form-label text-right">Father's Mobile No.</label>
                <div class="col-sm-9">
                <input type="text" name="father_mobile" class="form-control " id="fatherMobile" placeholder="8801XXXXXXXXX" value="{{ $students[0]->father_mobile }}" minlength="13" maxlength="13" required>
                
                </div>
            </div>

            <div class="form-group row">
                <label for="fatherProfession" class="col-sm-3 col-form-label text-right">Father's Profession</label>
                <div class="col-sm-9">
                <input type="text" name="father_profession" class="form-control " id="fatherProfession" placeholder="Father's Profession" value="{{ $students[0]->father_profession }}" required>
                
                </div>
            </div>

            <div class="form-group row">
                <label for="motherName" class="col-sm-3 col-form-label text-right">Mother's Name</label>
                <div class="col-sm-9">
                <input type="text" name="mother_name" class="form-control  @error('mother_name') is-invalid @enderror" placeholder="Mother's Name" value="{{ $students[0]->mother_name }}" id="motherName" required>
                @error('mother_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="motherMobile" class="col-sm-3 col-form-label text-right">Mother's Mobile No.</label>
                <div class="col-sm-9">
                <input type="text" name="mother_mobile" class="form-control  @error('mother_mobile') is-invalid @enderror" id="motherMobile" placeholder="8801XXXXXXXXX" value="{{ $students[0]->mother_mobile }}" minlength="13" maxlength="13" required>
                @error('mother_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="motherProfession" class="col-sm-3 col-form-label text-right">Mother's Profession</label>
                <div class="col-sm-9">
                <input type="text" name="mother_profession" class="form-control @error('mother_profession') is-invalid @enderror" id="motherProfession" placeholder="Mother's Profession" value="{{ $students[0]->mother_profession }}" required>
                @error('mother_profession')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="emailAddress" class="col-sm-3 col-form-label text-right">Email Address</label>
                <div class="col-sm-9">
                <input type="email" name="email_address" class="form-control  @error('email_address') is-invalid @enderror" id="emailAddress" placeholder="example@example.com" value="{{ $students[0]->email_address }}">
                @error('email_address')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="smsMobile" class="col-sm-3 col-form-label text-right">Student Mobile No:</label>
                <div class="col-sm-9">
                <input type="text" name="student_mobile" class="form-control @error('student_mobile') is-invalid @enderror" id="studentMobile" placeholder="8801XXXXXXXXX" value="{{ $students[0]->student_mobile }}" minlength="13" maxlength="13" required>
                @error('student_mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="studentRelagion" class="col-sm-3 col-form-label text-right">Relagion</label>
                <div class="col-sm-9">
                <input type="text" name="student_relagion" class="form-control @error('student_relagion') is-invalid @enderror" id="studentRelagion" placeholder="Student Relagion" value="{{ $students[0]->student_relagion }}" required/>
                @error('student_relagion')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="studentRoll" class="col-sm-3 col-form-label text-right">Roll Number</label>
                <div class="col-sm-9">
                <input type="text" name="student_roll" class="form-control @error('student_roll') is-invalid @enderror" id="studentRoll" placeholder="Roll Number" value="{{ $students[0]->student_roll }}" required/>
                @error('student_roll')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="studentRoll" class="col-sm-3 col-form-label text-right">Reg. Number</label>
                <div class="col-sm-9">
                <input type="text" name="student_reg" class="form-control @error('student_reg') is-invalid @enderror" id="studentReg" placeholder="Registration Number" value="{{ $students[0]->student_reg }}" required/>
                @error('student_reg')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                 @enderror
                </div>
            </div>

            <div class="form-group row ">
                <label for="student image" class="col-sm-3 col-form-label text-right"></label>
                <div class="col-sm-9">
                <img class="img-thumbnail" src="@if(isset($student[0]->student_photo)) {{ asset($student[0]->student_photo) }} @else {{ asset('/') }}/admin/assets/images/avatar.png @endif" alt="Profile Picture" id="studentPhoto" style="max-width: 50%">
                </div>
            </div>
            <div class="form-group row">
                <label for="photo" class="col-sm-3 col-form-label text-right">Student Photo</label>
                <div class="col-sm-9">
                    <input type="file" name="student_photo" class="form-control" id="photo" onchange="showImage(this,'studentPhoto')">
                </div>
            </div>

            <div class="form-group row ">
                <label for="address" class="col-sm-3 col-form-label text-right">Address</label>
                <div class="col-sm-9">
                <input type="text" name="address" class="form-control " id="address" placeholder="Detail Address" value="{{ $students[0]->address }}" required/>
                </div>
            </div>
              <input type="hidden" name="student_id" value="{{ $students[0]->id }}"/>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info" >Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>