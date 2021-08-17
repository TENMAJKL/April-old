<?php

class DataManager
{

    private $file;
    private $path;

    public function __construct($filename)
    {
        $this->path = PROJECT_DIR . DIRECTORY_SEPARATOR . env("DATA_DIR");
        $this->file = $this->path.$filename.".tree";
    }

    public function create()
    {
        fopen($this->file, "w");
    }

    public function get()
    {
        return json_decode(file_get_contents($this->file), true);
    }

    public function set(Array $data)
    {
        $file = fopen($this->file, "w");
        fwrite($file, json_encode($data));
        fclose($file);
    }
}

?>
