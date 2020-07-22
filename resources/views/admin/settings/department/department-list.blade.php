@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
<section class="container">
    <div class="row content">
        <div class="col-md-12 pl-0 pr-0">

            @include('admin.includes.alert')

        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3"> Faculty wise Department List</h4>
            </div>
        </div>
        <div class="table-responsive p-1">
            <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
               
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row mb-0">
                                <label for="facultyName" class="col-form-label col-sm-3 text-right">Faculty Name</label>
                                <div class="col-sm-9">
                                    <select name="faculty_id" class="form-control @error('faculty_id') is-invalid @enderror" id="facultyId" required autofocus>
                                        <option value="">--Select Faculty--</option>
                                        @foreach($faculties as $faculty)
                                    <option value="{{$faculty->id}}">{{ $faculty->faculty_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('faculty_id')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </table>
        </div>
        <div class="table-responsive">
           <table class="table table-bordered table-hover text-center" id="departmentList"></table>
        </div>

    </div>
</div>
</section><br/>
 <!--Content End-->
 <style>#overlay .loader{ display: none }</style>
 @include('admin.includes.loader')

<script>
 $('#facultyId').change(function(){
      var facultyId =$(this).val();
      if(facultyId){
         $('#overlay .loader').show();
         $.get("{{ route('department-list-by-ajax')}}",{ faculty_id:facultyId },function(data){
            $('#overlay .loader').hide();
             console.log(data);
             $('#departmentList').empty().html(data);
         })
      }
  });
 
</script>

@endsection



