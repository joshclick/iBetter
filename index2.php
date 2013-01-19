<?php

$file = file_get_contents('http://espn.go.com/nfl/team/_/name/mia');

$array = explode('<li class="team-name', $file);


unset($array[0]);

$array[16] = substr($array[16], 50);

print_r($array);