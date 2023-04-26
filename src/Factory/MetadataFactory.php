<?php

namespace App\Factory;

use App\Entity\Metadata;
use App\Repository\MetadataRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Metadata>
 *
 * @method        Metadata|Proxy create(array|callable $attributes = [])
 * @method static Metadata|Proxy createOne(array $attributes = [])
 * @method static Metadata|Proxy find(object|array|mixed $criteria)
 * @method static Metadata|Proxy findOrCreate(array $attributes)
 * @method static Metadata|Proxy first(string $sortedField = 'id')
 * @method static Metadata|Proxy last(string $sortedField = 'id')
 * @method static Metadata|Proxy random(array $attributes = [])
 * @method static Metadata|Proxy randomOrCreate(array $attributes = [])
 * @method static MetadataRepository|RepositoryProxy repository()
 * @method static Metadata[]|Proxy[] all()
 * @method static Metadata[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Metadata[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Metadata[]|Proxy[] findBy(array $attributes)
 * @method static Metadata[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Metadata[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class MetadataFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'code' => self::faker()->regexify('[A-Z]{5}[0-4]{3}'),
            'content' => self::faker()->sentence(8),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Metadata $metadata): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Metadata::class;
    }
}
