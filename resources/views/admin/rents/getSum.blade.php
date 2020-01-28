@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')
@section('content')


    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row" style="margin-top: 70px;">

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <!-- Search form -->
                        <form class="tourz-search-form" action="{{ route('admin.searched.getRent') }}" method="get">
                            <div class="md-form mt-0">
                                <input class="form-control" type="date" name="start_time" value="{{ Request::get('start_time') }}" class="autocomplete" placeholder="2018-03-05" id="start_time">
                            </div><br>
                            <div class="input-field" style="margin-left: 500px;">
                                <input type="submit" id="btn-search" value="search" title="Submit Search" class="btn btn-danger">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Students On This Day</h4>
                        <br>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                <tr>
                                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                                    <th>@lang('global.rents.fields.name')</th>
                                    <th>@lang('global.rents.fields.address')</th>
                                    <th>@lang('global.instructors.fields.room_name')</th>
                                    <th>Attendance</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($rents) > 0)
                                    @foreach ($rents as $instructor)
                                        <tr data-entry-id="{{ $instructor->id }}">
                                            <td>{{ $instructor->id }}</td>

                                            


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

