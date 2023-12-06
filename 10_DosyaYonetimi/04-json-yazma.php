<?php

$course = array(
  "title" => "Javascript Kursu",
  "description" => "ileri seviye js dersleri",
  "image" => "2.jpg"
);

echo $course["title"];


// array => Json string (Json Encode)
$jsonString = json_encode($course, JSON_PRETTY_PRINT);

$myFile = fopen("course2.json", "w");
fwrite($myFile, $jsonString);
fclose($myFile);
