<?php $page = isset($_GET['page']) && file_exists('page/' . $_GET['page'] . '.php') ? ucfirst($_GET['page']) : 'Home'; ?>
<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Gift Stuff - <?php echo($page); ?></title>
	<?php
	require_once 'res/php/html/meta.php';
	require_once 'res/php/html/styles.php';
	require_once 'res/php/html/scripts.php';
	?>
    </head>
    <body>
<<<<<<< HEAD
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
=======
        <header><?php require_once 'res/php/html/header.php'; ?></header>
        <main><?php require_once 'page/' . $page . '.php'; ?></main>
        <footer><?php require_once 'res/php/html/footer.php'; ?></footer>
>>>>>>> d8def143b35c00641dd787ba9eae296fdea65031
    </body>
</html>