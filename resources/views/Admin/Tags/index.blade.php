@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Tags
@endsection
@section('item')
Portfolio
@endsection
@section('item-active')
Tags
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
<button data-toggle="modal" data-target="#createTagsModal" type="button" class="btn btn-success">Create</button>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tag Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($tags as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <th scope="row">{{$data->tags_name}}</th>
                <th scope="row">
                    <button data-toggle="modal" data-target="#updateTagsModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                    @include('Admin.Tags.update')
                    <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                    @include('Admin.Tags.delete-confirmation')
                </th>
            </tr>
            @empty
            <tr>
                <th colspan="3">
                    <center>
                        Data Not Found
                    </center>
                </th>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $tags->links() }}
</div>
@include('Admin.Tags.create')
@endsection
@section('custom_dcripts')

@endsection