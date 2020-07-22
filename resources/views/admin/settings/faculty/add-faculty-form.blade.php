@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
<section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">

            @include('admin.includes.alert')

        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Faculty Add Form</h4>
            </div>
        </div>

<form action="{{ route('faculty-save') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
       
    

    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="facultyName" class="col-form-label col-sm-3 text-right">Faculty Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('faculty_name') is-invalid @enderror" name="faculty_name" value="{{ old('faculty_name') }}" id="facultyName" placeholder="Write Faculty Name here" required>
                    @error('faculty_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>

     <tr><td><button type="submit" class="btn btn-block my-btn-submit">Save</button></td></tr>
    </table>
</div>
</form>
    </div>
</div>
</section><br/><br/><br/><br/>
 <!--Content End-->
@endsection



