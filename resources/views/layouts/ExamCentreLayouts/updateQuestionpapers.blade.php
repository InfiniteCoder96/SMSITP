<div class="modal" id="updateQuestionPapersModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                <h5 class="card-title m-b-0">Update Question Papers</h5>

            </div>
            <div class="modal-body bg-dark">

                <form class="form-horizontal" action="#" method="get">

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Year and term</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                <option selected disabled>Year and term </option>
                                <option value="AK">G1T1</option>
                                <option value="AK">G1T2</option>
                                <option value="WA">G1T3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                                <option selected disabled>Subject</option>
                                <option value="AK">Mathematics</option>
                                <option value="AK">Science</option>
                                <option value="WA">English</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Upload Papers</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="cono1" required>
                        </div>
                    </div>


            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-outline-success">Save</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                </div>
            </div>



        </div>
         </form>
    </div>

</div>

