<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?=$style ?>">
        <title><?=$keres['szoveg']?></title>
    </head>
    <body>
        <header>
        <nav>
            <ul>
                <?php foreach($oldalak as $url => $link) { ?>
                    <li><a href="<?php  echo "?oldal=" . $url ?>"><?= $link['szoveg'] ?> </a> </li>
                <?php } ?>
            </ul>
        </nav>
        <h1>Bárcsak úgy élhetnék ahogy élek</h1>
        <h3>Költség nyilvántartó site</h3>
        </header>
        
        <article>
        <?php include("./tpl/pages/{$keres['fajl']}.tpl.php"); ?>
        </article>
        
    </body>
</html>