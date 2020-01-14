<?php $__env->startSection('title', 'My Profile'); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/mainmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<div class="container">
    <div class="card-header">
        <div class="dropdown pull-right">
           <button id="sendEmail" value="<?php echo e($congvanden->id); ?>"  class="btn btn-success btn-sm"><i class="fa fa-plus "></i>&nbsp; &nbsp; Send Mail &nbsp; &nbsp;</button>
       </div>
        <span class="cat__core__title">
            <strong>Preview</strong>
        </span>
    </div>
    <div class=" row">
        <div class="col-xl-12">        
            <section class="card">
                <div class="card-body">
                    <dl class="row" style="font-size: 14px; font-family: arial;">
                        <dt class="col-xl-3">Loại công văn</dt>
                            <dd class="col-xl-9"><?php echo e($Loaicongvan->TenLoaiCV); ?></dd>

                        <dt class="col-xl-3">Năm</dt>
                        <dd class="col-xl-9"><?php echo e($namcv->Nam); ?></dd>
                        <dt class="col-xl-3">Số đến</dt>
                        <dd class="col-xl-9"><span class="badge badge-success"><?php echo e($congvanden->SoDen); ?></span></dd>
                        <dt class="col-xl-3">Số/Ký hiệu</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->KyHieu); ?></dd>
                        <dt class="col-xl-3">Ngày tháng đến	</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->NgayThang); ?></dd>

                        <dt class="col-xl-3">Ngày phát hành</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->NgayPhatHanh); ?></dd>

                        <dt class="col-xl-3">Nơi phát hành</dt>
                        <dd class="col-xl-9"><?php echo e($Noiphathanh->TenCoQuan); ?></dd>

                        <dt class="col-xl-3">Số lượng bản</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->SoLuong); ?></dd>

                        <dt class="col-xl-3">Thể loại công văn</dt>
                        <dd class="col-xl-9"><?php echo e($Theloaicongvan->TenTheLoai); ?></dd>

                        <dt class="col-xl-3">Lĩnh vực</dt>
                        <dd class="col-xl-9"><?php echo e($linhvuc->TenLinhVuc); ?></dd>

                        <dt class="col-xl-3">Độ khẩn</dt>
                        <dd class="col-xl-9"><?php echo e($dokhan->TenDoKhan); ?></dd>

                        <dt class="col-xl-3">Độ mật</dt>
                        <dd class="col-xl-9"><?php echo e($domat->TenDoMat); ?></dd>

                        <dt class="col-xl-3">Trích yếu nội dung</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->TrichYeu); ?></dd>

                        <dt class="col-xl-3">Nội dung Email</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->GhiChu); ?></dd>

                        
                        <?php $__currentLoopData = $Phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <dt class="col-xl-3">Phòng ban xử lý: </dt>
                             <!-- <option value="<?php echo e($pb->id); ?>"><?php echo e($pb->TenPhong); ?></option>   -->
                             <dd class="col-xl-9"><?php echo e($pb->TenPhong); ?>.</dd>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

                        <dt class="col-xl-3">Email khác</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->EmailAdd); ?></dd>

                        <dt class="col-xl-3">Email CC</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->EmailCC); ?></dd>

                        <dt class="col-xl-3">File đính kèm</dt>
                        <dd class="col-xl-9" > 
                            <a href="upload/file/<?php echo e($congvanden->DuongDan); ?>"><b style="color: blue;"><?php echo e($congvanden->DuongDan); ?></b></a>  
                        </dd>

                        <dt class="col-xl-3">Hạn xử lý</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->HanXuly); ?></dd>

                        <dt class="col-xl-3">Nơi lưu</dt>
                        <dd class="col-xl-9"><?php echo e($noiluu->TenNoiLuu); ?></dd>

                        <dt class="col-xl-3">Email Send</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->EmailSend); ?></dd>

                        <dt class="col-xl-3">Email send status</dt>
                        <dd class="col-xl-9"><?php echo e($congvanden->TinhTrang); ?></dd>
                    </dl>
                </div>
            </section>
            
        </div>
    </div>
</div>
<script>
    $('#id').delay(3000).fadeOut('fast');
</script>
<script type="text/javascript">
    $(document).ready(function() {      
            $("#sendEmail").click(function () {
            var url = 'http://alst.com.vn/qlvb/' + "Home/cvden_sendemail";
            var ddlsource = $(this).val();
            // alert(ddlsource);
            $.getJSON(url, { id: ddlsource }, function (data) {
                alert("Send email: " + data);
            })
        }) 
        // $("#sendEmail").click(function(){
        //     var idpb = $(this).val();
            //  alert(idpb);
            // $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
            //     //  alert(data);
            //     $("#idLoaiTin").html(data);
            // });
        // });
    });
</script>

<!-- START: page scripts -->
<script>

    $(function() {
		$("#m_section_name").html("Our Profile");
        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('.adjustable-textarea'));

        
    });
</script>
<!-- END: page scripts -->
<?php echo $__env->make('components/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
