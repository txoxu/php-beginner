<?php
$array = [
    'php_framework' => 'Laravel',
    'ruby_framework' => 'Ruby on Rails',
    'python_framework' => 'Django'
];
print "\n";

foreach ($array as $key => $value) {
    if ($value <= 'Laravel') {
      continue;
    }
    print "{$value}";
    print "\n";
}

print "\n";
?>
