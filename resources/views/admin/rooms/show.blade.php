@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')
@section('content')

    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <div class="main-content-inner">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-area">
                                <div class="invoice-head">
                                    <div class="row">
                                        <div class="iv-left col-6">
                                            <span>Course Information</span>
                                        </div>
                                        <div class="iv-right col-6 text-md-right">
                                            <span>{{ $course->id }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="invoice-address">
                                            <h5>{{ $course->name }}</h5>
                                            <p>Detail: {{ $course->detail }}</p>
                                            @if($course->days != null)
                                            <p>
                                                    Days to be thought: {{ $course->days }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <ul class="invoice-date">
                                            <li>Course Begins : {{ $course->start_date }}</li>
                                            <li>Course TIme : {{ $course->start_time }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="invoice-buttons text-right">
                                    <a href="{{ route('admin.courses.index') }}" class="invoice-btn">All courses</a>
                                    <a href="{{ route('admin.courses.create') }}" class="invoice-btn">Creat course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- page container area end -->
@endsection

