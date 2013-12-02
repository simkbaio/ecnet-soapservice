@extends('admin::layouts.scaffold')

@section('main')
<div class="row-fluid">
    <div class="span12">
        <h3 class="page-title">Standard Command</h3>
        <ul class="breadcrumb">
            <li> <i class="icon-home"></i>
                <a href="{{URL::to('admin')}}">Trang chủ</a> <i class="icon-angle-right"></i>
            </li>
            <li> Viet-WoW Online Services</li>
        </ul>
    </div>
</div>
@if(Session::has('message'))
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close"></button>
            {{Session::get('message')}}
        </div>
    </div>
</div>
@endif
<div class="row-fluid">
    <div class="span12">
        <div class="portlet box green">
            <div class="portlet-title">
                <h4>
                    <i class="icon-reorder"></i>
                    Bảng điều khiển
                </h4>
                <div class="tools">
                    <a class="collapse" href="javascript:;"></a>
                </div>
            </div>
            <div class="portlet-body">
        
            </div>
        </div>
    </div>
</div>
@stop