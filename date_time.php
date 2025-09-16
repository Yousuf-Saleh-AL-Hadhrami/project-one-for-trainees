<?php 

// Unix epoch time (1970-01-01 00:00:00 UTC)

date_default_timezone_set("Asia/Muscat");
echo date_default_timezone_get();
echo "<br>";

// echo ini_get("date.timezone");
echo "<br>";

echo time();

echo "<br>";

echo date("Y-m-d [F|l] H:i:s", time() + 7 * 24 * 60 * 60);

echo "<br>";

echo date("Y-m-d [F|l] H:i:s", strtotime("-7 days"));


