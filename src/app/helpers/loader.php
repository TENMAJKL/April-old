<?php

function app_loader($dir)
{
    foreach (scandir($dir) as $file)
    {
        $path = $dir.DIRECTORY_SEPARATOR.$file;
        if (in_array($file, [".", ".."]))
            continue;
        
        if (str_ends_with($file, ".php"))
            require_once($path);
        else if (is_dir($path))
            app_loader($path);
    }
}

?>
