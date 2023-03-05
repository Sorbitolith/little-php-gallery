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
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="./css/uikit.css" /> 

    <!-- UIkit JS -->
    <script src="./ukjs/uikit.min.js"></script>
    <script src="./ukjs/uikit-icons.min.js"></script>

    <!-- Simple CSS -->
    <link rel="stylesheet" type="text/css" href="./css/simple.css">

    <title><?php if (!empty($pageTitle)) { echo $pageTitle; } else {echo 'Titel'; } ?></title>
</head>
<body>
    <header>
        <div class="bb">
        <svg height="30px" version="1.1" viewBox="0 0 37 30" width="37px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
  <title>sfgbb-Logo</title>
  <desc>Created with Sketch.</desc>
  <defs></defs>
  <g fill-rule="evenodd" fill="none" id="Welcome" stroke-width="1" stroke="none">
    <g class="t-sekundaer__fill" fill="#ffffff" id="sfgbb-Logo">
      <path d="M9.17579914,14.3057143 C11.1368538,14.5 12.6621186,15.9328571 12.6621186,18.2885714 C12.6621186,21.2028571 10.6042217,23 7.238955,23 L4.54747351e-13,23 L4.54747351e-13,6 L6.97263893,6 C10.3379056,6 12.4200131,7.67571429 12.4200131,10.42 C12.4200131,12.63 11.1368538,13.9414286 9.17579914,14.3057143 Z M6.10105906,8.84142857 L3.9221094,8.84142857 L3.9221094,12.97 L6.10105906,12.97 C7.60211327,12.97 8.49790369,12.1928571 8.49790369,10.9057143 C8.49790369,9.61857143 7.62632383,8.84142857 6.10105906,8.84142857 Z M6.36737513,20.0128571 C7.82000824,20.0128571 8.71579866,19.1871429 8.71579866,17.7785714 C8.71579866,16.5157143 7.77158714,15.69 6.36737513,15.69 L3.9221094,15.69 L3.9221094,20.0128571 L6.36737513,20.0128571 Z M18.4941715,8.84142857 L16.3152219,8.84142857 L16.3152219,12.97 L18.4941715,12.97 C19.9952257,12.97 20.8910162,12.1928571 20.8910162,10.9057143 C20.8910162,9.61857143 20.0194363,8.84142857 18.4941715,8.84142857 Z M18.7604876,20.0128571 C20.2131207,20.0128571 21.1089111,19.1871429 21.1089111,17.7785714 C21.1089111,16.5157143 20.1646996,15.69 18.7604876,15.69 L16.3152219,15.69 L16.3152219,20.0128571 L18.7604876,20.0128571 Z M33.5136805,14.3057143 C35.4747352,14.5 37,15.9328571 37,18.2885714 C37,21.2028571 34.9421031,23 31.5768364,23 L24.3378814,23 L24.3378814,6 L31.3105203,6 C34.675787,6 36.7578945,7.67571429 36.7578945,10.42 C36.7578945,12.63 35.4747352,13.9414286 33.5136805,14.3057143 Z M30.4389405,8.84142857 L28.2599908,8.84142857 L28.2599908,12.97 L30.4389405,12.97 C31.9399947,12.97 32.8357851,12.1928571 32.8357851,10.9057143 C32.8357851,9.61857143 31.9642052,8.84142857 30.4389405,8.84142857 Z M30.7052565,20.0128571 C32.1578896,20.0128571 33.0536801,19.1871429 33.0536801,17.7785714 C33.0536801,16.5157143 32.1094685,15.69 30.7052565,15.69 L28.2599908,15.69 L28.2599908,20.0128571 L30.7052565,20.0128571 Z" id="BBB"></path>
    </g>
  </g>
</svg>
        </div>
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
