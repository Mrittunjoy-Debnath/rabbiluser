@extends('layout.app')
@section('title','home')
@section('content')

    @include('component.homebanner')

    @include('component.homeservice')

    @include('component.homecourse')

    @include('component.homeprojects')

    @include('component.homecontact')

    @include('component.homereview')
@endsection
