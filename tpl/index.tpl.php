<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <title><?=$keres['szoveg']?></title>
    </head>
    <body>
        <header>
        </header>
        <nav>
            <ul>
                <?php foreach($oldalak as $url => $link) { ?>
                    <li><a href="<?php  echo "?oldal=" . $url ?>"><?= $link['szoveg'] ?> </a> </li>
                <?php } ?>
            </ul>
        </nav>
        <article>
        <?php include("./tpl/pages/{$keres['fajl']}.tpl.php"); ?>
        </article>
    </body>
</html>