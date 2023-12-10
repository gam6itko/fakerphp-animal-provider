<?php

declare(strict_types=1);

namespace Gam6itko\Faker\Provider;

use Faker\Extension;
use Faker\Provider\Base;

class Animal extends Base
{
    public const TYPE_HE = 'he';
    public const TYPE_SHE = 'she';
    public const TYPE_IT = 'it';

    /**
     * @var array<self::TYPE_*, string>
     */
    protected static array $animal = [
        self::TYPE_IT => [
            // Amphibian
            'frog',
            'iguana',
            'newt',
            'salamander',
            'toad',
            // Mammal
            'cat',
            'cheetah',
            'cow',
            'dog',
            'donkey',
            'giraffe',
            'goat',
            'horse',
            'leopard',
            'lion',
            'monkey',
            'otter',
            'panda',
            'panther',
            'pig',
            'rabbit',
            'sheep',
            'tiger',
            'walrus',
            'wolf',
            //Reptile
            'alligator',
            'basilisk',
            'chameleon',
            'crocodile',
            'gecko',
            'lizard',
            'snake',
            'tortoise',
            'turtle',
            // Fish
            'brill',
            'carp',
            'crab',
            'eel',
            'haddock',
            'herring',
            'pike',
            'pufferfish',
            'salmon',
            'sardines',
            'shark',
            'tuna',
            'whale',
            // Bird
            'crow',
            'dove',
            'eagle',
            'emu',
            'flamingo',
            'hen',
            'ostrich',
            'peacock',
            'pigeon',
            'stork',
            'vulture',
        ],
    ];

    /**
     * @var array<self::TYPE_*, string>
     */
    protected static array $adjective = [
        self::TYPE_IT => [
            // Appearance
            'adorable',
            'beautiful',
            'clean',
            'drab',
            'elegant',
            'fancy',
            'glamorous',
            'handsome',
            'long',
            'magnificent',
            'old-fashioned',
            'plain',
            'quaint',
            'sparkling',
            'unsightly',
            'wide-eyed',
            // Color
            'red',
            'orange',
            'yellow',
            'green',
            'blue',
            'purple',
            'gray',
            'black',
            'white',
            // Condition
            'alive',
            'better',
            'careful',
            'clever',
            'dead',
            'easy',
            'famous',
            'gifted',
            'helpful',
            'important',
            'inexpensive',
            'mushy',
            'odd',
            'powerful',
            'rich',
            'shy',
            'tender',
            'uninterested',
            'vast',
            'wrong',
            // Feeling Bad
            'angry',
            'clumsy',
            'defeated',
            'embarrassed',
            'fierce',
            'grumpy',
            'helpless',
            'jealous',
            'lazy',
            'mysterious',
            'nervous',
            'panicky',
            'repulsive',
            'scary',
            'thoughtless',
            'uptight',
            'worried',
            // Feeling Good
            'agreeable',
            'brave',
            'calm',
            'delightful',
            'eager',
            'faithful',
            'gentle',
            'happy',
            'jolly',
            'kind',
            'lively',
            'nice',
            'obedient',
            'proud',
            'relieved',
            'silly',
            'thankful',
            'victorious',
            'zealous',
            // Shape
            'broad',
            'chubby',
            'crooked',
            'curved',
            'deep',
            'high',
            'low',
            'narrow',
            'skinny',
            'round',
            'shallow',
            'square',
            'straight',
            'wide',
            //Size
            'big',
            'colossal',
            'fat',
            'gigantic',
            'great',
            'huge',
            'immense',
            'large',
            'little',
            'mammoth',
            'massive',
            'puny',
            'scrawny',
            'short',
            'small',
            'tall',
            'teeny',
            'teeny-tiny',
            'tiny',
            // Time
            'deafening',
            'faint',
            'hissing',
            'loud',
            'melodic',
            'noisy',
            'purring',
            'quiet',
            'raspy',
            'screeching',
            'thundering',
            'voiceless',
            'whispering',
            // Taste
            'ancient',
            'brief',
            'early',
            'fast',
            'late',
            'modern',
            'old',
            'quick',
            'rapid',
            'slow',
            'young',
            // Touch
            'bitter',
            'delicious',
            'fresh',
            'greasy',
            'juicy',
            'hot',
            'icy',
            'loose',
            'nutritious',
            'prickly',
            'rainy',
            'rotten',
            'salty',
            'sticky',
            'strong',
            'sweet',
            'tasteless',
            'weak',
            'wet',
            'wooden',
            'yummy',
            // Quantity
            'boiling',
            'breeze',
            'bumpy',
            'chilly',
            'cold',
            'cool',
            'creepy',
            'cuddly',
            'curly',
            'damaged',
            'damp',
            'dirty',
            'dusty',
            'freezing',
            'warm',
        ],
    ];

    public function animal(?int $type = null): string
    {
        $type ??= Extension\Helper::randomElement(\array_keys(static::$animal));
        \assert(\in_array($type, [self::TYPE_HE, self::TYPE_SHE, self::TYPE_IT], true));

        return static::randomElement(static::$animal[$type]);
    }

    public function adjectiveAnimal(?int $type = null): string
    {
        $type ??= Extension\Helper::randomElement(\array_keys(static::$adjective));
        \assert(\in_array($type, [self::TYPE_HE, self::TYPE_SHE, self::TYPE_IT], true));

        return \sprintf(
            '%s %s',
            static::randomElement(static::$adjective[$type]),
            static::randomElement(static::$animal[$type]),
        );
    }
}
