@extends('admin.master.app')
@section('content')
    <div class="main-body">
        <div class="conatiner">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Website</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">

                            <form action="{{ url('admin/settings/update', $content->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                @method('put')
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input id="name" name="name" class="form-control" type="text"
                                        value="{{ $content->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="slogan">Slogan </label>

                                    <textarea id="summernote" name="slogan" class="form-control" rows="5" value="">
                                {{ $content->slogan }}
                                </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Slogan Image <span class="text-info">( PNG: 1410 x 820 px )</span></label>
                                    <img src="{{ asset('/') }}images/{{ $content->slogan_image }}" height="100"
                                        width="100" alt="">

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="slogan_image"
                                            id="slogan_image">
                                        <label class="custom-file-label" for="slogan_image">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="about">About</label>
                                    <textarea id="summernote2" name="about" class="form-control" rows="2">
                                    {{ $content->about }}
                                </textarea>
                                    <div class="form-group">
                                        <label>About Image <span class="text-info">(PNG: 780 x 550 px)</span> </label>
                                        <img src="{{ asset('/') }}images/{{ $content->about_image }}" height="100"
                                            width="100" alt="">

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="about_image"
                                                id="about_image">
                                            <label class="custom-file-label" for="about_image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="massage">Massage</label>
                                    <textarea id="summernote3" name="massage" class="form-control" rows="2">
                                    {{ $content->massage }}
                                </textarea>

                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input id="phone" name="phone" class="form-control" value="{{ $content->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" name="email" class="form-control"
                                        value="{{ $content->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea id="address" name="address" class="form-control" rows="2">{{ $content->address }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Logo <span class="text-info">(PNG: 220 x 200 px)</span></label>
                                    <img src="{{ asset('/') }}images/{{ $content->logo }}" height="100"
                                        width="100" alt="">

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo" id="logo">
                                        <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Favicon <span class="text-info">(PNG: 10 x 10 px)</span></label>
                                    <img src="{{ asset('/') }}images/{{ $content->favicon }}" height="100"
                                        width="100" alt="">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="favicon" id="favicon">
                                        <label class="custom-file-label" for="favicon">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="worker">worker</label>
                                    <input id="worker" name="worker" class="form-control"
                                        value="{{ $content->worker }}">
                                </div>
                                <div class="form-group">
                                    <label for="project">project</label>
                                    <input id="project" name="project" class="form-control"
                                        value="{{ $content->project }}">
                                </div>
                                <div class="form-group">
                                    <label for="customer">customer</label>
                                    <input id="customer" name="customer" class="form-control"
                                        value="{{ $content->customer }}">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input id="facebook" name="facebook" class="form-control"
                                        value="{{ $content->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input id="twitter" name="twitter" class="form-control"
                                        value="{{ $content->twitter }}">
                                </div>
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input id="linkedin" name="linkedin" class="form-control"
                                        value="{{ $content->linkedin }}">
                                </div>
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <input id="youtube" name="youtube" class="form-control"
                                        value="{{ $content->youtube }}">
                                </div>
                                <button type="submit" class="btn btn-block btn-outline-info btn-flat">Update</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
