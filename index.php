<?php
include 'classes/ageValidator.php';

$age = readline("type your age:");
$ageValidator = new ageValidator($age);
$ageValidator->validate();
