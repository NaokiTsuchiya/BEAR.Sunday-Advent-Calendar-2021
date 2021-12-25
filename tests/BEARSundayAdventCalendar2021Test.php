<?php

declare(strict_types=1);

namespace NaokiTsuchiya\BEARSundayAdventCalendar2021;

use PHPUnit\Framework\TestCase;

class BEARSundayAdventCalendar2021Test extends TestCase
{
    /** @var BEARSundayAdventCalendar2021 */
    protected $bEARSundayAdventCalendar2021;

    protected function setUp(): void
    {
        $this->bEARSundayAdventCalendar2021 = new BEARSundayAdventCalendar2021();
    }

    public function testIsInstanceOfBEARSundayAdventCalendar2021(): void
    {
        $actual = $this->bEARSundayAdventCalendar2021;
        $this->assertInstanceOf(BEARSundayAdventCalendar2021::class, $actual);
    }
}
