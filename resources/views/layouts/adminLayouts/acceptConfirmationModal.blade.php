<div class="modal fade " id="acceptConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="acceptConfirmationModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content bg-success text-white">

            <div class="modal-body ">
                <p>Are you sure you want to <strong>A C C E P T</strong> this admission request ?</p>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="{{url('students')}}" method="post">
                    {{csrf_field()}}
                    <input name="temp_sid" id="temp_sid" type="hidden" value="">
                    <button type="submit" class="btn btn-orange">Accept</button>
                </form>

            </div>
        </div>
    </div>
</div>