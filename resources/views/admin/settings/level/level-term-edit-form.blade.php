@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
<section class="container">
    <div class="row content">
        <div class="col-md-8 offset-md-2 pl-0 pr-0">
            @include('admin.includes.alert')
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Level & Term Edit Form</h4>
            </div>
        </div>

<form action="{{ route('level-term-update') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">

        <tr>
            <td>
                <div class="form-group row mb-0">
                    <label for="levelName" class="col-form-label col-sm-3 text-right">level Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('level_name') is-invalid @enderror" name="level_name" value="{{ old('level_name') }}" id="levelName" placeholder="Write level Name here" required>
                        @error('level_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group row mb-0">
                    <label for="termName" class="col-form-label col-sm-3 text-right">Term Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('term_name') is-invalid @enderror" name="term_name" value="{{ old('term_name') }}" id="termName" placeholder="Write Term Name here" required>
                        @error('term_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </td>
        </tr>

<input type="hidden" name="levelterm_id" value="{{ $levelterm->id }}"/>

     <tr><td><button type="submit" class="btn btn-block my-btn-submit">Update</button></td></tr>
    </table>
</div>
</form>
    </div>
</div>
</section><br/><br/><br/><br/>
 <!--Content End-->
@endsection



