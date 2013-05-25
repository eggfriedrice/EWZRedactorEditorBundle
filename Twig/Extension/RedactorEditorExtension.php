<?php

namespace EWZ\Bundle\RedactorEditorBundle\Twig\Extension;

class RedactorEditorExtension extends \Twig_Extension
{
    /**
     * @var boolean
     */
    protected $editorIncluded;

    /**
     * @var string
     */
    protected $basePath;

    /**
     * @var \Twig_Environment
     */
    private $environment;

    public function __construct($autoInclude, $basePath)
    {
        $this->editorIncluded = $autoInclude;
        $this->basePath = rtrim($basePath, '/');
    }

    /**
     * {@inheritDoc}
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ewz_redactor_editor';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'ewz_include_redactor_editor' => new \Twig_Function_Method($this, 'includeRedactorEditor', array('is_safe' => array('html'))),
        );
    }

    public function includeRedactorEditor()
    {
        if (!$this->environment->hasExtension('assets')) {
            return;
        }

        if ($this->editorIncluded) {
            $path = $this->environment
                ->getExtension('assets')
                ->getAssetUrl($this->basePath);

            echo sprintf('<link href="%s/redactor.css" media="all" rel="stylesheet" type="text/css" />', $path);
            echo sprintf('<script src="%s/redactor.js" type="text/javascript"></script>', $path);

            $this->editorIncluded = false;
        }
    }
}
