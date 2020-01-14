<?php $__env->startSection('title', 'Manage Pages'); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/mainmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="cat__content">

<!-- START: ecommerce/Pages-list -->
<section class="card">
    <div class="card-header">
        <div class="dropdown pull-right">
           <a href="pages/congvanden/them" class="btn btn-success btn-sm"><i class="fa fa-plus "></i>&nbsp; &nbsp; Add &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Pages List</strong>
        </span>
    </div>
	
	
	<div class="card-body">
		 <?php if($thongbao = Session::get('error')): ?>
			<div class="alert alert-danger" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Oh snap! </strong> <?php echo e($thongbao); ?>

            </div>
		<?php endif; ?>
		 <?php if($thongbao = Session::get('thongbao')): ?>
			<div class="alert alert-success" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Well done! </strong> <?php echo e($thongbao); ?> !
            </div>
        <?php endif; ?>
        <!-- <?php if(session('thongbao')): ?>
            <div class="alert alert-success"><?php echo e(session('thongbao')); ?></div>
        <?php endif; ?> -->
        <table class="table table-hover nowrap" style="word-wrap: inherit;" id="example1" width="100%">
            <thead class="thead-default">
            <tr >
                <th>ID</th>
                <th>Số/Ký hiệu</th>
                <th>Ngày phát hành</th>
                <th>Trích yếu nội dung</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
			<?php $__currentLoopData = $Pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($page->id); ?></td>
                <td><?php echo e($page->KyHieu); ?></td>
                <td><?php echo e($page->NgayPhatHanh); ?></td>
                <td><?php echo e($page->TrichYeu); ?></td>
               <td style="width:250px;">
                    
                     <!-- <a href=""><i class="fa fa-eye"></i> View</a> -->
                     <a href="pages/congvanden/preview/<?php echo e($page->id); ?>/<?php echo e($page->idLoaiCV); ?>/<?php echo e($page->NamCV); ?>/<?php echo e($page->idNoiPhatHanh); ?>/<?php echo e($page->idTheLoaiCV); ?>/<?php echo e($page->idLinhVuc); ?>/<?php echo e($page->idDoKhan); ?>/<?php echo e($page->idDoMat); ?>/<?php echo e($page->idNoiLuu); ?>" class="btn btn-primary btn-sm" ><i class="fa fa-eye" style="margin-left:6px;margin-right:6px;"></i> View</a>
                     <a href="pages/congvanden/edit/<?php echo e($page->id); ?>" class="btn btn-primary btn-sm" ><i class="fa fa-pencil-square-o" style="margin-left:6px;margin-right:6px;"></i> Edit</a>
                     <!-- <a  href="edit/<?php echo e($page->id); ?>"><i class="fa fa-pencil-square-o" style="margin-left:6px;margin-right:6px;"></i>Sửa</a>                    -->
                     <a href="pages/congvanden/xoa/<?php echo e($page->id); ?>" class="btn btn-warning btn-sm" ><i class="fa fa-trash fa-fw" style="margin-left:6px;margin-right:6px;"></i> Delete</a>
                     <!-- <a href="xoa/<?php echo e($page->id); ?>"> <i class="fa fa-trash fa-fw"></i>Delete</a> -->
                </td>
            </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</section>
<!-- END: ecommerce/products-list -->
<script>
    $('#id').delay(3000).fadeOut('fast');
</script>
<!-- START: page scripts -->
<script>
    $(function () {

        // Datatables
        $('#example1').DataTable({
            "lengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25,50, 100, 200, "All"]],
            responsive: true,
            "autoWidth": false
        });

    })
</script>
<!-- END: page scripts -->
<!-- END: page scripts -->
<!-- START: page scripts -->

<!-- END: page scripts -->

