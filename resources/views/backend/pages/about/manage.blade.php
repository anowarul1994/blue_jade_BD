@extends('backend.layouts.master')
@section('page_title', "About List")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <h1>@yield('page_title')</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="" class="btn btn-dark">Back</a>
                            <a href="{{ url('/about/create') }}" class="btn btn-success">About Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">img</th>
                                    <th scope="col">logo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aboutes as $row)
                                <tr>
                                    <th scope="row">{{ $loop->index+1 }}</th>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>
                                        <img width="70" height="70" Style="border-radius:50%;" src="{{ asset('/about/img/'.$row->img) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" height="70" Style="border-radius:50%;" src="{{ asset('/about/logo/'.$row->logo) }}" alt="">

                                    </td>
                                    <td>
                                        <a href="{{ url('/about/edit',$row->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                                        <a href="{{ url('/about/delete',$row->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure ?')"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $aboutes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
