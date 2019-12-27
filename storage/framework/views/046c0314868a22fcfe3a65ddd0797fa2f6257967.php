<?php $__env->startSection('title', 'Manage Pages'); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/mainmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="cat__content">

<!-- START: ecommerce/Pages-list -->
<section class="card">
    <div class="card-header">
        <div class="dropdown pull-right">
           <a href="<?php echo e(url('pages/create')); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus "></i>&nbsp; &nbsp; Add &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Pages List</strong>
        </span>
    </div>
	
	
	<div class="card-body">
		 <?php if($message = Session::get('error')): ?>
			<div class="alert alert-danger" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Oh snap! </strong> <?php echo e($message); ?>

            </div>
		<?php endif; ?>
		 <?php if($message = Session::get('success')): ?>
			<div class="alert alert-success" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Well done! </strong> <?php echo e($message); ?> !
            </div>
		<?php endif; ?>
        <table class="table table-hover nowrap" id="example1" width="100%">
            <thead class="thead-default">
            <tr style="text-align: center;">
                <th>ID</th>
                <th>Page Name</th>
                <th>Page Title</th>
                <th>Meta Title</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
            </thead>
            
            <tbody>
			<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($page->page_id); ?></td>
                <td><?php echo e($page->page_name); ?></td>
                <td><?php echo e($page->page_title); ?></td>
                <td><?php echo e($page->meta_title); ?></td>
                <td><?php echo e($page->created_at->format('d-M-Y')); ?></td>
               <td style="width:250px;">
                     <a href=""><i class="fa fa-eye"></i> View</a>
                    <i class="fa fa-trash fa-fw" style="margin-left:4px;margin-right:4px;"></i><a href="href="<?php echo e(route('pages.edit',$page->page_id )); ?>"> Sửa</a>
                    
                    <!-- <a href="<?php echo e(route('pages.edit',$page->page_id )); ?>" class="btn btn-info btn-sm" ><i class="fa fa-eye fa-1x"></i></a>
                    <a href="<?php echo e(route('pages.edit',$page->page_id )); ?>" class="btn btn-info btn-sm" style="margin-left:4px;margin-right:4px;"> Edit</a> -->
                    
                   <?php echo Form::open(['method' => 'DELETE','route' => ['pages.destroy', $page->page_id],'style'=>'display:inline','role'=>'form','onsubmit' => 'return confirm("Do you want to delete this ?")']); ?>

					<?php echo Form::submit('Remove', ['class' => 'btn btn-danger btn-sm']); ?>

					<?php echo Form::close(); ?>

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

