<?php
$rules = array(
    // check if it works
    'g-recaptcha-response' => 'required|recaptcha',
);
?>

@extends('themes.master')

@section('content')
<?php $title = 'Login'; ?>
@include('layouts/page-info')
<div class="page-header">
    <center><h1>Login<small> to GiftStuff</small></h1></center>
</div>

<div class="container-fluid">
    <div class="row">
        <span class="col-md-1"></span>
        <div class="col-md-10">
            <form class="col-md-10" method="post" action="/login" >
                <div class=" form-group">
                    <label>Email <input type="email" class="form-control" id="inputEmail" placeholder="Email" required /></label>
                    <label>Password <input type="password" class="form-control" id="inputPassword" placeholder="Password" required /></label>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" id='remeberMe' /> Remember me</label>
                    </div>
                    {!! Recaptcha::render() !!}
                    <button type="submit" class="btn btn-primary" />Login</button>
                </div>
            </form>
        </div>
        <span class="col-md-1"></span>
    </div>
</div>
@endsection