@extends('layouts.app')
@section('content')

    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- basic form start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">@lang('global.courses.title')</h4>
                            {!! Form::open(['method' => 'POST', 'route' => ['admin.courses.store']]) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('name'))
                                    <p class="help-block">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('detail', 'Course Detail*', ['class' => 'control-label']) !!}
                                {!! Form::text('detail', old('detail'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('detail'))
                                    <p class="help-block">
                                        {{ $errors->first('detail') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="start_date" class="col-form-label">Course Date</label>
                                <input class="form-control" type="date" name="start_date" value="2018-03-05" id="example-date-input">
                                <p class="help-block"></p>
                                @if($errors->has('start_date'))
                                    <p class="help-block">
                                        {{ $errors->first('start_date') }}
                                    </p>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="days" class="col-form-label">Enter Days to be thought</label>
                                <input class="form-control" type="text" name="days" value="Monday, Friday" id="days">
                                <p class="help-block"></p>
                                @if($errors->has('days'))
                                    <p class="help-block">
                                        {{ $errors->first('days') }}
                                    </p>
                                @endif
                            </div>


                            <div class="form-group">
                                <div class="form-group">
                                    <label for="start_time" class="col-form-label">Course Time</label>
                                    <input class="form-control" type="time" name="start_time" value="13:45:00" id="start_time">
                                </div>
                                <p class="help-block"></p>
                                @if($errors->has('start_time'))
                                    <p class="help-block">
                                        {{ $errors->first('start_time') }}
                                    </p>
                                @endif
                            </div>


                            {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- basic form end -->
            </div>
        </div>

    </div>
    <!-- page container area end -->
@endsection


