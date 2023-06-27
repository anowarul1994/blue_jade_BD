@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-dark">Back</a>
                            <a href="" class="btn btn-success">About Manage</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/about/update/'.$aboutEdits->id) }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="input your title" value="{{ $aboutEdits->title }}">

                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="input your name" value="{{ $aboutEdits->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="input your email" value="{{ $aboutEdits->email }}">

                            </div>
                            <div class="form-group">
                                <label for="">Img</label>
                                <input type="file" name="img" class="form-control">
                                <img class="my-2" style="border-radius:50%;" width="70" height="70" src="{{ asset('/about/img/'.$aboutEdits->img) }}" alt="">

                            </div>
                            <div class="form-group">
                                <label for="">Logo</label>
                                <input type="file" name="logo" class="form-control">
                                <img style="border-radius:50%;" class="my-2" width="70" height="70" src="{{ asset('/about/logo/'.$aboutEdits->logo) }}" alt="">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary"> About Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection