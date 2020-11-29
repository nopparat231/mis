<div class="modal fade" id="modal-default_upf">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">อัพโหลดไฟล์</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="page/pa8_user_model_db.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group mb-6">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            กรุณาโหลดตัวอย่างข้อมูล เพื่อใช้ในการอัพโหลด
                              <a href="./uploads/template.xlsx" class="btn btn-success"><i class="fas fa-file-download" download ></i></a>
                        </div>
                      
                      
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="fileToUpload" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save changes</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>