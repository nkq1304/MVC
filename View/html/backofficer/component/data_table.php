<div class="card">
    <div class="card-header">
        <span><i class="bi bi-table me-2"></i></span> Data Table
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="employee-table" class="table table-striped" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Role</th>
                        <th>Detail Tasks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Janitor</td>
                        <td>
                            <a href="UI_DetailsTask.php" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php require 'modal_edit_employee.php'; ?>
                            <?php require 'modal_delete_employee.php'; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Collector</td>
                        <td>
                            <a href="UI_DetailsTask.php" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php require 'modal_edit_employee.php'; ?>
                            <?php require 'modal_delete_employee.php'; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>MinhLee</td>
                        <td>Janitor</td>
                        <td>
                            <a href="UI_DetailsTask.php" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php require 'modal_edit_employee.php'; ?>
                            <?php require 'modal_delete_employee.php'; ?>
                        </td>
                    </tr> 
                    <tr>
                        <td>4</td>
                        <td>NguyenVanB</td>
                        <td>Janitor</td>
                        <td>
                            <a href="UI_DetailsTask.php" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php require 'modal_edit_employee.php'; ?>
                            <?php require 'modal_delete_employee.php'; ?>
                        </td>
                    </tr>   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Role</th>
                        <th>Detail Tasks</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            <?php require 'modal_add_employee.php'; ?>
        </div>
    </div>  
</div>