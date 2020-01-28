@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')
@section('content')

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@lang('global.rooms.title')</h4>
                                <p style="margin-left: 400px;">
                                    <a href="{{ route('admin.rooms.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
                                </p>
                                <br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center" {{ count($rooms) > 0 ? 'datatable' : '' }}>
                                        <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>@lang('global.rooms.fields.name')</th>
                                            <th>@lang('global.rooms.fields.number')</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($rooms) > 0)
                                            @foreach ($rooms as $room)
                                                <tr data-entry-id="{{ $room->id }}">
                                                    <td>{{ $room->room_name }}</td>
                                                    <td>{{ $room->number }}</td>
                                                    <td><a href="{{ route('admin.rooms.edit',[$room->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                                    <a href="{{ route('admin.rooms.show',[$room->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                                        {!! Form::open(array(
                                                            'style' => 'display: inline-block;',
                                                            'method' => 'DELETE',
                                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                            'route' => ['admin.rooms.destroy', $room->id])) !!}
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
@endsection

