<?php $__env->startSection('content'); ?>
<?php $__env->startSection('sub-judul','Category'); ?>

<a href="<?php echo e(route('category.create')); ?>" class="btn btn-info btn-sm">Tambah Kategori</a>
    <table class="table table-striped table-hover table-sn table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result => $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($result + $category->firstitem()); ?>

                    </td>
                    <td><?php echo e($hasil->name); ?></td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($category->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('template_backend.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rayhanhidayat/Desktop/news/resources/views/admin/index.blade.php ENDPATH**/ ?>