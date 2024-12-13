@extends('backend_layouts.app')

@section('title', 'Dashboard')

@section('content')
    Selamat datang <strong>{{ ucwords(Auth::user()->name) }}</strong>, semoga harimu menyenangkan
@endsection
