<button class="btn btn-sm btn-dark" data-target="#confirm-edit-modal">Sửa</button>
<div class="modal fade" id="confirm-edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Chỉnh sửa thông tin nhân viên</h5>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ID" style="font-weight: 500;">MÃ NHÂN VIÊN</label>
                                <input type="number" class="form-control mt-2" id="ID" name="ID" 
                                    placeholder="Enter ID" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" style="font-weight: 500;">TÊN</label>
                                <input type="text" class="form-control mt-2" id="name" name="name" 
                                    placeholder="Enter name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="CMND" style="font-weight: 500;">CMND</label>
                                <input type="text" class="form-control mt-2" id="CMND" name="CMND" 
                                    placeholder="Enter CMND" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" style="font-weight: 500;">EMAIL</label>
                                    <input type="email" class="form-control mt-2" id="email" name="email" 
                                        placeholder="Enter email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" style="font-weight: 500;">SỐ ĐIỆN THOẠI</label>
                                <input type="tel" class="form-control mt-2" id="phone" name="phone" 
                                    placeholder="Enter phone number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" style="font-weight: 500;">MẬT KHẨU</label>
                                    <input type="password" class="form-control mt-2" id="password" name="password" 
                                        placeholder="Enter password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address" style="font-weight: 500;">ĐỊA CHỈ</label>
                                    <input type="text" class="form-control mt-2" id="address" name="address" 
                                        placeholder="Enter address" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender" style="font-weight: 500;">GIỚI TÍNH</label><br>
                                <div class="form-check-inline mt-1">
                                    <label>
                                        <input type="radio" class="form-check-input" name="gender" value="male" required>Nam
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label>
                                        <input type="radio" class="form-check-input" name="gender" value="female" required>Nữ
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                <a href="#"><button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button></a>
            </div>
        </div>
    </div>
</div>