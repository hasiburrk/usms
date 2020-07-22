
<thead>
    <tr>
        <th>Sl.</th>
        <th>Department Name</th>
        @if(Auth::user()->role=='Admin')
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @php($i=1)
    @foreach($departments as $department)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $department->department_name }}</td>
        @if(Auth::user()->role=='Admin')
        <td>
            @if($department->status == 1)
            <button onclick='unpublished("{{ $department->id }}","{{ $department->faculty_id }}")' class="btn btn-sm btn-success"><span class="fa fa-arrow-alt-circle-up" id="unpublish" title="Unpublish"></span></button>
            @else
            <button onclick='published("{{ $department->id }}","{{ $department->faculty_id }}")' class="btn btn-sm btn-warning"><span class="fa fa-arrow-alt-circle-down" title="Publish"></span></button>
            @endif
            <a href="{{ route('department-edit',[$department->id]) }}" target="_blank" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit" ></span></a>

            <button onclick='delt("{{ $department->id }}","{{ $department->faculty_id }}")' onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></button>
        </td>
        @endif
    </tr>
    @endforeach
</tbody>


<script>
    function unpublished(departmentId,facultyId){
        var check = confirm('If yoy want to un_publish this item, press OK');
        if(check){
         $.get("{{ route('department-unpublished') }}",{department_id:departmentId,faculty_id:facultyId}, function(data){
             console.log(data);
             $("#departmentList").empty().html(data);
         })
        }else{
            return false;
        }
    }
 
    function published(departmentId,facultyId){
        var check = confirm('If yoy want to publish this item, press OK');
        if(check){
         $.get("{{ route('department-published') }}",{department_id:departmentId,faculty_id:facultyId}, function(data){
             console.log(data);
             $("#departmentList").empty().html(data);
         })
        }else{
            return false;
        }
    }
 
    function delt(departmentId,facultyId){
        var check = confirm('If yoy want to Delete this item, press OK');
        if(check){
         $.get("{{ route('department-delete') }}",{department_id:departmentId,faculty_id:facultyId}, function(data){
             console.log(data);
             $("#departmentList").empty().html(data);
         })
        }else{
            return false;
        }
    }
 
 </script>