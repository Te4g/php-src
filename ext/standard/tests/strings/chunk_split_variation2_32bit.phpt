--TEST--
Test chunk_split() function : usage variations - unexpected large '$end' string argument variation 2
--SKIPIF--
<?php
if (PHP_INT_SIZE != 4) die("skip this test is for 32bit platform only");
?>
--FILE--
<?php
/* Prototype  : string chunk_split(string $str [, int $chunklen [, string $ending]])
 * Description: Returns split line
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

echo "*** Testing chunk_split() : unexpected large 'end' string argument variation 2 ***\n";

$a=str_repeat("B", 65537);
$b=1;
$c=str_repeat("B", 65537);
var_dump(chunk_split($a,$b,$c));
?>
--EXPECTF--
*** Testing chunk_split() : unexpected large 'end' string argument variation 2 ***

Fatal error: Possible integer overflow in memory allocation (65537 * 65537 + 65556) in %s on line %d
