@extends('backend.layouts.master')
@section('content')
    <div class="contianer">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-dark">Back</a>
                            <a href="{{ url('/comphany/info/manage') }}" class="btn btn-success">Contactinfo Manage</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/comphany/info/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" placeholder="Enter Email" class="form-control" name="email">
                                @error('email')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" placeholder="Enter Phone" class="form-control" name="phone">
                                @error('phone')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Location</label>
                                <input type="text" placeholder="Enter location" class="form-control" name="location">
                                @error('location')
                                <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Create</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection