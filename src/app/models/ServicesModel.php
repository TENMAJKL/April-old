<?php

/**
 *
 * Service model
 * -> model for services and their statuses
 *
 * @param String $name
 * @param Array $info
 *
 * */
class Service
{
    /**
     *
     * Global status actions
     * ====================
     *
     * */

    /**
     * Icon status classes
     * */
    private const CLASSES = [1 => "check", 0 => "x"];    

    /**
     *
     * Returns all saved services
     *
     * @return Array
     *
     * */
    public static function all()
    {
        $manager = new DataManager("services");
        $data = $manager->get();

        $converted = [];

        foreach ($data as $name => $info)
        {
            $converted[$name] = new Service($name, $info);
        }

        return $converted;
    }

    /**
     *
     * Returns service by name
     *
     * @param String $name
     *
     * @return Service
     *
     * */
    public static function name(String $name)
    {
        $manager = new DataManager("services");
        $data = $manager->get();
        $data = isset($data[$name]) ? $data[$name] : [];

        return new Service($name, $data);

    }
    
    /**
     *
     * Adds service by name
     *
     * @param String $name
     * @param String $host
     * @param int $status (1=online, 0=offline)
     *
     * */
    public static function create(String $name, String $host, int $status=1)
    {
        $manager = new DataManager("services");
        $data = $manager->get();
        $data[$name] = ["host" => $host, "status" => $status];
        $manager->set($data);
    }

    /**
     *
     * Single status actions
     * =====================
     *
     * */

    /**
     * Service name
     * */
    public $name;

    /**
     * Service host
     * */
    public $host;

    /**
     * Service status
     * */
    public $status;

    /**
     * Status icon class
     * */
    public $class;

    public function __construct(String $name, Array $info)
    {
        $this->name = $name;
        $this->host = $info["host"];
        $this->status = $info["status"];
        $this->class = self::CLASSES[$this->status]; 
    }

    /**
     *
     * Edits service parameter
     *
     * @param mixed $key
     * @param mixed $value
     *
     * */
    public function edit($key, $value)
    {
        if ($key == "name")
            return;
        $manager = new DataManager("services");
        $data = $manager->get();
        $data[$this->name][$key] = $value;
        $manager->set($data);
        
        $this->$key = $value;
    }
}

?>
