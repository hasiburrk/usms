@extends('admin.master')
@section('main-content')
<!--Content Start-->
<br/>
<section class="container">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            @if (Session::get('message'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Message: </strong> {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if (Session::get('error_message'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Error: </strong> {{ Session::get('error_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">Session List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Session Name</th>
                        <th>Status</th>
                        @if(Auth::user()->role=='Admin')
                        <th style="width: 100px;">Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach ($sessions as $session) 
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $session->session_name }}</td>
                        <td>{{ $session->status == 1 ? 'Published' : 'Unpublished' }}</td>
                        @if(Auth::user()->role=='Admin')
                        <td>
                            @if($session->status==1)
                            <a href="{{ route('session-unpublished',[$session->id]) }}" class="btn btn-sm btn-success"><span class="fa fa-arrow-alt-circle-up" title="Unpublish"></span></a>
                            @else
                            <a href="{{ route('session-published',[$session->id]) }}" class="btn btn-sm btn-warning"><span class="fa fa-arrow-alt-circle-down" title="Publish"></span></a>
                            @endif
                            <a href="{{ route('session-edit',[$session->id]) }}" class="btn btn-sm btn-info"><span class="fa fa-edit" title="Edit"></span></a>
                            <a href="{{ route('session-delete',[$session->id]) }}" onclick="return confirm('If you want to delete this item Press  OK')" class="btn btn-sm btn-danger"><span class="fa fa-trash" title="Delete"></span></a>
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