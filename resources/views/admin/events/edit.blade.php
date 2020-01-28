@extends('layouts.app')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'link code',
        menubar: false
    });
</script>
@section('content')


        <div class="col-lg-11 col-ml-10">
            <div class="row">
                <!-- basic form start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">@lang('global.blogs.title')</h4>
                            {!! Form::model($blog, ['method' => 'PUT', 'route' => ['admin.blogs.update', $blog->id], 'files' => true]) !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Post Title*', ['class' => 'control-label']) !!}
                                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('title'))
                                    <p class="help-block">
                                        {{ $errors->first('title') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('slug', 'Post slug*', ['class' => 'control-label']) !!}
                                {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('slug'))
                                    <p class="help-block">
                                        {{ $errors->first('slug') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left">
                                        @if($blog->featured_img = null)
                                            <span>Choose file</span>
                                            <input type="file" name="featured_img">
                                            <img src="{{ asset('backend/images/blog/post-thumb1.jpg') }}" width="70" height="70" alt="Product Image">
                                        @else
                                            <span>Choose file</span>
                                            <input type="file" name="featured_img">
                                            <img src="{{asset('/images/blog/' . $blog->image)}}" width="70" height="70" alt="Product Image">
                                        @endif

                                    </div>
                                </div>
                            </div> <br><br><br><br>



                            <div class="form-group">
                                <div class="mb-3">
                                    <textarea class="textarea" placeholder="Place some text here" name="body">{{ $blog->body }}</textarea>
                                </div>
                                @if($errors->has('body'))
                                    <p class="help-block">
                                        {{ $errors->first('body') }}
                                    </p>
                                @endif
                            </div>



                            {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- basic form end -->
            </div>
        </div>
@endsection

