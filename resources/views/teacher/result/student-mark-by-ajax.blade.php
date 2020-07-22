<thead>
    <tr>
        <th>Sl.</th>
        <th>Student Name</th>
        <th>Student_Roll</th>
        <th>Attendence Mark</th>
        <th>CT-1 Mark</th>
        <th>CT-2 Mark</th>
        <th>CT-3 Mark</th>
        <th>Exam Mark</th>
       
    </tr>
</thead>
<tbody>
    @php($i=1)
    @foreach($students as $student)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $student->student_name }}</td>
        <td>{{ $student->student_roll }}</td>
        <td>
            <input type="text" class="form-control @error('attendence_mark') is-invalid @enderror" name="attendence_mark" value="{{ old('attendence_mark') }}" id="attendencemarkId" placeholder="Attendence mark" required>
            @error('attendence_mark')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </td>
        <td>
            <input type="text" class="form-control @error('mark_ct1') is-invalid @enderror" name="mark_ct1" value="{{ old('mark_ct1') }}" id="markCT1" placeholder="CT-1 Mark" required>
            @error('mark_ct1')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </td>
        <td>
            <input type="text" class="form-control @error('mark_ct2') is-invalid @enderror" name="mark_ct2" value="{{ old('mark_ct2') }}" id="markCT2" placeholder="CT-2 Mark" required>
            @error('mark_ct2')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </td>
        <td>
            <input type="text" class="form-control @error('mark_ct3') is-invalid @enderror" name="mark_ct3" value="{{ old('mark_ct3') }}" id="markCT3" placeholder="CT-3 Mark" required>
            @error('mark_ct3')
             <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </td>
        <td>
            <input type="text" class="form-control @error('exam_mark') is-invalid @enderror" name="exam_mark" value="{{ old('exam_mark') }}" id="filalExamMarkId" placeholder="Exam Mark" required>
            @error('exam_mark')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </td>
        
    </tr>
    @endforeach
    <tr><td colspan="8"><button type="submit" class="btn btn-block my-btn-submit">Save</button></td></tr>
</tbody>



