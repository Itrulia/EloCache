# EloCache

EloCache adds sections to file base cache of Laravel4

## Installation

Add `itrulia/elo-cache` to `composer.json`.

    "itrulia/elo-cache": "dev-master"
    
Run `composer update` to pull down the latest version of EloCache. Now open up `app/config/app.php` and add the service provider to your `providers` array.

    'providers' => array(
        'Itrulia\EloCache\EloCacheServiceProvider',
    )

## Usage

Use it as you would normally do.
