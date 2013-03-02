<?php


$file = file_get_contents("http://espn.go.com/nfl/team/_/name/nyj" );
$boxScoreDiv= explode('<div class="scoring', $file);
$boxScoreLine= explode('<a', $boxScoreDiv[1]);
$boxScoreSection= explode('href="',$boxScoreLine[4]);
$boxScoreLink= explode('">', $boxScoreSection[1]);
$boxScoreLink= "http://espn.go.com$boxScoreLink[0]";
print_r($boxScoreLink);