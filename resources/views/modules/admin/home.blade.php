@extends('layouts.main')
@section('title', trans('messages.title.home.dashboard'))

@section('breadcrumb')
    <h2>Layouts</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.html">Home</a>
        </li>
        <li class="active">
            <strong>Layouts</strong>
        </li>
    </ol>
@endsection

@section('content')
    <div class="ibox-content text-center p-md">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox text-center">
                    <div class="col-md-6 col-lg-6"><a href="/create-account"><button type="button" class="btn btn-primary btn-lg btn-admin-min-width">{{trans('messages.label.admin.createAccount')}}</button></a></div>
                    <div class="col-md-6 col-lg-6"><a href="/create-base"><button type="button" class="btn btn-primary btn-lg btn-admin-min-width">{{trans('messages.label.admin.createBase')}}</button></a></div>
                </div>
            </div>
        </div>
        &nbsp;
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox text-center">
                    <div class="col-md-6 col-lg-6"><a href="/edit-account"><button type="button" class="btn btn-primary btn-lg btn-admin-min-width">{{trans('messages.label.admin.editAccount')}}</button></a></div>
                    <div class="col-md-6 col-lg-6"><a href="/delete-project"><button type="button" class="btn btn-primary btn-lg btn-admin-min-width">{{trans('messages.label.admin.deleteProject')}}</button></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection