<?php

declare(strict_types=1);

namespace ru_RU;

use Gam6itko\Faker\Provider\ru_RU\Animal;
use Gam6itko\Faker\Test\AbstractTestCase;

final class AnimalTest extends AbstractTestCase
{
    public function testAnimal(): void
    {
        self::assertSame('лягушка', $this->faker->animal());
    }

    public function testAdjectiveAnimal(): void
    {
        self::assertSame('аппетитная селёдка', $this->faker->adjectiveAnimal());
    }

    protected function getProviders(): iterable
    {
        yield new Animal($this->faker);
    }
}
