@extends('Carrier.layouts.app')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
@endsection

@section('content')
    <section class="content-header">
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary color-palette-box" id="all_player_list">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-tag"></i> 转账未知处理</h3>
                <div class="box-tools">
                    <ul class="pull-right pagination-sm pagination">
                    </ul>
                </div>
            </div>
            <div class="box-body">
                @include('Carrier.player_transfer_unknown_process.table')
                <h5 class="pull-left">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-left: 15px" onclick="window.LaravelDataTables['dataTableBuilder'].ajax.reload();">刷新</a>
                </h5>
            </div>
            <div class="overlay" id="overlay" style="display: none">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
        </div>
    </div>
    @include('Components.player_edit_modal')
@endsection

