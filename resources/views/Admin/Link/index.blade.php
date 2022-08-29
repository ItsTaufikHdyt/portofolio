@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Links
@endsection
@section('item')
Portfolio
@endsection
@section('item-active')
Links
@endsection
@section('content')
@if($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    @foreach ($errors->all() as $error)
    <ul>
        <li> <strong>{{ $error }}</strong></li>
    </ul>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<button data-toggle="modal" data-target="#createLinkModal" type="button" class="btn btn-success">Create</button>
<br><br>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Type</th>
                <th scope="col">Title</th>
                <th scope="col">Sub Title</th>
                <th scope="col">URL</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($link as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <th scope="row"><img src="{{asset('storage/icon/' .$data->icon)}}" height="50" width="50" alt=""></th>
                <th scope="row">{{$data->type}}</th>
                <th scope="row">{{$data->title}}</th>
                <th scope="row">{{$data->subtitle}}</th>
                <th scope="row">{{$data->url}}</th>
                <th scope="row">
                    <button data-toggle="modal" data-target="#updateLinkModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                    @include('Admin.Link.update')
                    <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                    @include('Admin.Link.delete-confirmation')
                </th>
            </tr>
            @empty
            <tr>
                <th colspan="7">
                    <center>
                        Data Not Found
                    </center>
                </th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('Admin.Link.create')
@endsection
@section('custom_dcripts')

@endsection