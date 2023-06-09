@extends('backend.layouts.master')
@section('content')
    <div class="container-fluied">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-dark">Back</a>
                            <a href="{{ url('/concerns/category/create') }}" class="btn btn-success">About Create</a>
                        </div>
                    </div>
                    <div class="card-header">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sl.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Data_target</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colorManage as $row)
                                    <tr>
                                        <th scope="row">{{ $loop->index+1 }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->data_target }}</td>
                                        <td>
                                            <a href="{{ url('/concerns/category/edit',$row->id) }}" class="btn btn-md btn-primary"><i class="fa-solid fa-pen"></i></a>
                                            <a onclick="return confirm('Are You Sure ?')" href="{{ url('/concerns/category/delete',$row->id) }}" class="btn btn-md btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection