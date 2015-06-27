@extends('themes.master')

@section('content')
<?php $title = 'Sign Up'; ?>
@include('layouts/page-info')
@section('title', 'About Us')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="return" class="jumbotron">
                <h2>Return</h2>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg pull-right" href="#" role="button">Learn more</a></p>
            </div>
            <div id="privacy" class="jumbotron">
                <h2>Privacy</h2>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg pull-right" href="#" role="button">Learn more</a></p>
            </div>
            <div id="terms" class="jumbotron">
                <h2>Terms</h2>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg pull-right" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div>
</div>
@endsection