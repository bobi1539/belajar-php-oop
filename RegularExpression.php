<?php 

$matches = [];

$result = (bool) preg_match_all("/ucup|otong|edi/i", "Ucup Surucup Siregar", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing bangsat!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Ucup Surucup Siregar, Programmer, Zaman-Now");

var_dump($result);
