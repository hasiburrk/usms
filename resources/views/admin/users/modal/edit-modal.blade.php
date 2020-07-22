<!--modal -->
<div class="modal fade bd-example-modal-lg" id="userTypeEditModal" tabindex="-1" role="dialog" aria-labelledby="userTypeEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userTypeEditModal">User Type Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <form action="{{ route('user-type-update') }}" method="POST" id="userTypeUpdate">
            @csrf
        <div class="modal-body">
            
            <div class="form-group row mb-0">
                <label for="userTypeName" class="col-form-label col-sm-3 text-right">Student Type</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('usertype_name') is-invalid @enderror" name="usertype_name"  id="userTypeId" placeholder="Write User Type here" required>
                    @error('usertype_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
              <input type="hidden" name="type_id" id="TypeId"/>

        </div>
        <div class="modal-footer">
          <button type="reset" class="d-none" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>