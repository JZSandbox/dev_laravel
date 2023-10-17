@extends('layouts.app')
@section('dashboardtitle', 'Fryderyk Szafarczyk: Dashboard')
@section('dashboardheading', 'Dashboard')
@section('content')
<div class="container">
    <div class="dashboard_body">
        <div class="dashboard_body_heading">
            <div class="dashboard_body_heading_left">
                 Welcome back <span class="name">{{ auth()->user()->name }} </span>
            </div>
            <div class="dashboard_body_heading_right">
                <a href="/" class="btn btn-cstm-primary link">Back to Homepage</a>
            </div>
        </div>
        <div class="dashboard_body_inner">
            -
        </div>
        <div class="dashboard_body_footer">
            -
        </div>
    </div>
</div>
@endsection
