@extends('layout.app')
@section('content')
            @livewire('edithapusnovel', ['data' => $datanovel])
            @livewireScripts
@endsection

