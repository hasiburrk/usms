@extends('admin.master')
@section('main-content')
<!--Content Start-->
<br/>
<section class="container-fluid">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            
            @include('admin.includes.alert')

            <div class="form-group">
                <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">{{ $students[0]->student_name }}'s Profile</h4>
                </div>
                <div class="row ml-0 mr-0">
                    <div class="col-md-3">
                        @if(isset($students[0]->student_photo))
                            <img src="{{ asset($students[0]->student_photo) }}" alt="Profile Picture">
                        @else
                           <img src="{{ asset('/admin/assets/images/avatar.png') }}" class="img-thumbnail" style="width: 100%" alt="Profile Picture" >
                         @endif
                         
                         <table class="table table-bordered">
                            <tr>
                                <td>
                                    <button data-toggle="modal" data-target="#studentBasicInfoUpdate" class="btn btn-block my-btn-submit">Update Profile</button>
                                </td>
                            </tr>
                         </table>
                    </div>
                    <div class="col-md-9">
                        @include('student.details.basic-info')
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><br/>
<!--Content End-->


{{-- modal --}}

@include('student.details.modal.basic-info-update')


@endsection