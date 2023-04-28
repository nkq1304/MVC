<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="text-success" style="padding-left: 10px;">
<<<<<<< HEAD:app/views/admin/modal_delete_task.php
                <i class="fas fa-trash me-3"></i>Are you sure you want to delete <span id="delete_id"></span>
=======
                <i class="fas fa-trash me-3"></i>Are you sure you want to delete
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/component/modal_delete_task.php
                <br><br><br><br><br>
            </h5>
            </div>
            <form method="POST">
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
<<<<<<< HEAD:app/views/admin/modal_delete_task.php
                <button type="button" class="btn btn-success" type="submit" name="delete_task" value="-1">Delete</button>
=======
                <button type="button" class="btn btn-success" data-dismiss="modal">Delete</button>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/component/modal_delete_task.php
            </div>
            </form>
        </div>
        </div>
</div>

<script>
<<<<<<< HEAD:app/views/admin/modal_delete_task.php
    
    $('[data-target="#confirm-delete-modal"]').click(function() {
=======
     $('[data-target="#confirm-delete-modal"]').click(function() {
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/component/modal_delete_task.php
        var target = $(this).data('target');
        $(target).modal('show');
    });
</script>