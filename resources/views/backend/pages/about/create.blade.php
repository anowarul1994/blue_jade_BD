@extends('backend.layouts.master')
@section('page_title', 'Create About')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>@yield('page_title')</h1>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-dark">Back</a>
                            <a href="{{ url('/about/manage') }}" class="btn btn-success">About Manage</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/about/store') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="input your title">
                                @error('title')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="input your name">
                                @error('name')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="input your email">
                                @error('email')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="">Img</label>
                                <input type="file" name="img" class="form-control">
                                @error('img')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Logo</label>
                                <input type="file" name="logo" class="form-control">
                                @error('logo')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block btn-primary"> About Create </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
