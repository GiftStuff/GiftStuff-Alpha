<div class="navbar-wrapper">
    <div class="container">
        <nav class="set navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Gift Stuff</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li<?php
                        if ("home" == $page) {
                            echo ' class="active"';
                        }
                        ?>><a href="?page=home">Home</a></li>
                        <li<?php
                        if ("events" == $page) {
                            echo ' class="active"';
                        }
                        ?>><a href="?page=events">Events</a></li>
                        <li<?php
                        if ("signup" == $page) {
                            echo ' class="active"';
                        }
                        ?>><a href="?page=signup">Sign Up</a></li>
                        <li<?php
                        if ("support" == $page) {
                            echo ' class="active"';
                        }
                        ?>><a href="?page=support">Support</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="?page=notifications">Notifications</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>