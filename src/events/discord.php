<?php

/** Testing */

Event::on("status_change", function($data) {
    $curl = curl_init();
    $service = $data[0]->name;
    $status = $data[0]->status;
    curl_setopt_array($curl, [
        CURLOPT_URL => "Webook_url",
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => "{
        \"content\": \"Status of $service changed to $status\"
        }",
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json"
        ]

    ]);
    $res = curl_exec($curl);
    curl_close($curl);
});

?>
