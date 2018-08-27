<div class="modal" id="updateAcademicStaffDetailsModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                    <h5 class="card-title m-b-0">Update Academic Staff Details</h5>

            </div>
            <div class="modal-body bg-dark">

                <form  action="{{action('recruitController@update',$recruit['id'])}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id">


                        <div class="form-group row">
                            <label for="rid" class="col-sm-3 text-right control-label col-form-label">User ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="rid" name="rid" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-sm-3 text-right control-label col-form-label">Category</label>
                            <div class="col-sm-9">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category" required>
                                    <option>Select</option>
                                        <option value="Teacher">Teacher</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_number" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </div>


            </div>

            </form>
                        </div>




            </div>

        </div>
    </div>
</div>