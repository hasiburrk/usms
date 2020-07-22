@extends('admin.master')
@section('main-content')
<!--Content Start-->
<br/>
<section class="container">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            
            @include('admin.includes.alert')

            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">Faculty List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Faculty Name</th>
                        @if(Auth::user()->role=='Admin')
                        <th>Status</th>
                        <th style="width: 100px;">Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($faculties as $faculty) 
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $faculty->faculty_name }}</td>
                        @if(Auth::user()->role=='Admin')
                        <td>{{ $faculty->status == 1 ? 'Published' : 'Unpublished' }}</td>
                        <td>
                            @if($faculty->status==1)
                            <a href="{{ route('faculty-unpublished',[$faculty->id]) }}" class="btn btn-sm btn-success"><span class="fa fa-arrow-alt-circle-up" title="Unpublish"></span></a>
                            @else
                            <a href="{{ route('faculty-published',[$faculty->id]) }}" class="btn btn-sm btn-warning"><span class="fa fa-arrow-alt-circle-down" title="Publish"></span></a>
                            @endif
                            <a href="{{ route('faculty-edit',[$faculty->id]) }}" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit"></span></a>
                            <a href="{{ route('faculty-delete',[$faculty->id]) }}" onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></a>
                        </td> 
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><br/>
<!--Content End-->
@endsection