@extends('admin.layouts.main')
@section('content')
    <main role="main" class="container-fuild">
        <h1>Category</h1>
        <table class="table table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Domain</th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Time</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($categories as $item)
                   <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->c_name }}</td>
                        <td>{{ $item->c_slug }}</td>
                        <td>{{ $item->c_domain }}</td>
                        <td>{{ $item->c_link }}</td>
                        <td>
                            <span class = "text-{{ $item->getStatus($item -> c_status)['class'] }}">
                                {{ $item->getStatus($item -> c_status)['name'] }}
                            </span>
                        </td>
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