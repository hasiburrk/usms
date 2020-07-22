<div class="modal fade bd-example-modal-lg" id="userTypeAddModal" tabindex="-1" role="dialog" aria-labelledby="userTypeAddModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add New User Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('user-type-add') }}" method="POST" id="userTypeInsert">
            @csrf
        <div class="modal-body">
            
          <div class="form-group row mb-0">
            <label for="userTypeName" class="col-form-label col-sm-3 text-right">User Type Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('usertype_name') is-invalid @enderror" name="usertype_name" value="{{ old('usertype_name') }}" id="userTypeId" placeholder="Write user Type here" required>
                @error('usertype_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>


        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-warning" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>