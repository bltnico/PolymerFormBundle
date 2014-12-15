## Need Polymer

Run `bower init` in `web/`

Install Polymer `bower install polymer/Polymer --save`

## How to use

```
{% include 'BltNicoPolymerFormBundle::form.html.twig' with {
    'form' : myForm,
    'display_submit' : true,
    'display_errors' : true,
    'ignore_fields' : ['name','action']
} %}
```
