@extends('admin.master')
@section('main-content')

 <!--Content Start-->


 <br>
 <section class="container">
   @if(Session::has('message'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
   @endif
    <div class="row content registration-form">
        <div class="col-12 pl-0 pr-0">
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">User Registration Form</h4>
                </div>
            </div>
        <form method="POST" action="{{ route('user-save') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">
           @csrf

           <div class="form-group col-12 mb-3">
                    <label for="role" class="col-sm-3 col-form-label text-right">Role</label>

                        <select name="role" class="form-control col-sm-9 @error('role') is-invalid @enderror" id="role" required autofocus>
                            <option value="">--Select User Type--</option>
                            @foreach($usertypes as $usertype)
                        <option value="{{$usertype->usertype_name}}">{{ $usertype->usertype_name}}</option>
                            @endforeach
                        </select>
                        @error('role')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                </div>
                <div class="form-group col-12 mb-3" id="deptinfo">

                </div>

                <div class="form-group col-12 mb-3">
                    <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
                    <input id="name" type="text" class="col-sm-9 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                     @error('name')
                     <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                      @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="mobile" class="col-sm-3 col-form-label text-right">Mobile</label>
                    <input id="mobile" type="text" class="col-sm-9 form-control" name="mobile" value="" placeholder="8801xxxxxxxxx" required>
                </div>


                <div class="form-group col-12 mb-3">
                    <label for="email" class="col-sm-3 col-form-label text-right">E-Mail Address</label>
                    <input id="email" type="email" class="col-sm-9 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                    @error('email')
                     <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                      @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
                    <input id="password" type="password" class="col-sm-9 form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" required autofocus>
                    @error('password')
                     <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                      @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="password-confirm" class="col-sm-3 col-form-label text-right">Confirm Password</label>
                    <input id="password-confirm" type="password" class="col-sm-9 form-control  @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autofocus>
                    @error('password')
                     <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                      @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label class="col-sm-3"></label>
                    <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">Submit</button>
                </div>
            </form>
        </div>
     </div>
  </section><br>
 <!--Content End-->
 <style>#overlay .loader{ display: none }</style>
 @include('admin.includes.loader')

 <script>
    $("#role").change(function() {
        var role = $(this).val();
        console.log(role);
        if(role=='Chairman'||role=='Teacher'){
            $('#overlay .loader').show();
            $.get("{{ route('bring-department') }}", {role:role}, function(data){
                $('#overlay .loader').hide();
                console.log(data);
                $("#deptinfo").empty().html(data);
            })
        }else{
         $("#deptinfo").empty();

      }
    });
    </script>
@endsection
