<?php

use Novo\Users\Person;
use Novo\Business;
use Novo\Staff;

$jeff = new Person('Jeff');
$mike = new Person('Mike');

$staff = new Staff([$jeff]);
$business = new Business($staff);

$business->hire($mike);
$business->hire(new Person('James Henry'));

//var_dump($staff);
//var_dump($business);
var_dump($staff->getMembers());