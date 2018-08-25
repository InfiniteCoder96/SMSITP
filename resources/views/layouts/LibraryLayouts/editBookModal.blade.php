<div class="modal" id="editBookModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                <h5 class="card-title m-b-0">Edit The Book</h5>

            </div>
            <div class="modal-body bg-dark">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

@if($book != null)
                            <form class="form-horizontal" method="post" action="{{url('books')}}">

                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">

                                <div class="card-body bg-dark">
                                    <h4 class="card-title">Book Details</h4>
                                    <div class="form-group row">
                                        <label for="bookName" class="col-sm-3 text-right control-label col-form-label">Book Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bookName" name="bookname" value="{{$book->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isbn" class="col-sm-3 text-right control-label col-form-label">ISBN </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="isbn" name="isbn" value="{{$book->isbn}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author" class="col-sm-3 text-right control-label col-form-label">Author</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="author" name="authorname" value="{{$book->authorname}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="barcode" class="col-sm-3 text-right control-label col-form-label">Barcode</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="barcode" name="barcode" value="{{$book->barcode}}">
                                        </div>
                                    </div>


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
    @endif
                        </div>



                    </div>

                </div>


            </div>




        </div>

    </div>
</div>
</div>