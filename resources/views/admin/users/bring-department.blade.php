  
<label for="department_id" class="col-sm-3 col-form-label text-right">Department</label>
    
<select name="department_id" class="form-control col-sm-9 @error('department_id') is-invalid @enderror" id="department_id" required >
    <option value="">--Select Department--</option>
    @foreach($departments as $department)
       <option value="{{ $department->id }}">{{ $department->department_name }}</option>
    @endforeach
</select>
@error('department_id')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror



    
    

