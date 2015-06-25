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
        <header><?php require_once 'res/php/html/header.php'; ?></header>
        <main><?php require_once 'page/' . $page . '.php'; ?></main>
        <footer><?php require_once 'res/php/html/footer.php'; ?></footer>
    </body>
</html>