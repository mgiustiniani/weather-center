<?php

namespace Manticora\WeatherCenter\Infrastucture\Symfony\Bundle\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('manticora_weather_center_api');

        $rootNode
            ->children()
                ->scalarNode('default')
                    ->defaultValue('in_memory')
                ->end()
                ->arrayNode('weather_underground')
                    ->children()
                        ->scalarNode('key')
                    ->end()
                        ->scalarNode('lang')
                            ->defaultValue('EN')
                    ->end()
                ->end()
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
