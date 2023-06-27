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
                            <a href="{{ url('/about/manage') }}" class="btn btn-success">About Manage</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sliders.store') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="input your title">
                                @error('title')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Name</label>
                                <textarea type="text" name="description" rows="6" class="form-control" placeholder="input your Description"></textarea>
                                @error('description')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="order_by">Order By</label>
                                <input type="number" min="1" name="order_by" class="form-control" placeholder="input your order_by">
                                @error('order_by')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                               <select class="form-select form-control-sm w-100" name="status">
                                   <option selected disabled>Choose your Status</option>
                                   <option value="1">Active</option>
                                   <option value="0">Deactive</option>
                               </select>
                                @error('status')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" class="form-control">
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
