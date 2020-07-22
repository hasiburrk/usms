<thead>
    <tr>
        <th>Sl.</th>
        <th>Student Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Student Roll</th>
        <th>Student Reg</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @php($i=1)
    @foreach($students as $student)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $student->student_name }}</td>
        <td>{{ $student->father_name }}</td>
        <td>{{ $student->mother_name }}</td>
        <td>{{ $student->student_roll }}</td>
        <td>{{ $student->student_reg }}</td>
        <td>
            
            <a href="{{ route('student-details',['id'=>$student->id]) }}" target="_blank" class="btn btn-sm btn-dark"><span class="fa fa-eye" title="Details" ></span></a>

        </td>
    </tr>
    @endforeach
</tbody>



