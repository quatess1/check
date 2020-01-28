@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')
@section('content')


    <div class="main-content-inner">
        <div class="row">
            <!-- Links And Buttons start -->
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Post</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                Post Title :
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Post Description:</a>
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
                            <li class="list-group-item disabled active">{{ $blog->title }} </li>
                            <li class="list-group-item"> {!! $blog->body!!}  </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Disabled Items end -->






        </div>
    </div>
@endsection

