EWZRedactorEditorBundle
=======================

This bundle integrate a jQuery based WYSIWYG-editor called [Redactor](http://imperavi.com/redactor) into Symfony2 Form component.
It automatically register ``redactor_editor`` form type.

## Screenshot
![Redactor in action](https://github.com/excelwebzone/EWZRedactorEditorBundle/raw/master/redactor-js.png)

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
