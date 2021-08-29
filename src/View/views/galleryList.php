<?php
echo 'Gallery List';
echo "<hr/>";
foreach ($data as $datum) {
 echo $datum['name']."**********".$datum['body']."<br>";
}