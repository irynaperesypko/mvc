<?php
echo 'Gallery List';
echo "<hr/>";
foreach ($data as $datum) {
 echo $datum['title']."**********".$datum['description']."<br>";
}