<?php


function check()
{
    $services = Service::all();
    foreach ($services as $service => $data)
    {
        $status = getStatus($data->host);
        $service = Service::name($service);
        $saved_status = $service->status;
        if ($status != $saved_status)
        {
            $service->edit("status", $status);
            Event::call("status_change", [$service]);
        }
    }
}


?>
