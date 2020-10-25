<?php

if ('1' == $op) {
    include '../../mainfile.php';

    $suppr = '                                  ';

    $fp = fopen(XOOPS_ROOT_PATH . '/modules/mediashow/sql/audio.txt', 'r+b');

    fseek($fp, 0);

    fwrite($fp, $suppr);

    fseek($fp, 0);

    fwrite($fp, $file);

    fclose($fp);

    redirect_header('' . XOOPS_URL . '/index.php', 1, 'Media audio loading....');
} else {
    include '../../mainfile.php';

    $suppr = '                                  ';

    $fp = fopen(XOOPS_ROOT_PATH . '/modules/mediashow/sql/video.txt', 'r+b');

    fseek($fp, 0);

    fwrite($fp, $suppr);

    fseek($fp, 0);

    fwrite($fp, $file);

    fclose($fp);

    redirect_header('' . XOOPS_URL . '/index.php', 1, 'Media video loading...');
}
