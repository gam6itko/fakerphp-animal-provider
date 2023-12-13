<?php

declare(strict_types=1);

namespace Gam6itko\Faker\Test;

use Faker\Factory;
use Faker\Generator;
use Gam6itko\Faker\Provider\Animal as DefaultAnimal;
use Gam6itko\Faker\Provider\ru_RU\Animal as ruRUAnimal;
use Gam6itko\Faker\ProviderFactory;
use PHPUnit\Framework\TestCase;

final class ProviderFactoryTest extends TestCase
{
    /**
     * @dataProvider dataCreate
     */
    public function testCreate(string $expectedClass, string $providerClass, ?string $locale = null): void
    {
        $generator = new Generator();
        $provider = ProviderFactory::create($generator, $providerClass, $locale ?? Factory::DEFAULT_LOCALE);
        self::assertInstanceOf($expectedClass, $provider);
    }

    public static function dataCreate(): iterable
    {
       yield [
           ruRUAnimal::class,
           'Animal',
           'ru_RU',
       ];

        yield [
            DefaultAnimal::class,
            'Animal',
            'en_US',
        ];

        yield [
            DefaultAnimal::class,
            'Animal',
        ];
    }
}
