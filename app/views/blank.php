<?php #$view->extend('base.html.php') ?>


Hello, <?php echo $firstname ?>!


<?php echo $view->render('base.html.php', array('title'=>'this is the title')) ?>