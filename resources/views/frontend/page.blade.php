@extends('frontend.main')
@section('content')
    <div id="page">
        <page-component slug="{{ $slug }}"></page-component>
    </div>
    @vite(['resources/js/app.js'])
@endsection