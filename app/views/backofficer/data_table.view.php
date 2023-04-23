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
                        <th>Date Assign</th>
                        <th>Status</th>
                        <th>Detail Tasks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Janitor</td>
                        <td>2023-03-01</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <a href="<?php require ('../backofficer/detailTask.view.php') ?>" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php require ('../backofficer/modal_edit_employee.view.php'); ?>
                            <?php require ('../backofficer/modal_delete_employee.view.php'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Collector</td>
                        <td>N/A</td>
                        <td><span class="badge bg-secondary">N/A</span></td>
                        <td>
                            <a href="UI_DetailsTask.php" class="ms-5">...</a>
                        </td>
                        <td>
                            <?php require ('../backofficer/modal_edit_employee.view.php'); ?>
                            <?php require ('../backofficer/modal_delete_employee.view.php'); ?>
                        </td>
                    </tr>   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Role</th>
                        <th>Date Assign</th>
                        <th>Status</th>
                        <th>Detail Tasks</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            <?php require ('../backofficer/modal_add_employee.view.php'); ?>
        </div>
    </div>  
</div>