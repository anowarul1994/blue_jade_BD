@extends('backend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3>Slider List</h3>
                            <a href="{{ route('sliders.create') }}" class="btn btn-sm btn-success align-middle">+ Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Order By</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <th class="align-middle" scope="row">{{ $loop->index+1 }}</th>
                                    <td class="align-middle">{{ $slider->title }} </td>
                                    <td class="align-middle">{{ $slider->description }}</td>
                                    <td class="align-middle">{{ $slider->status == 1 ? 'Active':'Deactive' }}</td>
                                    <td class="align-middle">{{ $slider->order_by }}</td>
                                    <td class="align-middle">
                                        <img width="60" height="60" Style="border-radius:50%;" src="{{ asset('banner_img/'.$slider->photo)}}" alt="">
                                    </td>

                                    <td class="align-middle" >
                                        <div class="d-flex justify-content-around align-middle">
                                            <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                                            <form method="post" action="{{ route('sliders.destroy',$slider->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                               <button class="btn btn-sm btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $sliders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
