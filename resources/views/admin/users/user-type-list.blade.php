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
                    <h4 class="text-center font-weight-bold font-italic mt-3">User Type List <br><br><button class="btn btn-outline-success text-bold " data-toggle="modal" data-target="#userTypeAddModal">Add New</button></h4>
                   
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>User Type</th>
                        <th>Status</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody id="userTypeTable">
                       @include('admin.users.user-type-table')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><br/>
<!--Content End-->

  <!-- Modal -->
  @include('admin.users.modal.modal')
  @include('admin.users.modal.edit-modal')

  <script>
   $('#userTypeInsert').submit(function(e){
       e.preventDefault();
       var url = $(this).attr('action');
       var data = $(this).serialize();
       var method = $(this).attr('method');
       $('#userTypeAddModal #reset').click();
       $('#userTypeAddModal').modal('hide');
       $.ajax({
           data : data,
           type : method,
           url : url,
           success:function(){
               $.get("{{ route('user-type-list') }}", function(data){
                   $('#userTypeTable').empty().html(data);

               })
           }
       })
   });

   function usertypeUnpublished(id){
    $.get("{{ route('user-type-unpublish') }}",{ type_id:id }, function(data){
     console.log(data);
     $('#userTypeTable').empty().html(data);
    });
 }
 function usertypePublished(id){
    $.get("{{ route('user-type-publish') }}",{ type_id:id }, function(data){
     console.log(data);
     $('#userTypeTable').empty().html(data);
    });
 }

 function usertypeEdit(id,name){
     $('#userTypeEditModal').find('#userTypeId').val(name);
     $('#userTypeEditModal').find('#TypeId').val(id);
     $('#userTypeEditModal').modal('show');
 }

 $('#userTypeUpdate').submit(function(e){
       e.preventDefault();
       var url = $(this).attr('action');
       var data = $(this).serialize();
       var method = $(this).attr('method');
       $('#userTypeEditModal #reset').click();
       $('#userTypeEditModal').modal('hide');
       $.ajax({
           data : data,
           type : method,
           url : url,
           success:function(data){
             $('#userTypeTable').empty().html(data);
           }
       })
   });

   function usertypeDelete(id){
       var msg = 'If you want to delete this item Press  OK';
       if(confirm(msg)){
        $.get("{{ route('user-type-delete') }}",{ type_id:id }, function(data){
        console.log(data);
       $('#userTypeTable').empty().html(data);
         });
       }
   }

  </script>

@endsection