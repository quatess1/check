@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')
@section('content')


    <div class="main-content-inner">
        <div class="row">
            <!-- Links And Buttons start -->
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Student</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                Room Name :
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Room Number :</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Links And Buttons end -->
            <!-- Disabled Items start -->
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Information</h4>
                        <ul class="list-group">
                            <li class="list-group-item disabled active">{{ $room->room_name }} </li>
                            <li class="list-group-item"> {{ $room->number }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Disabled Items end -->



            <!-- Links And Buttons start -->
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Created Room</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                Created By :
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Links And Buttons end -->
            <!-- Disabled Items start -->
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Information</h4>
                        <ul class="list-group">
                            <li class="list-group-item disabled active">{{ $room->user->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Disabled Items end -->

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Instructor Teaching in this room</h4>
                        <br>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center" >
                                <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>Instructor Name</th>
                                    <th>Course Name</th>
                                    <th>Course Type</th>
                                    <th>Course Start Time</th>
                                    <th>Course End Time</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($room->instructor as $instructor)
                                    <tr>
                                        <td>{{ $instructor->name }}</td>
                                        @foreach($instructor->courses as $course)
                                            <td>{{ $course->course_name }}</td>
                                            <td>{{ $course->type }}</td>
                                        @endforeach
                                        @foreach($course->course_times as $course_time)
                                            <td>{{ $course_time->start }}</td>
                                            <td>{{ $course_time->end }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

