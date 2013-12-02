@extends('admin::layouts.scaffold')
@section('main')
<div class="row-fluid">
    <div class="span12">
        <h3 class="page-title">Command Logs</h3>
        <ul class="breadcrumb">
            <li> <i class="icon-home"></i>
                <a href="{{URL::to('admin')}}">Trang chủ</a> <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="{{URL::to('admin/command')}}">Online Command</a>
                <i class="icon-angle-right"></i>
            </li>
            <li>Command Logs</li>
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
                    History Logs
                </h4>
                <div class="tools">
                    <a class="collapse" href="javascript:;"></a>
                </div>
            </div>
            <div class="portlet-body">
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Command</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $list = Commandlog::orderBy('created_at','DESC')->paginate(20) ;
                        ?>
                        @foreach($list as $log)
                        <tr>
                            <td>{{$log->created_at}}</td>
                            <td>{{$log->command}}</td>
                            <td>{{$log->result}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row-fluid">
                    {{$list->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop