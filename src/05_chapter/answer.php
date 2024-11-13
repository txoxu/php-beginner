<?php
function hoge(&$number) {
  $number++;
  return $number;
}

$value = 5;

print "\n";
print hoge($value);
print $value;
