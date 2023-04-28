<?php 
    if (isset($_POST['detail_Task'])){
        $data['detail_Task'] = $_POST['detail_Task'];
    }
    elseif (isset($_POST['add_task'])){
        $data['detail_Task'] = $_POST['add_task'];
    }
    foreach($data['allUser'] as $user_de){
        if ($user_de['id'] == $data['detail_Task']){
        $cur_em = $user_de;
        
        break;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết công việc</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" >
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

    <style>
      .calendar {
          max-width: 500px;
          margin: 0 auto;
      }

      .calendar th,
      .calendar td {
          text-align: center;
          padding: 10px;
      }

      .calendar .header {
          background-color: #007bff;
          color: #fff;
      }

      .calendar .days td:hover {
          background-color: #007bff;
          color: #fff;
          cursor: pointer;
      }

      .calendar .today {
          background-color: #007bff;
          color: #fff;
      }

      .calendar .selected {
          background-color: #28a745;
          color: #fff;
      }
    </style>
</head>
<body>
  <div class="p-4">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h2>Task Details</h2>
          </div>
          <div class="col-md-6 mt-4 d-flex justify-content-end">
              <div class="row">
                  <div class="col-md-12">
                      <button class="btn btn-success btn-detail" data-target="#confirm-add-modal">Add Task</button>
                      <a href=".."><button class="btn btn-success btn-detail">Go Back</button></a>
                      <?php require 'modal_add_task.php'; ?>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-5 pt-3" style="border: 1px solid #dfdddd;">
            <h4>Staff info</h4>
            <div style="margin-left: 2em;">
                <table class="table">
                    <thead class="text-muted">
                      <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?=$cur_em['id']?></td>
                        <td><?=$cur_em['type']?></td>
                        <td><?=$cur_em['name']?></td>
                        <td><?=$cur_em['phone']?></td>
                        <td><?=$cur_em['email']?></td>
                      </tr>
                    </tbody>
                </table> 
            </div>       
            <h4>List task</h4>
            <div style="margin-left: 2em;">
                <table class="table">
                    <thead class="text-muted">
                      <tr>
                        <th>ID</th>
                        <th>Assign Date</th>
                        <th>State Task</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $event_task = [];
                            foreach($data['allTask'] as $task){
                                if ($task['Staff_ID'] == $data['detail_Task']){
                                    $event_task[] = $task;
                                    ?>
                                    <tr>
                                        <td><?php echo $task['ID']?></td>
                                        <td><?php echo $task['Assign_Date']?></td>
                                        <td><?php 
                                            if ($task['Status'] == "Completed")
                                                echo "<span class=\"badge text-bg-success\">Completed</span>";
                                            elseif ($task['Status'] == "Pending")
                                                echo "<span class=\"badge text-bg-warning\">Pending</span>";
                                            else
                                                echo "<span class=\"badge text-bg-primary\">Confirmed</span>";

                                        ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-secondary" onclick="view_task(<?=$task['ID']?>)" data-target="#view-task-modal">View</button>          
                                            <button class="btn btn-sm btn-primary" data-target="#confirm-edit-modal">Modify</button>
                                            <button class="btn btn-sm btn-danger" onclick="delete_task(<?=$task['ID']?>)" data-target="#confirm-delete-modal">Delete</button>
                                            <?php require 'modal_edit_task.php'; ?>
                                            <?php require 'modal_delete_task.php'; ?>
                                            <?php require 'modal_view_task.php'; ?>
                                
                                        </td>
                                    </tr>
                                <?php
                                }
                            }
                        ?>
                            
                    </tbody>
                </table> 
            </div>  
        </div>
        <div class="col-md-7">
          <div id="calendar"></div>
        </div>
      </div>
  </div>

<script>
    $(document).ready(function () {
        event_task = <?php echo json_encode($event_task)?>;
        event_task2 = [];
        for (i = 0; i < event_task.length; i++){
            temp_ev = [{   
                    title:event_task[i]['MCP_List'], 
                    start:event_task[i]['Assign_Date'] + "T" + event_task[i]['Start'].substring(0,8), 
                    end:event_task[i]['Assign_Date'] + "T" + event_task[i]['End'].substring(0,8),
                    color:'red'
                }];
            event_task2 = event_task2.concat(temp_ev);
        }
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultView: 'month',
            selectable: true,
            events: event_task2
            // [{
            //         title: 'Làng ĐH, Quận 1',
            //         start: '2023-04-12T10:00:00',
            //         end: '2023-04-12T11:30:00',
            //         color: 'purple'
            //     },
            //     {
            //         title: 'Ngã 4 Thủ Đức',
            //         start: '2023-04-12T12:00:00',
            //         end: '2023-04-12T14:30:00',
            //         color: 'purple'
            //     },
            //     {
            //         title: 'DH Bách Khoa',
            //         start: '2023-04-14T14:30:00',
            //         end: '2023-04-14T16:00:00',
            //         color: 'green'
            //     }
            //     ]
            ,
            eventClick: function (event) {
                alert('List MCP: ' + event.title + '\nStart: ' + moment(event.start).format('YYYY-MM-DD HH:mm') + '\nEnd: ' + moment(event.end).format('YYYY-MM-DD HH:mm'));
            },
        });
    });
    $('[data-target="#view-task-modal"]').click(function() {
        var target = $(this).data('target');
        $(target).modal('show');
    });
  </script>

</body>
</html>
