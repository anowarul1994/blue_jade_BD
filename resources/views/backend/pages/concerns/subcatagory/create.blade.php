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
                            <a href="{{ url('/concerns/subcategory/manage') }}" class="btn btn-success">Subcatagory Manage</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/concerns/subcatagory/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Catagory_id</label>
                                <select name="concernscategory_id" id="" class="form-control">
                                    <option value="">choose your option</option>
                                    @foreach ($concernssubcategory as $row)
                                    <option value="{{ $row->id }}">{{ $row->data_target }}</option> 
                                    @endforeach
                                    @error('concernscategory_id')
                                    <p class="text-danger mb-0"><small><i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}</small></p> <br>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
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