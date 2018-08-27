<div class="modal" id="updateResultsModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                <h5 class="card-title m-b-0">Update Results</h5>

            </div>
            <div class="modal-body bg-dark">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif

                <form  action="{{action('ResultController@update',$result['id'])}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id">
                    <div class="form-group row">
                        <label for="sId" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sId" name="sId" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examId" class="col-sm-3 text-right control-label col-form-label">Exam ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="examId" name="examId" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="subject" name="subject" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="marks" class="col-sm-3 text-right control-label col-form-label">Marks</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="marks"  name="marks" value="" required>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="modal-body">
                            <button type="submit" class="btn btn-outline-success">Save</button>
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
</div>