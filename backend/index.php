<?php

$greets = $_GET["name"] ?? "World";

header("Content-type: application/json");
echo json_encode(["greetings" => sprintf("Hello, %s!", $greets)]);
