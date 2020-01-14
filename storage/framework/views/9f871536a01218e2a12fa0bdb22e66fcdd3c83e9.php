<?php $__env->startSection('title', 'Danh mục cơ quan'); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components/mainmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="cat__content">

    <!-- START: ecommerce/Pages-list -->
    <section class="card">
        <div class="card-header">
            <div class="dropdown pull-right">
                <a href="pages/danhmuc/coquan/coquan_add" class="btn btn-success btn-sm"><i class="fa fa-plus "></i>&nbsp; &nbsp; Thêm &nbsp; &nbsp;</a>
            </div>
            <span class="cat__core__title">
            <strong>Danh mục Cơ quan</strong>
        </span>
        </div>
        <div class="card-body">
            <?php if(session('thongbao')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('thongbao')); ?>

                </div>
            <?php endif; ?>
            <table class="table table-hover nowrap" id="example1" width="100%">
                <thead class="thead-default">
                <tr style="text-align: center;">
                    <th>ID</th>
                    <th>Tên Cơ quan</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $coquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($dk->id); ?></td>
                        <td><?php echo e($dk->TenCoQuan); ?></td>
                        <td style="width:250px;">

                            <i class="fa fa-trash fa-fw" style="margin-left:4px;margin-right:4px;"></i><a  href="pages/danhmuc/coquan/coquan_edit/<?php echo e($dk->id); ?>"> Sửa</a>
                            <i class="fa fa-delete  fa-fw"></i><a href="pages/danhmuc/coquan/coquan_del/<?php echo e($dk->id); ?>"> Xóa</a>
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

