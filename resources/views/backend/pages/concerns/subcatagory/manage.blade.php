@extends('backend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="" class="btn btn-dark">Back</a>
                        <a href="{{ url('/concerns/subcategory/create') }}" class="btn btn-success">Subcatagory Create</a>
                    </div>
                </div>
                <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Data_target</th>
                                <th scope="col">img</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sizeManage as $row)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{$row->color->data_target}}</td>
                                <td>
                                    <img style="border-radius:50%;" height="70" width="70" src="{{ asset('/size/'.$row->image) }}" alt="">
                                </td>
                                <td> 
                                    <a href="{{ url('/concerns/subcatagory/edit',$row->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                                    <a href="{{ url('/concerns/subcatagory/delete',$row->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure ?')"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $sizeManage->links() }}
            </div>
        </div>
    </div>
</div>
@endsection