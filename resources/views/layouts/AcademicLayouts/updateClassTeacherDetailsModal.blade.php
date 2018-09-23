<div class="modal" id="updateClassTeacherDetailsModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                <h5 class="card-title m-b-0">Update Class Teachers</h5>

            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            <div class="modal-body bg-dark">

                <form class="form-horizontal" action="{{action('ClassTeacherController@update',$classTeacher['ClassID'])}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}

                    <input type="hidden" id="ClassID" name="ClassID" >

                    <div class="form-group row">
                        <label for="ClassID" class="col-sm-3 text-right control-label col-form-label">Class ID</label>
                        <div class="col-sm-9">
                            <input type="Text" class="form-control" id="ClassID" name="ClassID" value=" " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClassName" class="col-sm-3 text-right control-label col-form-label">Class Name</label>
                        <div class="col-sm-9">
                            <input type="Text" class="form-control" id="ClassName" name="ClassName" value=" " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ClassTeacher" class="col-sm-3 text-right control-label col-form-label">Class Teacher</label>
                        <div class="col-sm-9">
                            <input type="Text" class="form-control" id="ClassTeacher" name="ClassTeacher" value=" " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Subject" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <input type="Text" class="form-control" id="Subject" name="Subject"  required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NoOfStudents" class="col-sm-3 text-right control-label col-form-label">Number of Students </label>
                        <div class="col-sm-9">
                            <input type="Text" class="form-control" id="NoOfStudents" name="NoOfStudents" value=" " required>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="modal-body">
                            <button type="Submit" class="btn btn-outline-success">Update</button>
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                        </div>


                    </div>
                </form>
            </div>




        </div>

    </div>
</div>
</div>