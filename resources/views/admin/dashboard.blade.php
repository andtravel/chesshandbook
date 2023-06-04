@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Admin Panel</h1>
@stop

@section('content')
    <p>Content</p>
    <div class="cbreplay" data-url="{{asset('chess-games/Nakamura-Carlsen.pgn')}}">
    </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://pgn.chessbase.com/CBReplay.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
@stop

@section('js')
    <script src="https://pgn.chessbase.com/jquery-3.0.0.min.js"></script>
    <script src="https://pgn.chessbase.com/cbreplay.js"></script>
@stop
