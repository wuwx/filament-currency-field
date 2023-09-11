<?php
namespace Wuwx\FilamentCurrencyField\Forms\Components;

use Filament\Forms\Components\Select;
use Money\Currencies\ISOCurrencies;

class CurrencySelect extends Select
{
    public function getOptions(): array
    {
        $currencies = [];
        foreach (new ISOCurrencies() as $currency) {
            $currencies[$currency->getCode()] = $currency->getCode();
        }
        return $currencies;
    }
}
