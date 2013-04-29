PantareiBootstrapBundle
=======================

PantaReiBootstrapBundle is a collection of code to integrate Twitter Bootstrap
(http://twitter.github.com/bootstrap/) as easy as possible into your Symfony
(http://www.symfony.com) Project.

Installation
------------

First you need to add `pantarei/bootstrap-bundle` to `composer.json`:

    {
      "require": {
        "pantarei/bootstrap-bundle": "3.0.*@dev"
      }
    }

You also have to add `PantareiBootstrapBundle` to your `AppKernel.php`:

    // app/AppKernel.php
    ...
    class AppKernel extends Kernel
    {
      ...
        public function registerBundles()
        {
          $bundles = array(
              ...
              new Pantarei\Bundle\BootstrapBundle\PantareiBootstrapBundle()
              );
          ...

            return $bundles;
        }
      ...
    }


Assets
------

Since you are probably already using Composer this is the easiest way to get started. Update your `composer.json` file and execute the following line: `composer update twitter/bootstrap`.

    {
      "require": {
        "twitter/bootstrap": "dev-3.0.0-wip"
      }
    }

Then create symlink for the asset files from the `vendor/twitter/bootstrap` directory into your web directory:

    mkdir -p web/bundle/twitter
    cd web/bundle/twitter
    ln -s ../../../vendor/twitter/bootstrap/docs/assets bootstrap
