<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">You are going to delete this.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary footer-close" type="button" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();">Delete</a>

                <form id="delete-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
