<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once "libs/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;
$scss = new Compiler();
$sass = file_get_contents("scss/40.scss");
$style = $scss->compile($sass);
file_put_contents("css/40.css",$style);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>40</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/40.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/e9ddabe444.js" crossorigin="anonymous"></script>
    </head>
    <body >
        <!-- content -->
        <?php include './40-content.php'; ?>
    </body>
</html>