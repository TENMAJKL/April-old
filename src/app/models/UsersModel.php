<?php

class User
{

    public static function all()
    {
        $manager = new DataManager("users");
        $data = $manager->get();

        $result = [];
        foreach ($data as $name => $user_data)
            array_push($result, new User($name, $user_data));

        return $result;
    }

    public static function name(String $name)
    {
        $manager = new DataManager("users");

        return new User($name, $manager->get()[$name]);
    }

    public static function create(String $name, String $password, String $created_at, int $active=1)
    {
        $user_data = [
            "password" => $password,
            "created_at" => $created_at,
            "active" => $active
        ];

        $manager = new DataManager("users");

        $data = $manager->get();
        $data[$name] = $user_data;
        $manager->set($data);

        return new User($name, $user_data);
    }

    public $name;

    public $password;

    public $salt;

    public $created_at;

    public $active;

    public function __construct(String $name, Array $data)
    {
        $this->name = $name;
        
        $password = explode("$", $data["password"]);
        $this->password = $password[1];
        $this->salt = $password[0];

        $this->created_at = $data["created_at"];
        $this->active = $data["active"]; 
        
    }

    public function edit(String $key, $value)
    {
        $manager = new DataManager("users");

        $data = $manager->get();
        $data[$this->name][$key] = $value;
        $manager->set($data);

        $this->$key = $value; 

        return $this;
    }

    public function delete()
    {
        $manager = new DataManager("users");
        $data = $manager->get();
        unset($data[$this->name]);
        $manager->set($data);
    }
}

?>
