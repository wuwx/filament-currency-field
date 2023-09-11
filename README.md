# Filament Currency Field

A Currency select field for Laravel Filament.

## Installation

```bash
composer require wuwx/filament-currency-field:"^3.0"
```

## Usage

### Form Field

Add to your Filament resource:

```php
use Wuwx\FilamentCurrencyField\Forms\Components\CurrencySelect;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
            CurrencySelect::make('currency'),
            // ...
        ]);
}
```
