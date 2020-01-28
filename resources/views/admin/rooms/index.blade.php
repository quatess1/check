@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')
@section('content')

    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@lang('global.courses.title')</h4>
                                <p style="margin-left: 400px;">
                                    <a href="{{ route('admin.courses.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
                                </p>
                                <br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center" {{ count($courses) > 0 ? 'datatable' : '' }}>
                                        <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                                            <th>@lang('global.courses.fields.name')</th>
                                            <th>@lang('global.courses.fields.start_date')</th>
                                            <th>@lang('global.courses.fields.start_date')</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($courses) > 0)
                                            @foreach ($courses as $course)
                                                <tr data-entry-id="{{ $course->id }}">
                                                    <td>{{ $course->id }}</td>
                                                    <td>{{ $course->name }}</td>
                                                    <td>{{ $course->start_date }}</td>
                                                    <td>{{ $course->start_time }}</td>
                                                    <td><a href="{{ route('admin.courses.edit',[$course->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                                    <a href="{{ route('admin.courses.show',[$course->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                                        {!! Form::open(array(
                                                            'style' => 'display: inline-block;',
                                                            'method' => 'DELETE',
                                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                            'route' => ['admin.courses.destroy', $course->id])) !!}
                                                        {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                                        {!! Form::close() !!}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3">@lang('global.app_no_entries_in_table')</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->

                </div>
            </div>
        </div>
        <!-- main content area end -->

    </div>
    <!-- page container area end -->
@endsection
@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.courses.mass_destroy') }}';
    </script>
@endsection
