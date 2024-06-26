<?php

declare(strict_types=1);

// Your code
function getTransactionFiles(string $dirPath): array
{
    $files = [];

    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }

        $files[] = $dirPath . $file;
    }

    return $files;
}