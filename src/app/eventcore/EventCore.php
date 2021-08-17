<?php

class Event
{
    public static $eventlist = [];

    public static function register(String $event)
    {
        self::$eventlist[$event] = [];
    }

    public static function on(String $event, Closure $action)
    {
        array_push(self::$eventlist[$event], $action); 
    }

    public static function call(String $event, Array $data)
    {
        foreach (self::$eventlist[$event] as $action)
        {
            $action($data);
        }
    }

}

?>
