# Filament Currency Field

[![tests](https://github.com/wuwx/filament-currency-field/actions/workflows/tests.yml/badge.svg)](https://github.com/wuwx/filament-currency-field/actions/workflows/tests.yml)

A Currency select field for Laravel Filament.

## Requirements

- PHP 8.1+
- Filament 3, 4 or 5

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

Options are the ISO 4217 currency codes, so the field stores the code (e.g. `USD`).

## Testing

```bash
composer test
```
