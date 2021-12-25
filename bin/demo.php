<?php

use NaokiTsuchiya\BEARSundayAdventCalendar2021\B;
use NaokiTsuchiya\BEARSundayAdventCalendar2021\MyInterceptor;
use Ray\Aop\Bind;
use Ray\Aop\Weaver;

require __DIR__ . '/../vendor/autoload.php';

$bind = (new Bind())->bindInterceptors('echo', [new MyInterceptor()]);
$weaver = new Weaver($bind, __DIR__ . '/tmp');
$b = $weaver->newInstance(B::class, []);
assert($b instanceof B);
$b->echo();
