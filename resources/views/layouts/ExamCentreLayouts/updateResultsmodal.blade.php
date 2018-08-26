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

                <form class="form-horizontal"  method="post" action="{{--action('ResultController@update',$sId)--}}">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="sId" class="col-sm-3 text-right control-label col-form-label">Student ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sId" name="sId" value="{{--$result->sId--}}" placeholder="Student ID Here" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examId" class="col-sm-3 text-right control-label col-form-label">Exam ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="examId" name="examId" value="{{--$result->examId--}}" placeholder="Exam ID Here" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="subject" name="subject" value="{{--$result->subject--}}" placeholder="Subject Here" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="marks" class="col-sm-3 text-right control-label col-form-label">Marks</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="marks"  name="marks" value="{{--$result->marks--}}" placeholder="Marks Here" required>
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