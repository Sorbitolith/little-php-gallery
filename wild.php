<?php 
    $pageTitle = basename(__FILE__, '.php'); 
    $fileTitle = basename(__FILE__ ) ; 
    include 'inc/header.inc.php';
    $directory = "images/$pageTitle";
    $images = glob("$directory/*.{jpg,jpeg,webp,png,gif}",GLOB_BRACE);
    if (!is_dir($directory) ) {
        echo '<h2>Warning</h2><article>No such directory: <b>' . $directory . '!</b></article>';
    } else {
        echo '<ul class="image-gallery">';
        shuffle($images);
        foreach ($images as $image) {
            echo '<li uk-lightbox><a href="' . $image . '"> <img  src="' . $image . '" alt="' . $image. '"></img></a></li>' . "\n";
           }
        echo '</ul>';
        }
?>
<?php include 'inc/footer.inc.php' ?>

