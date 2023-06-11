@extends('backend.layouts.master')
@section('page_title', "Contact List")
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>@yield('page_title')</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pnone</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Address</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allContact as $row)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->subject }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->message }}</td>
                                <td>
                                    <a href="{{ url('/contact/delete',$row->id) }}" class="btn btn-danger" onclick="confirm('Are You Sure ?')"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $allContact->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
