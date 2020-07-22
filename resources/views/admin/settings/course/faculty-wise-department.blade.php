<option value="">--Select Department--</option>

@foreach ($departments as $department)
<option value="{{ $department->id }}">{{ $department->department_name }}</option>
@endforeach