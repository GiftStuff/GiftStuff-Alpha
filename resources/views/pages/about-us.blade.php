@extends('themes.master')

@section('content')

<?php $title = 'About-Us'; ?>
@include('layouts/page-info')

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" alt="500x500" src="http://lorempixel.com/300/300/">
    </div>
</div>

<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" alt="500x500" src="http://lorempixel.com/300/300/">
    </div>
</div>

<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" alt="500x500" src="http://lorempixel.com/300/300/">
    </div>
</div>
@endsection