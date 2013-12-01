@extends('admin::layouts.scaffold')
@section('footer')
    <script src="{{URL::to('packages/ecnet/admin/assets/js/jquery.form.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#command_form").ajaxForm({
                success:function(data){
                    $("#commandbroad").html(data);
                }   
            });
        });

    </script>
@stop
@section('main')
<div class="row-fluid">
    <div class="span12">
        <h3 class="page-title">Standard Command</h3>
        <ul class="breadcrumb">
            <li> <i class="icon-home"></i>
                <a href="{{URL::to('admin')}}">Trang chủ</a> <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="{{URL::to('admin/command')}}">Online Command</a>
                <i class="icon-angle-right"></i>
            </li>
            <li>Standard</li>
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
        <div class="portlet box grey">
            <div class="portlet-title">
                <h4>
                    <i class="icon-reorder"></i>
                    Standard Command
                </h4>
                <div class="tools">
                    <a class="collapse" href="javascript:;"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row-fluid">
                    <div id="commandbroad" class='m-wrap span12' style="height:300px;border:1px solid;color:#fff;background:#000;font-family: 'Lucida Console';padding:10px;">
                    </div>
                </div>
                {{Form::open(array('url'=>URL::to('admin/command/ajax_command'),'id'=>'command_form'))}}
                {{Form::hidden('session',Str::random(10,'alpha'))}}
                <div class="row-fluid" style="margin-top:-5px;background:#000;border:none;">
                    <div class="span12" style="left">
                                {{Form::text('command','',array('class'=>'span12','style'=>'color:#fff;border:none;background:#000;font-weight:bold;','placeholder'=>'Enter Command'))}}
                    </div>
                    
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@stop