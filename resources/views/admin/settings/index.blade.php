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
                                <h4 class="header-title">@lang('global.blogs.title')</h4>
                                <p style="margin-left: 400px;">
                                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
                                </p>
                                <br>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center" {{ count($blogs) > 0 ? 'datatable' : '' }}>
                                        <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>@lang('global.blogs.fields.name')</th>
                                            <th>@lang('global.blogs.fields.body')</th>
                                            <th>Feature Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($blogs) > 0)
                                            @foreach ($blogs as $blog)
                                                <tr data-entry-id="{{ $blog->id }}">
                                                    <td>{{ $blog->title }}</td>
                                                    <td>{{ substr(strip_tags($blog->body), 0, 40) }}{{ strlen(strip_tags($blog->body)) > 40 ? '...' : "" }}</td>
                                                    <td>
                                                        @if($blog->featured_img = null)
                                                            <img src="{{ asset('backend/images/blog/post-thumb1.jpg') }}" width="70" height="70" alt="Product Image">
                                                        @else
                                                            <img src="{{asset('/images/blog/' . $blog->image)}}" width="70" height="70" alt="Post Image">
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ route('admin.blogs.edit',[$blog->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                                    <a href="{{ route('admin.blogs.show',[$blog->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                                        {!! Form::open(array(
                                                            'style' => 'display: inline-block;',
                                                            'method' => 'DELETE',
                                                            'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                                            'route' => ['admin.blogs.destroy', $blog->id])) !!}
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

