<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
<div class="modal fade" id="confirm-add-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5>Add Task</h5>
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="date" style="font-weight: 500;">NGÀY ASSIGN TASK</label>
                        <input type="date" class="form-control mt-2" id="date" name="date" 
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="idvehicle" style="font-weight: 500;">Vehicle ID</label>
                            <input type="text" class="form-control mt-2" id="idvehicle" name="idvehicle" 
                                    placeholder="Enter ID Vehicle" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time" style="font-weight: 500;">GIỜ BẮT ĐẦU</label>
                            <input type="time" class="form-control mt-2" id="time" name="time" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time_end" style="font-weight: 500;">GIỜ KẾT THÚC</label>
                            <input type="time" class="form-control mt-2" id="time_end" name="time_end" required>
                        </div>
                    </div>
                </div> 
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="listMCP" style="font-weight: 500;">DANH SÁCH MCP</label>
                        <input class= "mt-2" style="font-weight: 500;" type="text" id="listMCP" name="listMCP" >
                        </div>
                    </div>
                </div>                                         
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
            <a href="#"><button type="button" class="btn btn-success" data-dismiss="modal">Add</button></a>
        </div>
    </div>
    </div>
</div>

<script>
$(document).ready(function() {
  $('#listMCP').selectize({
    plugins: ['remove_button'],
    delimiter: ',',
    create: true,
    options: [
      {value: 'q1', text: 'q1'},
      {value: 'Giá trị 2', text: 'Giá trị 2'},
      {value: 'Giá trị 3', text: 'Giá trị 3'},
      // Thêm các giá trị khác vào đây
    ],
    render: {
      item: function(item, escape) {
        return '<div>' + escape(item.value) + '</div>';
      },
      option: function(item, escape) {
        return '<div>' + escape(item.value) + '</div>';
      }
    }
  });
});

$('[data-target="#confirm-add-modal"]').click(function() {
    var target = $(this).data('target');
    $(target).modal('show');
});
</script>
