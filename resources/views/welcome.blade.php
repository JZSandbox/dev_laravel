@extends('homepage.master.header')
@section('title', 'Welcome')
@section('body')
@include('homepage.home.welcome')
@include('homepage.home.exp')
@include('homepage.home.intro')
@include('homepage.home.sneak')
@include('homepage.home.about')
@include('homepage.home.contact')
@include('homepage.master.footer')
@endsection
