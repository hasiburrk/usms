@extends('admin.master')
@section('main-content')
<!--Content Start-->
<br>
<section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

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
                <h4 class="text-center font-weight-bold font-italic mt-3">{{ $user->name }}'s Profile</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="" class="table table-striped table-bordered dt-responsive nowrap text-center" style="">
                <tr><td colspan="2"><img src=" @if(isset($user->avatar)){{asset('/').$user->avatar}}@else {{ asset('/')}}/admin/assets/images/avatar.png @endif" alt=""></td></tr>
                    <tr> <th>Name</th><td>{{ $user->name }}</td></tr>
                    <tr> <th>Role</th><td>{{ $user->role }}</td></tr>
                    <tr> <th>Mobile</th><td>{{ $user->mobile }}</td></tr>
                    <tr> <th>Email</th><td>{{ $user->email }}</td></tr>
                    <tr> <th>Action</th>
                        <td>
                        <a href="{{ route('change-user-info',['id'=>$user->id])}}" class="btn btn-sm btn-dark">Change Info</a>
                            <a href="{{ route('change-user-avatar',['id'=>$user->id])}}" class="btn btn-sm btn-info">Change Photo</a>
                            <a href="{{ route('change-user-password',['id'=>$user->id])}}" class="btn btn-sm btn-danger">Change Password</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section><br>
<!--Content End-->
@endsection
