<?php

/**
 * @link http://getbootstrap.com/components/#glyphicons Bootstrap Glyph List
 *
 * @param string $name Name of the page to be added to navigation bar
 * @param string $location Relative URL
 * @param string $glyph [optional] A glyph from the glyph list to add an icon to the menu item
 *
 * @return string Navigation menu item
 */
function addPage($name, $location = null, $glyph = null) {
    global $page;
    return sprintf('<li%s><a href="/%s">%s%s</a></li>', $location == strtolower($page) ? ' class="active"' : '', isset($location) ? $location : $name, isset($glyph) ? '<span class="glyphicon glyphicon-' . $glyph . '"></span> ' : '', $name);
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
		<?php echo(addPage('Home')); ?>
		<li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Test<span class="caret"></span></a>
		    <ul class="dropdown-menu">
			<?php
			echo(addPage('1', 'test/1'));
			echo (addPage('1', 'test/2'));
			echo (addPage('3', 'test/3'));
			echo (addPage('4', 'test/4'));
			echo (addPage('5', 'test/5'));
			?>
		    </ul>
		</li>
		<?php
		echo addPage('Support');
		echo addPage('About-Us');
		?>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
		<?php
		echo addPage('Sign-Up', 'user');
		echo addPage('Login', 'log-in')
		?>
	    </ul>
	</div>
    </div>
</nav>