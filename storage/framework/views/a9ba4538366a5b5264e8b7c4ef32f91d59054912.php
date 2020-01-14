<?php $__env->startSection('title', 'Add Pages'); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/mainmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
   <div class="card-header">
        <span class="cat__core__title">
            <strong>Sửa công văn</strong>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			<?php endif; ?>
            <div class="col-lg-12">
             <form action="<?php echo e($congvanden->id); ?>" method="POST" enctype="multipart/form-data">    
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">               
				<div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Loại công văn</label>
                                <select class="form-control" id="idLoaicongvan" name="Loaicongvan">                               
                                    <!-- <option value="">select</option>                                                        -->
                                    <?php $__currentLoopData = $Loaicongvan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lcv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lcv->id); ?>"><?php echo e($lcv->TenLoaiCV); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Năm: </label>
                            <select class="form-control" id="idNam" name="nam">                               
                                <?php $__currentLoopData = $namcv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ncv->Nam); ?>"><?php echo e($ncv->Nam); ?></option>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Nơi phát hành: </label>
                            <select class="form-control" id="idNoiPhathanh" name="NoiPhathanh">                               
                                <?php $__currentLoopData = $Noiphathanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($nph->id); ?>"><?php echo e($nph->TenCoQuan); ?></option>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                      
                            </select>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="validation-pagename">Số đến <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagename" value="<?php echo e($congvanden->SoDen); ?>" class="form-control"  placeholder="Số công văn đến"   name="Soden"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Số Ký hiệu <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" value="<?php echo e($congvanden->KyHieu); ?>" class="form-control"  placeholder="Số ký hiệu"   name="Sokyhieu"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Số lượng <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" value="<?php echo e($congvanden->SoLuong); ?>" class="form-control"  placeholder="Số lượng"   name="Soluong"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div> 
                                      
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="validation-pagename">Ngày tháng đến <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagename" value="<?php echo e($congvanden->NgayThang); ?>" class="form-control"  placeholder="Số công văn đến"   name="Ngayden"  type="date" data-validation="[NOTEMPTY]" data-validation-message="Page Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Ngày phát hành <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" value="<?php echo e($congvanden->NgayPhatHanh); ?>" class="form-control"  placeholder="Số ký hiệu"   name="Ngayphathanh"  type="date" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Thể loại công văn</label>
                                <select class="form-control" id="idTheLoaicongvan" name="TheLoaicongvan">                               
                                    <?php $__currentLoopData = $Theloaicongvan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tl->id); ?>"><?php echo e($tl->TenTheLoai); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label>Lĩnh vực: </label>
                                <select class="form-control" id="idLinhvuc" name="Linhvuc">                               
                                    <?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lv->id); ?>"><?php echo e($lv->TenLinhVuc); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Độ mật: </label>
                                <select class="form-control" id="idDomat" name="Domat">                               
                                    <?php $__currentLoopData = $domat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dm->id); ?>"><?php echo e($dm->TenDoMat); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Độ khẩn: </label>
                                <select class="form-control" id="idDokhan" name="Dokhan">                               
                                    <?php $__currentLoopData = $dokhan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dk->id); ?>"><?php echo e($dk->TenDoKhan); ?></option>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                                </select>
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <label class="form-control-label">Trích yếu nội dung</label>
                    <textarea class="form-control" rows="3" id="l15" name="Trichyeunoidung"  placeholder="Trích yếu nội dung"><?php echo e($congvanden->TrichYeu); ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Nội dung Email</label>
                    <textarea class="summernote" rows="3" id="idNoidungemail" name="Noidungemail" placeholder="Nội dung email"><?php echo e($congvanden->GhiChu); ?></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-metatitle">Email khác <span style="color:red; font-weight:900; font-size:20px;"></span></label>
                            <input  class="form-control"  placeholder="Emailkhac"   name="Emailkhac" value="<?php echo e($congvanden->EmailAdd); ?>" type="text" >
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                            <label for="validation-metatitle" style="margin-top:9px;">Email CC</label>
                            <input class="form-control"  placeholder="EmailCC"  value="<?php echo e($congvanden->EmailCC); ?>" name="EmailCC"  type="text" >
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Thời hạn xử lý <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" value="<?php echo e($congvanden->HanXuLy); ?>" class="form-control"  placeholder="Số ký hiệu"   name="Hanxuly"  type="date" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Phòng xử lý: </label>
                        <select class="form-control selectpicker" id="idPhongbanxuly"  name="Phongbanxuly[]" multiple data-live-search="true">
                            <?php $__currentLoopData = $phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($pb->TenPhong); ?>"><?php echo e($pb->TenPhong); ?></option>  
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label>Nơi lưu: </label>
                            <select class="form-control " id="idNoiluu" name="Noiluu" >                               
                                <?php $__currentLoopData = $noiluu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $luucv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($luucv->id); ?>"><?php echo e($luucv->TenNoiLuu); ?></option>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group"> 
                            <label>File đính kèm</label>
                            <input type="file" class="form-control" name="Hinh"></input>
                        </div>
                    </div>

               </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="<?php echo e(url('pages')); ?>"  class="btn btn-default">Cancel</a>
                </div>
             </form>
            </div>
 
        </div>
    </div>
</section>
<!-- END: ecommerce/product-edit -->
<!-- START: page scripts -->
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
        $('select').selectpicker();
        $("#idPhongbanxuly").change(function(){
            var idpb = $(this).val();
            //  alert(idpb);
            // $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
            //     //  alert(data);
            //     $("#idLoaiTin").html(data);
            // });
        });
    });
</script>

<script>
    $(function() {
        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

       
    });
</script>
<!-- END: page scripts -->
<?php echo $__env->make('components/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
