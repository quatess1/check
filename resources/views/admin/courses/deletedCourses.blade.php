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
                        <h4 class="header-title">@lang('global.courses.title')</h4>
                        <p style="margin-left: 400px;">
                            <a href="{{ route('admin.courses.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
                        </p>
                        <br>
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>@lang('global.courses.fields.name')</th>
                                    <th>Course Featured Image</th>
                                    <th>@lang('global.courses.fields.type')</th>
                                    <th>@lang('global.courses.fields.number_student')</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($courses as $course)
                                    <tr data-entry-id="{{ $course->id }}">
                                        <td>{{ $course->course_name }}</td>
                                        <td>
                                            @if($course->featured_img = NULL)
                                                <img src="{{ asset('backend/images/blog/post-thumb1.jpg') }}" width="70" height="70" alt="Product Image">
                                            @else
                                                <img src="{{asset('/images/courses/' . $course->image)}}" width="70" height="70" alt="Post Image">
                                            @endif
                                        </td>
                                        <td>{{ $course->type }}</td>
                                        <td>{{ $course->students()->count('student_id') }} </td>
                                        <td><a href="{{ route('admin.courses.edit',[$course->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                            <a href="{{ route('admin.courses.show',[$course->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                            @can('users_manage')
                                                {!! Form::open(array(
                                                    'style' => 'display: inline-block;',
                                                    'method' => 'DELETE',
                                                    'value' => 1,
                                                    'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                    'route' => ['admin.courses.destroy', $course->id])) !!}
                                                <input type="hidden" value="1" name="course_status"/>
                                                {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table end -->

        </div>
    </div>

    <script>
        $(".taskchecker").on("change", function() {
            var taskId = $(this).attr("data-taskid"); // gets task ID of clicked checkbox
            var state = $(this).is(':checked'); // gets if checkbox is checked or not

            $.post("/changestatustask", {'idTask':taskId, 'checkboxStatus':state}, function() {
                // you can add some code here in response to ajax request
            );
        });
    </script>
@endsection
@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.courses.mass_destroy') }}';
    </script>
@endsection
