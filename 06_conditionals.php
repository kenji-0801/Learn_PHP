<?php

$age = 20;
$salary = 300000;

// 1. if condition
if ($age < 22) {
  // 1.1 Without curly braces { }
  echo 'You are young man!!<br>';
}

// 2. if condition - else
if ($age < 22) {
  echo 'You are young man!!<br>';
} else {
  echo 'You are not young man!!<br>';
}

// 3. if condition1 AND condition2
if ($age < 22 && $salary > 500000) {
  echo 'You are young AND rich<br>';
}

// 4. if condition1 OR condition2
if ($age < 22 || $salary > 500000) {
  echo 'You are young OR rich<br>';
}

// 5. if condition1 - elseif condition2 - else
if ($age < 22) {
  echo 'You are young man!!<br>';
} elseif ($age > 60) {
  echo 'You are old<br>';
} else {
  echo "You are not young, but not old also<br>";
}

// 6. if condition1 and condition2 - elseif condition1 and condition2 - else
if ($age < 22 && $salary >= 500000) {
  echo 'You are young man AND rich!!<br>';
} elseif ($age < 22 && $salary < 500000) {
  echo "You are young, and not so rich<br>";
} elseif ($age > 60 && $salary >= 500000) {
  echo 'You are old, but rich<br>';
} elseif ($age > 60 && $salary < 500000) {
  echo 'You are old and NOT rich also<br>';
}
