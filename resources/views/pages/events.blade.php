@extends('themes.master')

@section('content')
<?php $title = 'Events'; ?>
@include('layouts/page-info')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <img alt="Event Image" src="http://lorempixel.com/1400/1400/" class="img-rounded img-responsive" />
            <div class="row">
                <div class="col-md-12">
                    <h2>Attending</h2>
                    <p>Jim, John, Leroy and 27 others</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="jumbotron">
                <h2>Event Name</h2>
                <p>Event description</p>
                <p><a class="btn btn-primary btn-large" href="#">Read more</a></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-muted text-center">Comments and Stuff</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection