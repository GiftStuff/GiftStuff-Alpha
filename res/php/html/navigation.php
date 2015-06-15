<?php

function getActivePage($input, $glyph = null) {
    global $page;
    if ($input == $page) {
	echo '<li class="active">';
    } else {
	echo '<li>';
    }
    echo '<a href=/' . strtolower(str_replace(' ', '', $input)) . '>';
    if (isset($glyph)) {
	echo '<span class="glyphicon glyphicon-' . $glyph . '"></span> ';
    }
    echo $input . '</a></li>';
}
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">GiftStuff</a>
	</div>

	<div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav">
		<?php echo(getActivePage('Home')); ?>
		<li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
		    <ul class="dropdown-menu">
			<li><a href="#">Page 1-1</a></li>
			<li><a href="#">Page 1-2</a></li>
			<li><a href="#">Page 1-3</a></li>
		    </ul>
		</li>
		<?php echo getActivePage('Support') ?>
		<?php echo getActivePage('About-Us') ?>
	    </ul>

	    <ul class="nav navbar-nav navbar-right">
		<?php echo getActivePage('Sign Up', 'user') ?>
		<?php echo getActivePage('Login', 'log-in') ?>
	    </ul>
	</div>
    </div>
</nav>