<?php

function env($key)
{
    $s = DIRECTORY_SEPARATOR;
    $content = file_get_contents(__DIR__."{$s}..{$s}..{$s}.env");
    parse_str(str_replace("\n", "&", $content), $result);

    return $result[$key];
}

?>
