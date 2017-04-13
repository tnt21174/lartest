<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title', 'Danh sách Vùng '); ?>


<?php $__env->startSection('main-content'); ?>
    

<div class="row" ng-controller="AreaController">
    <div class="col-lg-12">        
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th width="30%">Tên</th>
					<th>Thứ tự</th>					
					<th width="10%"><button id="btn-add" class="btn btn-primary btn-xs" ng-click = "modal('add')" >Thêm</button></th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat=" row in results ">
					<td><% row.id %></td>
					<td><% row.name %></td>
					<td><% row.order %></td>					
					<td>
						<button class="btn btn-default btn-xs btn-detail" id="btn-edit" ng-click = "modal('edit', row.id )">Sửa</button>
						<button class="btn btn-danger btn-xs btn-delete" ng-click="delete(row.id)">Xóa</button>
					</td>
				</tr>
			</tbody>
		</table>
		
		<!-- Modal -->
		<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><% modalTitle %></h4>
			  </div>
			  <div class="modal-body">
				<form name="frm" class="form-horizontal"><?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Tên vùng</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" ng-model="item.name"  ng-required="true" />
							<span id="helpBlock2" class="help-block" ng-show="frm.name.$error.required" >Vui lòng nhập tên vùng</span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Thứ tự</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="order" name="order" placeholder="Vui lòng nhập thứ tự" ng-model="item.order"  ng-required="true" >
							<span id="helpBlock2" class="help-block" ng-show="frm.order.$error.required">Vui lòng nhập thứ tự</span>
						</div>
					</div>					
					
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary" ng-disabled="frm.$invalid" ng-click="save(state,id)" >Lưu</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	

	
	
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<script src="<?php echo asset('public/app/controllers/areacontroller.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>