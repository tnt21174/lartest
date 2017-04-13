@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('css')

@endsection

@section('contentheader_title', 'Danh sách Sinh viên ')


@section('main-content')
 
 <div class="row">
    <div class="col-lg-12">
              
                <div class="table-reponsive">
                    <div id="jqxgrid">                                
                    </div>
                </div>
       
    </div>
</div>


@endsection

@section('js')


<script src="{!! asset('public/app/controllers/sinhvien.js') !!}"></script>
@endsection