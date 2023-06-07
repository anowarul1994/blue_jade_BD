@extends('backend.layouts.master')
@section('content')
<div class="container-flueid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">

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
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>734346
                            @foreach ($allContact as $row)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->subject }}</td>
                                <td>{{ $row->message }}</td>
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