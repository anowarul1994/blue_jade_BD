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
                        <form action="{{ route('sliders.update', $sliders->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{ $sliders->title }}" class="form-control" placeholder="input your title">
                                @error('title')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Name</label>
                                <textarea type="text"  name="description" rows="6" class="form-control" placeholder="input your Description">{{ $sliders->description }}</textarea>
                                @error('description')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="order_by">Order By</label>
                                <input type="number" value="{{ $sliders->order_by}}" min="1" name="order_by" class="form-control" >
                                @error('order_by')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-select form-control-sm w-100" name="status">
                                    <option selected disabled>Choose your Status</option>
                                    <option value=" {{1}}" @if($sliders->status==1) Selected @endif>  <span class="btn btn-sm btn-info">Active</span></option>
                                    <option  value=" {{0}} " @if($sliders->status==0) Selected @endif>Deactive</option>
                                </select>
                                @error('status')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" class="form-control">
                                <img class="img-thumbnail" width="300px" src="{{ asset("image/banner_img/".$sliders->photo) }}" alt="banner">
                                @error('photo')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block btn-primary"> Create Slider </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
