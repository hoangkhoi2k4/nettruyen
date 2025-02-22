@extends('admin.layouts.main')
@section('content')
    <main role="main" class="container-fuild">
        <h1>Type</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($types as $item)
                <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->t_name }}</td>
                        <td>{{ $item->t_slug }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {!! $categories -> links() !!} --}}
    </main>
@endsection