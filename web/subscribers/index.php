<?php

require_once("../functions.php");

// Default parameters if not specified
$defaults = [
    "color" => "brightgreen",
    "logo" => "youtube",
    "logoColor" => "white",
    "style" => "plastic",
    "format" => "short",
    "label" => "YouTube Subscribers",
    "labelColor" => "gray",
    "id" => "UCipSxT7a3rn81vGLw9lqRkg",
    "key" => "[YOUR API KEY HERE]" // you can put your API key here if you deploy it yourself
];

// Query for finding subscriber count in JSON
$query = "subscriberCount";

// Build the Shields.io url using the above parameters and JSON query
$url = getShieldURL($query, $defaults);

// Get response from the URL and output its contents
$response = curl_get_contents($url);

echo $response;
