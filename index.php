<?php
$page = filter_input(INPUT_GET, 'page') !== null && file_exists(sprintf('page/%s.php', filter_input(INPUT_GET, 'page'))) ? ucfirst(filter_input(INPUT_GET, 'page')) : 'Home';
?>
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
        <header><?php require_once 'res/php/html/header.php'; ?></header>
        <main><?php require_once sprintf('page/%s.php', $page); ?></main>
        <footer><?php require_once 'res/php/html/footer.php'; ?></footer>
    </body>
</html>