<?php

declare(strict_types=1);


use Gam6itko\Faker\Provider\Animal;
use Gam6itko\Faker\Test\AbstractTestCase;

/**
 * @coversDefaultClass \Gam6itko\Faker\Provider\Animal
 */
final class AnimalTest extends AbstractTestCase
{
    public function testAnimal(): void
    {
        self::assertSame('frog', $this->faker->animal());
    }

    public function testAdjectiveAnimal(): void
    {
        self::assertSame('beautiful pufferfish', $this->faker->adjectiveAnimal());
    }

    protected function getProviders(): iterable
    {
        yield new Animal($this->faker);
    }
}
