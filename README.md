# fakephp Animal provider

Plugin for [FakerPHP/Faker](https://github.com/FakerPHP/Faker)

## Installation

```shell
composer req gam6itko/fakephp-animal-provider
```

## Usage

```php
use Faker\Factory;
use Gam6itko\Faker\Provider\Animal;

$locale = 'en_US'
$generator = Factory::create($locale);
\Gam6itko\Faker\ProviderFactory::addProvider($generator, 'Animal', $locale)

echo $generator->animal() // 'cat'
echo $generator->adjectiveAnimal() // 'curious cat'
```
