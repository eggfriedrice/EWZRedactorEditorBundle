<?php

namespace EWZ\Bundle\RedactorEditorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use EWZ\Bundle\RedactorEditorBundle\DependencyInjection\Compiler\TwigFormPass;

class EWZRedactorEditorBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new TwigFormPass());
    }
}
