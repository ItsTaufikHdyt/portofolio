@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Skills
@endsection
@section('item')
Portfolio
@endsection
@section('item-active')
Skills
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
<button data-toggle="modal" data-target="#createSkillsModal" type="button" class="btn btn-success">Create</button>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Icon</th>
                <th scope="col">Level</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($skills as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <th scope="row">{{$data->name}}</th>
                <th scope="row"><i class="{!!$data->icon!!}"></i></th>
                <th scope="row">
                    @if ($data->level == 1)
                    <span class="badge badge-primary">Beginner</span>
                    @elseif ($data->level == 2)
                    <span class="badge badge-secondary">Intermediate</span>
                    @elseif ($data->level == 3)
                    <span class="badge badge-success">Advanced</span>
                    @endif
                </th>
                <th scope="row">
                    <button data-toggle="modal" data-target="#updateSkillsModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                    @include('Admin.Skills.update')
                    <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                    @include('Admin.Skills.delete-confirmation')
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
    {{ $skills->links() }}
</div>
@include('Admin.Skills.create')
@endsection
@section('custom_dcripts')

@endsection