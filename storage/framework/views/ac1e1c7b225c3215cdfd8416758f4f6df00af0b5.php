<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title', 'Danh sách Sinh viên '); ?>


<?php $__env->startSection('main-content'); ?>
 
 <div class="row">
    <div class="col-lg-12">
              
                <div class="table-reponsive">
                    <div id="jqxgrid">                                
                    </div>
                </div>
       
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<script src="<?php echo asset('public/app/controllers/sinhvien.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>