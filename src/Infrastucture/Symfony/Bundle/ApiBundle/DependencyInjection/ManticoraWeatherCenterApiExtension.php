<?php

namespace Manticora\WeatherCenter\Infrastucture\Symfony\Bundle\ApiBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ManticoraWeatherCenterApiExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        if($config['default'] == 'weather_underground'
            && isset($config['weather_underground']['key'])
            && isset($config['weather_underground']['lang'])) {

            $container->setParameter(
                'manticora_weather_center_api.weather_underground.key',
                $config['weather_underground']['key']
            );

            $container->setParameter(
                'manticora_weather_center_api.weather_underground.language',
                $config['weather_underground']['lang']
            );

            $container->setAlias('manticora_weather_center_api.service', 'manticora_weather_center_api.'.$config['default']);
        }


    }
}
