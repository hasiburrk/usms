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
                    <h4 class="text-center font-weight-bold font-italic mt-3">Level & Term List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Year Name</th>
                        <th>Semester Name</th>
                        @if(Auth::user()->role=='Admin')
                        <th>Status</th>
                        <th style="width: 100px;">Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($levelterms as $levelterm) 
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $levelterm->level_name }}</td>
                        <td>{{ $levelterm->term_name }}</td>
                        @if(Auth::user()->role=='Admin')
                        <td>{{ $levelterm->status == 1 ? 'Published' : 'Unpublished' }}</td>
                        <td>
                            @if($levelterm->status==1)
                            <a href="{{ route('levelterm-unpublished',[$levelterm->id]) }}" class="btn btn-sm btn-success"><span class="fa fa-arrow-alt-circle-up" title="Unpublish"></span></a>
                            @else
                            <a href="{{ route('levelterm-published',[$levelterm->id]) }}" class="btn btn-sm btn-warning"><span class="fa fa-arrow-alt-circle-down" title="Publish"></span></a>
                            @endif
                            <a href="{{ route('levelterm-edit',[$levelterm->id]) }}" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit"></span></a>
                            <a href="{{ route('levelterm-delete',[$levelterm->id]) }}" onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></a>
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
<style>#overlay .loader{ display: none }</style>
 @include('admin.includes.loader')

@endsection