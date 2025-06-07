<?php
$data = json_decode(file_get_contents("php://input"), true);
$file = "card.json";
$card = json_decode(file_get_contents($file), true);
$card["pin_code"] = $data["pin_code"];
file_put_contents($file, json_encode($card, JSON_PRETTY_PRINT));
?>