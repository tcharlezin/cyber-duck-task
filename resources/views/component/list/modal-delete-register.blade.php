<div class="modal modal-default fade" id="modalConfirmDestroy" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">{{__("Warning!")}}</h4>
            </div>

            <div class="modal-body">
                <div class="media">
                    <div class="media-left pad-rgt">
                        <button class="btn btn-icon btn-circle">
                            <i class="fa fa-trash fa-2x"></i>
                        </button>
                    </div>
                    <div class="media-body pad-lft">
                        <p class="text-semibold text-main">{{__("Are you sure that you want to delete this record?")}}</p>
                        {{__("The operation is not reversible.")}}
                    </div>
                </div>
                <input type="hidden" id="idModelDestroy" value="">
            </div>

            <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">{{__("Cancel")}}</button>
                <button class="btn btn-danger pull-right" id="confirmDestroy">{{__("Confirm destroy")}}</button>
            </div>
        </div>
    </div>

</div>

@push("scripts")
<script>

    function SetModelToDestroy(idModelDestroy) {
        $("#idModelDestroy").val(idModelDestroy);
    }

    $(function () {
        $('#confirmDestroy').click(function () {
            var idModelDestroy = $("#idModelDestroy").val();
            $('#formDestroyRegister' + idModelDestroy).submit();
        });
    });

</script>
@endpush