<?php

namespace EWZ\Bundle\RedactorEditorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class EWZRedactorEditorExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('form.xml');
        $loader->load('twig.xml');

        $this->registerRedactorEditorParameters($config, $container);
    }

    private function registerRedactorEditorParameters($config, ContainerBuilder $container)
    {
        $container->setParameter('ewz_redactor_editor.options.autoinclude', !$config['autoinclude']);
        $container->setParameter('ewz_redactor_editor.options.base_path', $config['base_path']);
    }
}
