<option value="">--Select Course--</option>

@foreach ($courses as $course)
<option value="{{ $course->id }}">{{ $course->course_name }}</option>
@endforeach