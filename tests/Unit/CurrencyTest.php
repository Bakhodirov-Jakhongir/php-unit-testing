<?php

namespace Tests\Unit;

use App\Services\CurrencyService;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    public function test_convert_usd_to_eur()
    {
        $amount_in_usd = 100;
        $this->assertEquals(891, (new CurrencyService())->convert($amount_in_usd, 'usd', 'eur'));
    }

    public function test_convert_gbp_to_eur()
    {
        $amount_in_gbp = 100;
        $this->assertEquals(0, (new CurrencyService())->convert($amount_in_gbp, 'gbp', 'eur'));
    }

    public function test_convert_sum_to_eur()
    {
        $amount_in_sum = 89000;
        $this->assertEquals(0, (new CurrencyService())->convert($amount_in_sum, 'sum', 'eur'));
    }
}
