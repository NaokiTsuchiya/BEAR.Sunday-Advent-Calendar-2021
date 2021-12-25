<?php

declare(strict_types=1);

namespace NaokiTsuchiya\BEARSundayAdventCalendar2021;

use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class MyInterceptor implements MethodInterceptor
{
    public function invoke(MethodInvocation $invocation)
    {
        echo 'Before echo' . PHP_EOL;
        $invocation->proceed();
        echo 'After echo' . PHP_EOL;
    }
}
