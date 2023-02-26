<?php 
    $pageTitle = basename(__FILE__, '.php');
    $fileTitle = basename(__FILE__ ) ;
    $context = glob('content/*.{txt}', GLOB_BRACE);
    $dirs = array_filter(glob('images/*'), 'is_dir');
    include 'inc/header.inc.php';
?>
<article>
    <h4>
    Überschrift
    </h4>
    Hallo dies ist mein erstes Galerieprojekt!
</article>
<?php
 foreach ($context as $text) { ?>
    <article>
        <h4><?php echo strtoupper(pathinfo($text, PATHINFO_FILENAME)) ?></h4>
        <?php include($text); ?>
 </article>
<?php        
}
?>
<?php include 'inc/footer.inc.php' ?>