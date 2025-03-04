@extends('frontend.main')

@section('content')
    <div id="category">
        <category-component slug="{{ $slug }}" :categories="{{ json_encode($categories) }}"></category-component>
    </div>
    @vite(['resources/js/app.js'])
@endsection