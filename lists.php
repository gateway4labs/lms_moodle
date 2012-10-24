<?php

require_once("../../config.php");

global $DB; 

$entries_to_show = 50;

if (isset($_GET["q"])){
  $query = $_GET["q"];
} else {
  $query = "";
}

if (isset($_GET["start"])){
  $start = (int)$_GET["start"];
} else {
  $start = 0;
}

$number=0;

$searchterms = explode(" ", $query);

$courses=get_courses_search($searchterms, "fullname ASC", $start, $entries_to_show, $number);

$listcourses = array();

foreach ($courses as $course) 
  array_push($listcourses, array(
                                 "id" => $course->id,
                                 "name" => $course->shortname
                                 ));

if(count($listcourses) == 0)
  echo "{}";
else
  echo json_encode(array(
                         "start"    => $start,
                         "number"   => $number,
                         "per-page" => $entries_to_show,
                         "courses"  => $listcourses
                          ));
?>