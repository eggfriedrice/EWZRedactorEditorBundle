EWZRedactorEditorBundle
=======================

This bundle integrates a jQuery based WYSIWYG-editor called [Redactor](http://imperavi.com/redactor) into the Symfony2 Form component.
It automatically registers the ``ewz_redactor_editor`` form type.

## Screenshot
![Redactor in action](https://github.com/excelwebzone/EWZRedactorEditorBundle/raw/master/redactor-js.png)

## Installation

### Using Composer (recommended)

To install EWZRedactorEditorBundle with Composer, just add the following to your
`composer.json` file:

```js
// composer.json
{
    // ...
    "require": {
        // ...
        "excelwebzone/redactor-editor-bundle": "dev-master"
    }
}
```

Then, you can install the new dependencies by running Composer's ``update``
command from the directory where your ``composer.json`` file is located:

```bash
$ php composer.phar update
```

Now, Composer will automatically download all required files, and install them
for you. All that is left to do is to update your ``AppKernel.php`` file, and
register the new bundle:

```php
<?php

// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new EWZ\Bundle\RedactorEditorBundle\EWZRedactorEditorBundle(),
    // ...
);
```


# Usage #

```php
/* @var $builder \Symfony\Component\Form\FormBuilderInterface */

$builder->add('body', 'ewz_redactor_editor', array(
    'options' => array()
));
```

Above code will create textarea element that will be replaced with redactor editor instance.
Textarea value is updated on every single change in redactor editor.

# Configuration #

> This section is optional, you dont need to configure anything and your redactor_editor form type will still work perfectly fine

There are also few options that allows you to manipulate including redactor editor javascript sdk.

```
# app/config/config.yml

ewz_redactor_editor:
    base_path: "bundles/ewzredactoreditor/redactor"
    autoinclude: true
```
