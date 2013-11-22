<?php
ini_set('xdebug.max_nesting_level', 1000000);
// Input file
$fileIn = file('data.txt');
$fileOut = file('result.txt');

// Output file
$fileWriter = "result.txt";
$handler = fopen($fileWriter, 'w+');

// Remove all non-numbers
$cleanFile = preg_replace('/[^0-9-.\/]/', '', $fileIn);

// Replace '' with '-'
foreach($cleanFile as &$value) {
    if($value == '' || is_float($value - $value%10)) {
        fwrite($handler, '-' . PHP_EOL);
    }
    else {
        fwrite($handler, factorial($value) . PHP_EOL);
    }
}
fclose($handler);

// Functions
function factorial($n) {
    if ($n === 0) return 1;
    else return $n*factorial($n-1);
}?>


<html>
<head>
    <title>Test task #1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
</html>
<body>
<div >
    <textarea readonly="readonly">
        <?php foreach($fileIn as $i) {echo $i;};?>
    </textarea>
</div>
<div>
    <textarea readonly="readonly">
        <?php foreach($fileOut as $k) {echo $k;};?>
    </textarea>
</div>

</body>






