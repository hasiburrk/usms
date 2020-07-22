@extends('admin.master')

@section('main-content')
    <!--Content Start-->
<section class="container-fluid">
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
            <h4 class="text-center font-weight-bold font-italic mt-3">Slide Edit Form</h4>
        </div>
    </div>

    <form action="{{ route('update-slide') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="table-responsive p-1">
                <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                <tr><td><img src="{{ asset('/' )}}{{ $slide->silde_image }}" alt="" id="slide_show" style="max-height: 244px"></td></tr>
            <tr>
                <td>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="silde_image" id="slideImage" onchange="showImage(this, 'slide_show')" >
                            <label class="custom-file-label" for="inputGroupFile02" id="fileLabel">Choose file</label>
                        </div>
                    </div>
                    @error('silde_image')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </td>
            </tr>

            <tr>
                <td>
                    <div class="form-group row mb-0">
                        <label for="slideTitle" class="col-form-label col-sm-3 text-right">Slide Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('silde_title') is-invalid @enderror" name="silde_title" value="{{ $slide->silde_title }}" id="slideTitle" placeholder="Write slide title here" required>
                            @error('silde_title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="form-group row mb-0">
                        <label class="col-form-label col-sm-3 text-right" for="slideDescription">Slide Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('silde_description') is-invalid @enderror" name="silde_description" id="slideDescription" placeholder="Write slide description here" value="{{ $slide->silde_description }}" required>
                            @error('silde_description')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="form-group row mb-0">
                        <label for="description" class="col-form-label col-sm-3 text-right" for="title">Publication Status</label>
                        <div class="col-sm-9 text-left">
                            <div class="form-check col-form-label">
                            <input class="form-check-input" type="radio" name="status" value="1" {{ $slide->status == 1 ?'checked' : '' }}>
                                <label class="form-check-label">Published</label>
                            </div>
                            <div class="form-check col-form-label">
                                <input class="form-check-input" type="radio" name="status" value="2" {{ $slide->status == 2 ?'checked' : '' }}>
                                <label class="form-check-label">Unpublished</label>
                            </div>
                            @error('publication_status')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </td>
            </tr>

            <input type="hidden" name="slide_id" value="{{ $slide->id }}" />

                <tr><td><button type="submit" class="btn btn-block my-btn-submit">Update</button></td></tr>
                </table>
            </div>
        </form>
            </div>
        </div>
    </section>
    <!--Content End-->
@endsection



