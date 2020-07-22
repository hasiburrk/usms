@extends('admin.master')
@section('main-content')
    
 <!--Content Start-->
 <br>
 <section class="container">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">Header & Footer Edit Form</h4>
                </div>
            </div>
        <form method="POST" action="{{ route('header-and-footer-update') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">

           @csrf
            <div class="form-group col-12 mb-3">
                <label for="OwnerName" class="col-sm-3 col-form-label text-right">Page Title</label>
                <input id="OwnerName" type="text" class="col-sm-9 form-control @error('owner_name') is-invalid @enderror" name="owner_name" value="{{ $headerFooter->owner_name  }}" placeholder="Page Title" required autofocus>
                    @error('owner_name')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                    @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="ownerSubtitle" class="col-sm-3 col-form-label text-right">Page Subtitle</label>
                <input id="ownerSubtitle" type="text" class="col-sm-9 form-control @error('owner_subtitle') is-invalid @enderror" name="owner_subtitle" value="{{ $headerFooter->owner_subtitle }}" placeholder="Page Subtitle" required autofocus>
                    @error('owner_subtitle')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                    @enderror
            </div>
            
            <div class="form-group col-12 mb-3">
                <label for="mobile" class="col-sm-3 col-form-label text-right">Mobile</label>
                <input id="mobile" type="text" class="col-sm-9 form-control" name="mobile" value="{{ $headerFooter->mobile }}" placeholder="8801xxxxxxxxx" required>
            </div>

            <div class="form-group col-12 mb-3">
                <label for="address" class="col-sm-3 col-form-label text-right">Address</label>
                <input id="address" type="text" class="col-sm-9 form-control @error('address') is-invalid @enderror" name="address" value="{{ $headerFooter->address }}" placeholder="Address" required autofocus>
                @error('address')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                    @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="copyright" class="col-sm-3 col-form-label text-right">Copyright</label>
                <input id="copyright" type="text" class="col-sm-9 form-control @error('copyright') is-invalid @enderror" name="copyright" value="{{ $headerFooter->copyright }}" placeholder="copyright" required autofocus>
                @error('copyright')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                    @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label class="col-sm-3"></label>
                <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">Submit</button>
            </div>

            <input type="hidden" name="id" value="{{ $headerFooter->id }}" />
            </form>
        </div>
     </div>
  </section><br>
 <!--Content End-->
@endsection