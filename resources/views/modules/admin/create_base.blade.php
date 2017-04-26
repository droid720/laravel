@extends('layouts.main')
@section('title', trans('messages.title.admin.createBase'))

@section('breadcrumb')
    <h2>{{trans('messages.label.admin.createBase.createBase')}}</h2>
    <ol class="breadcrumb">
        <li>
            <a href="{{route('dashboard')}}">{{trans('messages.title.home')}}</a>
        </li>
        <li class="active">
            <strong>{{trans('messages.label.admin.createBase.createBase')}}</strong>
        </li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <form action="#" role="form">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <button type="button" class="btn btn-primary btn-admin-min-width"
                                    id="addMoreAccount">{{trans('messages.label.common.btnAddMore')}}</button>
                            <button type="submit"
                                    class="btn btn-primary btn-admin-min-width">{{trans('messages.label.common.btnSave')}}</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered" id="createBase">
                            <thead>
                            <tr>
                                <th>{{trans('messages.label.admin.createBase.company')}}</th>
                                <th>{{trans('messages.label.admin.createBase.department')}}</th>
                                <th>{{trans('messages.label.admin.createBase.base')}}</th>
                                <th>{{trans('messages.label.admin.createBase.short_name')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-justify">
                                    <input type="text" name="base[0][company]"
                                           placeholder="{{trans('messages.placeholder.admin.createBase.company')}}"
                                           class="form-control">
                                </td>
                                <td class="text-justify">
                                    <input type="text" name="base[0][department]"
                                           placeholder="{{trans('messages.placeholder.admin.createBase.department')}}"
                                           class="form-control">
                                </td>
                                <td class="text-justify">
                                    <input type="text" name="base[0][base]"
                                           placeholder="{{trans('messages.placeholder.admin.createBase.base')}}"
                                           class="form-control">
                                </td>
                                <td class="text-justify">
                                    <input type="text" name="base[0][short_name]"
                                           placeholder="{{trans('messages.placeholder.admin.createBase.short_name')}}"
                                           class="form-control">
                                </td>
                            </tr>
                            @include('modules.admin.templateJs.new_base_template')
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extend-js')
    <script src="{{url('assets/js/jsrender.min.js')}}"></script>
    <script type="application/javascript">
        $.views.settings.delimiters("[%", "%]");
        $(document).ready(function () {
            var index_name = 0;
            $('#addMoreAccount').click(function () {
                var table = $('#createBase');
                var table_body = table.find('tbody');
                index_name++;
                var name = [
                    {
                        name_company: 'base[' + index_name + '][company]',
                        name_department: 'base[' + index_name + '][department]',
                        name_base: 'base[' + index_name + '][base]',
                        name_short_name: 'base[' + index_name + '][short_name]'
                    }

                ];
                var newRowTemplate = $.templates("#new_base");
                var _row = newRowTemplate.render(name);
                table_body.prepend(_row);
            });
        });
    </script>
@endsection