@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('css')

@endsection

@section('contentheader_title', 'Danh sách Sinh viên ')


@section('main-content')
 
 

<div class="row" ng-controller="SinhVienController">
    <div class="col-lg-12">
        
		<div id="jqxgrid">                                
         </div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>STT <?php echo GlobalLib::is_ok(); ?></th>
					<th width="30%">Họ và Tên</th>
					<th>Tuổi</th>
					<th>Email</th>
					<th>Điện Thoại</th>
					<th width="10%"><button id="btn-add" class="btn btn-primary btn-xs" ng-click = "modal('add')" >Thêm Sinh Viên</button></th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat=" row in results ">
					<td><% row.id %></td>
					<td><% row.name %></td>
					<td><% row.age %></td>
					<td><% row.email %></td>
					<td><% row.phone %></td>
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
				<form name="frm" class="form-horizontal">{{ csrf_field() }}
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Họ tên</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" ng-model="item.name"  ng-required="true" />
							<span id="helpBlock2" class="help-block" ng-show="frm.name.$error.required" >Vui lòng nhập họ tên</span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Tuổi</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="age" name="age" placeholder="Vui lòng nhập tuổi" ng-model="item.age"  ng-required="true" >
							<span id="helpBlock2" class="help-block" ng-show="frm.age.$error.required">Vui lòng nhập tuổi</span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="email" name="email" placeholder="Vui lòng nhập Email" ng-model="item.email"  ng-required="true"  />
							<span id="helpBlock2" class="help-block" ng-show="frm.email.$error.email" >Vui lòng nhập email</span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label" >Điện thoại</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Vui lòng nhập số điện thoại" ng-model="item.phone"  ng-required="true" />
							<span id="helpBlock2" class="help-block" ng-show="frm.phone.$error.required">Vui lòng nhập điện thoại</span>
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

 <div ng-controller="demoController">
        <jqx-grid jqx-columns="columns" jqx-sortable="true" jqx-source="people" jqx-width="800"  jqx-height="200" jqx-alt-rows="true"></jqx-grid>
    </div>  
@endsection

@section('js')


<script src="{!! asset('public/app/controllers/sinhviencontroller.js') !!}"></script>
@endsection