<?php 
    $pageTitle = basename(__FILE__, '.php');
    $fileTitle = basename(__FILE__ ) ;
    $context = glob('content/*.{txt}', GLOB_BRACE);
    $dirs = array_filter(glob('images/*'), 'is_dir');
    include 'inc/header.inc.php';
?>

<?php
 foreach ($context as $text) { ?>
    <article>
        <h3><?php echo mb_substr(strtoupper(pathinfo($text, PATHINFO_FILENAME)), 4) ?></h3>
        <?php include($text); ?>
 </article>
<?php        
}
?>
<?php include 'inc/footer.inc.php' ?>