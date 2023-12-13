<?php

declare(strict_types=1);

namespace Gam6itko\Faker;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Base;

class ProviderFactory
{
    /**
     * @return Base
     */
    public static function create(Generator $generator, string $provider, string $locale = Factory::DEFAULT_LOCALE)
    {
        $providerClassName = self::getProviderClassname($provider, $locale);
        return new $providerClassName($generator);
    }

    public static function addProvider(Generator $generator, string $provider, ?string $locale = Factory::DEFAULT_LOCALE): void
    {
        $generator->addProvider(self::create($generator, $provider, $locale));
    }

    /**
     * @throws  \InvalidArgumentException
     */
    private static function getProviderClassname(string $provider, string $locale): string
    {
        if ($providerClass = self::findProviderClassname($provider, $locale)) {
            return $providerClass;
        }
        // fallback to default locale
        if ($providerClass = self::findProviderClassname($provider, Factory::DEFAULT_LOCALE)) {
            return $providerClass;
        }
        // fallback to no locale
        if ($providerClass = self::findProviderClassname($provider)) {
            return $providerClass;
        }

        throw new \InvalidArgumentException(sprintf('Unable to find provider "%s" with locale "%s"', $provider, $locale));
    }

    protected static function findProviderClassname($provider, $locale = ''): ?string
    {
        $providerClass = 'Gam6itko\\Faker\\' . ($locale ? \sprintf('Provider\%s\%s', $locale, $provider) : sprintf('Provider\%s', $provider));

        if (\class_exists($providerClass)) {
            return $providerClass;
        }

        return null;
    }
}
