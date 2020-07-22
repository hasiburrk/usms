@if(count($usertypes)>0)
@php($i=1)
@foreach ($usertypes as $usertype) 
<tr>
<td>{{ $i++ }}</td>
<td>{{ $usertype->usertype_name }}</td>
<td>{{ $usertype->status == 1 ? 'Published' : 'Unpublished' }}</td>
<td>
    @if($usertype->status==1)
    <button onclick="usertypeUnpublished(' {{ $usertype->id }}')" class="btn btn-sm btn-success"><span class="fa fa-arrow-alt-circle-up" title="Unpublish"></span></button>
    @else
    <button onclick="usertypePublished(' {{ $usertype->id }}')" class="btn btn-sm btn-warning"><span class="fa fa-arrow-alt-circle-down" title="Publish"></span></button>
    @endif
    <button onclick="usertypeEdit('{{ $usertype->id }}','{{ $usertype->usertype_name }}')" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit"></span></button>
    <button onclick="usertypeDelete(' {{ $usertype->id }}')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></button>
</td> 
</tr>
@endforeach
@else
<tr class="text-danger">
<td colspan="5">User not Found !!!</td>
</tr>
@endif

