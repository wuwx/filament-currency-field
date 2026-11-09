<?php

namespace Wuwx\FilamentCurrencyField\Tests\Forms\Components;

use Wuwx\FilamentCurrencyField\Forms\Components\CurrencySelect;
use Wuwx\FilamentCurrencyField\Tests\TestCase;

class CurrencySelectTest extends TestCase
{
    public function test_returns_iso_currencies_keyed_by_code(): void
    {
        $options = CurrencySelect::make('currency')->getOptions();

        $this->assertArrayHasKey('USD', $options);
        $this->assertArrayHasKey('CNY', $options);
        $this->assertArrayHasKey('EUR', $options);
        $this->assertSame('USD', $options['USD']);
    }
}
