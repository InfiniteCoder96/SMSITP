{{--<div class="modal" id="updateSubjectTeacherDetailsModal" >--}}
    {{--<div class="modal-dialog modal-sm" >--}}
        {{--<div class="modal-content bg-dark text-white">--}}
            {{--<div class="modal-header bg-cyan">--}}

                {{--<h5 class="card-title m-b-0">Update Subject Teachers</h5>--}}

            {{--</div>--}}

            {{--@if ($errors->any())--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="modal-body bg-dark">--}}

                {{--<form action="{{action('SubjectTeacherController@update',$subjectTeacher['SubjectID'])}}" method="post">--}}
                    {{--{{method_field('patch')}}--}}
                    {{--{{csrf_field()}}--}}
                    {{--<input type="hidden" id="SubjectID" name="SubjectID" >--}}
                    {{--<div class="card-body" >--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="SubjectID" class="col-sm-3 text-right control-label col-form-label">Subject ID</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<input type="Text" class="form-control" name="SubjectID" id="SubjectID" value=" " required>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="SubjectName" class="col-sm-3 text-right control-label col-form-label">Subject Name</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<input type="Text" class="form-control" name="SubjectName" id="SubjectName" value=" " required>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="SubjectTeacherName" class="col-sm-3 text-right control-label col-form-label">Subject Teacher's Name</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<input type="Text" class="form-control" name="SubjectTeacherName" id="SubjectTeacherName" value=" " required>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="Range" class="col-sm-3 text-right control-label col-form-label">Range</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<select class="select2 form-control custom-select" id="Range" name="Range" value=" " style="width: 100%; height:36px;" required>--}}
                                    {{--<option selected disabled>Select Range</option>--}}
                                    {{--<option value="1-5">1-5</option>--}}
                                    {{--<option value="6-11">6-11</option>--}}
                                    {{--<option value="12,13">12,13</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="border-top">--}}
                            {{--<div class="modal-body">--}}
                                {{--<button type="Submit" class="btn btn-outline-success">Update</button>--}}
                                {{--<button type="reset" class="btn btn-outline-warning">Reset</button>--}}
                            {{--</div>--}}


                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}




        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
{{--</div>--}}