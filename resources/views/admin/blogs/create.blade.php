@extends('layouts.app')
@section('content')

        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- basic form start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">@lang('global.rooms.title')</h4>
                            {!! Form::open(['method' => 'POST', 'route' => ['admin.rooms.store']]) !!}
                            <div class="form-group">
                                {!! Form::label('room_name', 'Name*', ['class' => 'control-label']) !!}
                                {!! Form::text('room_name', old('room_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('room_name'))
                                    <p class="help-block">
                                        {{ $errors->first('room_name') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('number', 'Room Number*', ['class' => 'control-label']) !!}
                                {!! Form::text('number', old('number'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('number'))
                                    <p class="help-block">
                                        {{ $errors->first('number') }}
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
@endsection


