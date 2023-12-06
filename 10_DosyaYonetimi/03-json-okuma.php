<?php

$myFile = fopen("course.json", "r");
$fileSize = filesize("course.json");

$jsonString = fread($myFile, $fileSize);

echo "<pre>";
echo $jsonString;
echo "</pre>";
echo "<br>";
echo gettype($jsonString);  // string
echo "<br>";
//echo $jsonString["title"];    // string'de array işlemleri yapılmadığı için hata alırız
echo "<br>";

// string to array => Json Decode
$jsonArray = json_decode($jsonString, true);
echo $jsonArray["title"];
echo "<br>";
echo $jsonArray["description"];
echo "<br>";
echo $jsonArray["image"];
echo "<br>";
