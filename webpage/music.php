<?php
    $dir = "./songs/";
    $files = scandir($dir);
    echo "<pre>";
    print_r($files);
    echo "</pre>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link href="viewer.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>


<div id="listarea">
    <ul id="musiclist">
        <?php foreach($files as $file): ?>
            <?php if(!in_array($file, array(".", ".."))):?>
                <li class=<?=strpos($file, ".mp3") ? "mp3item" : "playlistitem"?>>
                    <a href="songs/<?=$file?>">
                        <?=$file?>
                        (<?=filesize($dir . $file);?> b)
                    </a>
                </li>
            <?php endif;?>
        <?php endforeach?>
        <li class="mp3item">
            <a href="songs/Be More.mp3">
                Be more.mp3
            </a>
        </li>
    </ul>
</div>
</body>
</html>
