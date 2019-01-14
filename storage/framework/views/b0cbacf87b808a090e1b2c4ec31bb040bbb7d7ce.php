<?php $__env->startSection('content'); ?>
<iframe src="/admin/filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('zof::layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>