@extends('_layout')

@section('content')
    @include('main.sections._blog', ['showAll' => true])
@endsection
