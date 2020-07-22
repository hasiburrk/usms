@extends('admin.master')

@section('main-content')<br/><br/>
    <!--Content Start-->
 <section class="container">
    <div class="row content">
        <div class="col-md-12 pl-0 pr-0">

            @include('admin.includes.alert')
            
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Course List</h4>
            </div>
        </div>

    <form action="{{ route('course-save') }}" method="post" enctype="multipart/form-data">
 @csrf
 <div class="table-responsive p-1">
    <table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
       
    <tr>
        <td>
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
        </td>
    </tr>

    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="departmentName" class="col-form-label col-sm-3 text-right">Department Name</label>
                <div class="col-sm-9">
                    <select name="department_id" class="form-control @error('department_id') is-invalid @enderror" id="departmentId" required autofocus>
                        <option value="">--Select Department--</option>
                        
                    </select>
                    @error('department_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div class="form-group row mb-0">
                <label for="levelTermName" class="col-form-label col-sm-3 text-right">Year & Semester</label>
                <div class="col-sm-9">
                    <select name="levelterm_id" class="form-control @error('levelterm_id') is-invalid @enderror" id="levelTermId" required autofocus>
                        <option value="">-- Select Year & Semester --</option>
                        @foreach($levelTerms as $levelTerm)
                         <option value="{{$levelTerm->id}}">{{ $levelTerm->level_name}} Year {{ $levelTerm->term_name}} Semester</option>
                        @endforeach
                    </select>
                    @error('levelterm_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
         </td>
      </tr>
    </table>
 </div>
 <div class="table-responsive">
    <table class="table table-bordered table-hover text-center" id="courseList"></table>
 </div>
 </form>
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
           $.get("{{ route('faculty-wise-department')}}",{ faculty_id:facultyId },function(data){
              $('#overlay .loader').hide();
               console.log(data);
               $('#departmentId').empty().html(data);
           });
        }else{
          $('#departmentId').empty().html('--Select Department--');
        }
    });

    $("#levelTermId").change(function() { 
    var levelTermId = $(this).val();
    var facultyId = $('#facultyId').val();
    var departmentId = $('#departmentId').val();
    if(facultyId && departmentId && levelTermId){
        $('#overlay .loader').show();
        $.get("{{ route('course-list-by-ajax') }}", {
            faculty_id:facultyId,
            department_id:departmentId,
            levelterm_id:levelTermId,
        }, function(data){
            $('#overlay .loader').hide();
            console.log(data);
            $("#courseList").html(data);
      })
      }else{
        $("#courseList").empty();
      }

    })


  </script>

@endsection

