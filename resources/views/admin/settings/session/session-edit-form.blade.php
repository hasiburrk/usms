@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
<section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

        @if(Session::get('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Message : </strong> {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">School Edit Form</h4>
            </div>
        </div>

<form action="{{ route('session-update') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">

    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="sessionName" class="col-form-label col-sm-3 text-right">session Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('session_name') is-invalid @enderror" name="session_name" value="{{ $session->session_name }}" id="sessionName" placeholder="Write session Name here" required>
                    @error('session_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>

<input type="hidden" name="session_id" value="{{ $session->id }}"/>

     <tr><td><button type="submit" class="btn btn-block my-btn-submit">Update</button></td></tr>
    </table>
</div>
</form>
    </div>
</div>
</section><br/><br/><br/><br/>
 <!--Content End-->
@endsection



