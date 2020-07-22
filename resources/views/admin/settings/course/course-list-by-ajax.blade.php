<thead>
    <tr>
        <th>Sl.</th>
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Course Cradit</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @php($i=1)
    @foreach($courses as $course)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $course->course_name }}</td>
        <td>{{ $course->course_code }}</td>
        <td>{{ $course->course_cradit }}</td>
        <td>
            
            <a href="{{ route('course-edit',[$course->id]) }}" target="_blank" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit" ></span></a>
            <a href="{{ route('course-delete',[$course->id]) }}" onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></a>

            
        </td>
    </tr>
    @endforeach
</tbody>



