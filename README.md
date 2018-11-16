<p align="center"><a href="https://piedweb.com">
<img src="https://raw.githubusercontent.com/PiedWeb/piedweb-devoluix-theme/master/src/img/logo_title.png" width="200" height="200" alt="theme devoluix bootstrap 4" />
</a></p>

# Faq Bundle

Simple faq to your app (no user entry). Question can be associated to Page, see usage.

Initially dev to be use with [PiedWeb CMS](https://github.com/PiedWeb/CMS).


## Installation

Via [Packagist](https://packagist.org/packages/piedweb/faq-bundle) :

```
# Get the Bundle
composer require piedweb/faq-bundle

# Install the admin
# Edit your config/package/sonata_admin.yaml
# Add :
sonata_admin:
    ...
        ...
            ...
                items:
                    ...
                    - piedweb.admin.faq
```

## Usage

### As it...

... to have a page with a faq.

/!\ Not ready yet, controller not finished (not started in fact)

```bash
# Load form in ajax
<div data-sky="{{ path('piedweb_cms_faq') }}"></div>

# Render form in Controller
{{ render(controller('PiedWeb\\FaqBundle\\Controller\\FaqController::show')) }}
```

### Or you can...

... add it to each page of your website by extending your `Page` Entity with `PiedWeb\FaqBundle\Entity\PageFaqTrait`, adding in the constructor `$this->__construct_faq();`

And adding this in your template:

```
{% include '@PiedWebFaq/faq/_faq.html.twig' %}
```


## TODO

- test
- controller

## Contributors

* [Robin](https://www.robin-d.fr/) / [Pied Web](https://piedweb.com)
* ...

Check coding standard before to commit :
```
php-cs-fixer fix src --rules=@Symfony --verbose
php-cs-fixer fix src --rules='{"array_syntax": {"syntax": "short"}}' --verbose
```

## License

MIT (see the LICENSE file for details)
