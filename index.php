<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Gift Stuff - <?php echo( ucfirst($page)); ?></title>
        <?php include_once("res/php/meta.php"); ?>
        <?php include_once("res/php/styles.php"); ?>
        <?php include_once("res/php/scripts.php"); ?>
    </head>
    <body>
        <header><?php include_once("res/php/header.php"); ?></header>
        <main>
            <?php
            if (file_exists('page/' . $page . '.php')) {
                include_once('page/' . $page . '.php');
            } else {
                include_once('res/php/404.php');
            }
            ?>
        </main>
        <footer><?php include_once("res/php/footer.php"); ?></footer>
    </body>
</html>