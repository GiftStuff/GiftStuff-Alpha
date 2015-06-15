<?php
$page = isset($_GET['page']) && file_exists('page/' . $_GET['page'] . '.php') ? ucfirst($_GET['page']) : 'Home';
ob_start();
?>
<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Gift Stuff - <?php echo($page); ?></title>
	<?php
	include_once 'res/php/html/meta.php';
	include_once 'res/php/html/styles.php';
	include_once 'res/php/html/scripts.php';
	?>
    </head>
    <body>
        <header><?php include_once 'res/php/html/header.php'; ?></header>
        <main><?php include_once 'page/' . $page . '.php'; ?></main>
        <footer><?php include_once 'res/php/html/footer.php'; ?></footer>
    </body>
</html>
<?php
$dirty_html = ob_get_clean();

$tidy = new tidy;
$tidy->parseString($dirty_html, ['indent' => true], 'utf8');
$tidy->cleanRepair();
echo $tidy;
