<<<<<<< HEAD:app/views/admin/modal_delete_employee.php
=======
<button class="btn btn-sm btn-danger" data-target="#confirm-delete-modal">Delete</button>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/component/modal_delete_employee.php
<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5>Xác nhận xóa</h5>
            </div>
            <div class="modal-body">
<<<<<<< HEAD:app/views/admin/modal_delete_employee.php
            Bạn có chắc chắn muốn xóa thông tin nhân viên? </br>
            <p> ID: <span id="tester"></span></p>
=======
            Bạn có chắc chắn muốn xóa thông tin nhân viên?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal">Xóa</button></a>
>>>>>>> 73fffb0de1bf3d19b8cb2728c1486e42db128551:View/html/backofficer/component/modal_delete_employee.php
            </div>
            <form method="POST">
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-danger" id="btn_del_employee" name="btn_del_employee" value="0">Xóa</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function del_par(id){
        document.getElementById("tester").innerText = id;
        document.getElementById("btn_del_employee").value = id;
    }
</script>