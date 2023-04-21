<div class="card">
    <div class="card-header">
        <span><i class="bi bi-table me-2"></i></span> Bảng thông tin chung
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="employee-table" class="table table-striped" >
                <thead>
                    <tr>
                        <th>Mã số</th>
                        <th>Họ tên</th>
                        <th>Vai trò</th>
                        <th>Ngày giao việc</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết công việc</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Janitor</td>
                        <td>2023-03-01</td>
                        <td><span class="badge bg-success">Hoàn thành</span></td>
                        <td>
                            <a href="<?=ROOT?>/admin/detailTask" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php include 'modal_edit_employee.php'; ?>
                            <?php include 'modal_delete_employee.php'; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Collector</td>
                        <td>N/A</td>
                        <td><span class="badge bg-secondary">N/A</span></td>
                        <td>
                            <a href="<?=ROOT?>/admin/detailTask" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php include 'modal_edit_employee.php'; ?>
                            <?php include 'modal_delete_employee.php'; ?>
                        </td>
                    </tr>   
                </tbody>
            </table>
            <?php include 'modal_add_employee.php'; ?>
        </div>
    </div>  
</div>