<?php
$siteKey = file_get_contents('protected/g-recaptcha/public.txt');
$secret = file_get_contents('protected/g-recaptcha/private.txt');
$recaptcha = new \ReCaptcha\ReCaptcha($secret);

if (isset(filter_input(INPUT_POST, 'g-recaptcha-response'))) {
    $resp = $recaptcha->verify(filter_input(INPUT_POST, 'g-recaptcha-response'), filter_input(INPUT_SERVER, 'REMOTE_ADDR'));

    if ($resp->isSuccess()) {
	echo 'success';
    } else {
	echo 'declined';
    }
} else {
    echo 'not set';
}
?>


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
		    <div class="g-recaptcha" data-sitekey="<?php echo($siteKey); ?>"></div>
		    <button type="submit" class="btn btn-primary" />Login</button>
		</div>
	    </form>
	</div>
	<span class="col-md-1"></span>
    </div>
</div>