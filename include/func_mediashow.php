<?php

function browse($pDirectory, $pExtension)
{
    if ($handle = opendir($pDirectory)) {
        while (false !== ($file = readdir($handle))) {
            $getExt = explode('.', $file);

            $countExt = count($getExt);

            $fExt = $countExt - 1;

            $myExt = $getExt[$fExt];

            if (($myExt == $pExtension) && ('.' != $file) && ('..' != $file)) {
                $files[] = $file;
            }
        }
    }

    return $files;
    closedir($handle);
}


