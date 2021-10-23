@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
About
@endsection
@section('item')
Portfolio
@endsection
@section('item-active')
About
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
                <th scope="col">Desc</th>
                <th scope="col">Website</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Freelance</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($about as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <th scope="row">{{substr($data->desc,0,70)}} ...</th>
                <th scope="row">{{$data->website}}</th>
                <th scope="row">{{$data->phone}}</th>
                <th scope="row">{{$data->city}}</th>
                <th scope="row">{{$data->age}}</th>
                <th scope="row">{{$data->email}}</th>
                <th scope="row">
                    @if ($data->freelance == 1)
                    <span class="badge badge-primary">Available</span>
                    @elseif ($data->freelance == 2)
                    <span class="badge badge-secondary">Non Available</span>
                    @endif
                </th>
                <th scope="row">
                    <button data-toggle="modal" data-target="#updateAboutModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                    @include('Admin.About.update')
                    <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                    @include('Admin.About.delete-confirmation')
                </th>
            </tr>
            @empty
            <tr>
                <th colspan="9">
                    <center>
                        Data Not Found
                    </center>
                </th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('Admin.About.create')
@endsection
@section('custom_dcripts')

@endsection