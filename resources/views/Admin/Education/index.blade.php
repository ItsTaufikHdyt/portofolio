@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Education
@endsection
@section('item')
Portfolio
@endsection
@section('item-active')
Education
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
<button data-toggle="modal" data-target="#createAboutModal" type="button" class="btn btn-success">Create</button>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Period</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($education as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <th scope="row">{{$data->title}}</th>
                <th scope="row">{{$data->period}}</th>
                <th scope="row">{{$data->location}}</th>
                <th scope="row">
                    <button data-toggle="modal" data-target="#updateAboutModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                    @include('Admin.Education.update')
                    <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                    @include('Admin.Education.delete-confirmation')
                </th>
            </tr>
            @empty
            <tr>
                <center>
                    <th collspan="9">Data Not Found</th>
                </center>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('Admin.Education.create')
@endsection
@section('custom_dcripts')

@endsection