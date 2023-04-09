<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI BackOfficer</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="<?= ROOT?>/assets/css/backofficer/UI_BackOfficer.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT?>/assets/css/backofficer/Style_EmployeeTable.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="d-flex" style="height: 100%;">
        <div class="col1 p-3" style="background-color: #d9e6ff;">
            <h4 class="mt-3 text-center" style="height: 20%;">TASK MANAGEMENT<br></h4>
            <ul class="list-group">
                <li class="list-group-item "><i class="bi bi-list-task me-2"></i>Over view</li>
                <li class="list-group-item actived"><i class="bi bi-columns me-2"></i>Dashboard</li>
                <li class="list-group-item "><i class="bi bi-calendar-event me-2"></i>Calendar</li>
            </ul>           
        </div>
        <div class="col2 p-4">
            <div class="row">
                <div class="col-md-4">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search in dashboard"
                                    style="border-radius: 20px 0 0 20px;background-color: #f5f5f5;">
                            <button class="btn border btn-outline-secondary" type="button"
                            style="border-radius: 0 20px 20px 0;background-color: #f5f5f5;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="align-items-center d-flex justify-content-end">
                        <i class="fas fa-bell me-4"></i>
                        <div class="inline-block me-4">
                            <div style="font-weight: 500;">Harry Maguire</div>
                            <div>Back Officer</div>
                        </div>
                        <img src="<?= ROOT?>/assets/images/avt_user.jpg" alt="Avatar" class="avatar">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mt-4">
                    <h2>Dashboard</h2>
                </div>
                <div class="col-md-6 mt-4 d-flex justify-content-end">
                    <a href="UI_AddTask.html"><div class="btn btn-primary" id="btn-add-task">
                        <i class="fas fa-plus-square me-2"></i>Add Task
                    </div></a>
                </div>
            </div>
            <hr>
            <div class="row">
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
                                        <th>Vehicle ID</th>
                                        <th>Route (MPCs)</th>
                                        <th>Date Assign</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>Driver</td>
                                        <td>ABC 123</td>
                                        <td>Route A - B - C</td>
                                        <td>2023-03-01</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <a href="UI_DetailsTask.html">view...</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>Driver</td>
                                        <td>DEF 456</td>
                                        <td>Route D - E - F</td>
                                        <td>2023-03-02</td>
                                        <td><span class="badge bg-primary">In Progress</span></td>
                                        <td>
                                            <a href="UI_DetailsTask.html">view...</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Bob Johnson</td>
                                        <td>Assistant</td>
                                        <td>GHI 789</td>
                                        <td>Route G - H - I</td>
                                        <td>2023-03-03</td>
                                        <td><span class="badge bg-danger">Pending</span></td>
                                        <td>
                                            <a href="UI_DetailsTask.html">view...</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Staff Name</th>
                                        <th>Role</th>
                                        <th>Vehicle ID</th>
                                        <th>Route (MPCs)</th>
                                        <th>Date Assign</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>  
                </div>            
            </div>
        </div>
    </div>
    <script src="<?= ROOT?>/assets/scripts/employee_table.js"></script>
</body>
</html>