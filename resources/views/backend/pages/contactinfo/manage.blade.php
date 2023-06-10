@extends('backend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="" class="btn btn-dark">Back</a>
                        <a href="" class="btn btn-success">Contactinfo Create</a>
                    </div>
                </div>
                <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Location</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allContactInfo as $row)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->location }}</td>
                                    <td> 
                                        <a href="{{ url('/comphany/info/edit',$row->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                                        <a href="{{ url('/comphany/info/delete',$row->id) }}" onclick="confirm('Are You Sure ?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr> 
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $allContactInfo->links() }}
            </div>
        </div>
    </div>
</div>
@endsection