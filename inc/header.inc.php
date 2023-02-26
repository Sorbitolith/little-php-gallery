<?php
    $projectTitle = 'Tiny Gallery';
    $files = glob('*.{php}', GLOB_BRACE);
    $navclass = 'class="pass"';

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./css/simple.css">

    <title><?php if (!empty($pageTitle)) { echo $pageTitle; } else {echo 'Titel'; } ?></title>
</head>
<body>
    <header>
        <h1><?php if (!empty($projectTitle)) { echo $projectTitle; } else {echo 'Titel'; } ?></h1>
        <nav>
            <a <?php if ($fileTitle === 'index.php'): ?> class="active" <?php endif; ?>href="./">HOME</a>
            <?php
                foreach($files as $file) {

                if ($file !== 'index.php') {
                    $filename = strtoupper(pathinfo($file, PATHINFO_FILENAME)); ?>

                        <a <?php if ($fileTitle === $file): ?> class="active" <?php endif; ?> href="<?php echo $file ?>"><?php echo $filename; ?></a>
<?php            
                }

                }
                ?>
        </nav>
    </header>

    <main>
        <h2>
            <?php
            if (!empty($pageTitle)) {
                
                if ($pageTitle !== 'index') {
                    echo strtoupper($pageTitle);
                } 
                else {
                    echo strtoupper('Home');
                }
            }
            else {
                echo 'Titel'; 
            } ?>
        </h2>
