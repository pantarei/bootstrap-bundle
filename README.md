PantareiBootstrapBundle
=======================

PantaReiBootstrapBundle is a collection of code to integrate Twitter Bootstrap
(http://twitter.github.com/bootstrap/) as easy as possible into your Symfony
(http://www.symfony.com) Project.

Installation
------------

First you need to add `pantarei/bootstrap-bundle` to `composer.json` (in the Symfony directory ) :

    {
      "require": {
        "pantarei/bootstrap-bundle": "3.0.*@dev"
      }
    }

and execute the command `composer update`:

You also have to add `PantareiBootstrapBundle` to your `AppKernel.php` (in the symfony/app ):

    class AppKernel extends Kernel
    {
      public function registerBundles()
      {
      $bundles = array(
          new Pantarei\Bundle\BootstrapBundle\PantareiBootstrapBundle()
          );
        return $bundles;
      }
    }

and execute the command `composer update`:

Assets
------

Go to `composer.json` (in the Symfony directory ) :

    {
      "require": {
        "twitter/bootstrap": "dev-3.0.0-wip"
      }
    }

and execute the command `composer update`:

### Without Assetic

Create symlink for the asset files from the `vendor/twitter` directory into your web directory (Your "Symfony" folder):

    cd web/bundles
    ln -s ../../vendor/twitter twitter

[ Below are already in file, change if need. ]
Now you can include boostrap css and js in main template:

    <link rel="stylesheet" href="{{ asset('bundles/twitter/bootstrap/docs/assets/css/bootstrap.css') }}">
    <script src="{{ asset('bundles/twitter/bootstrap/docs/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('bundles/twitter/bootstrap/docs/assets/js/bootstrap.min.js') }}"></script>

### With Assetic

If you want to use LessPHP to compile the Bootstrap LESS files, you need update your `composer.json` file and execute the following line: `composer update`:

    {
      "require": {
        "leafo/lessphp": "0.3.9"
      }
    }

Now change your `app/config/config.yml` to this:

    # Assetic Configuration
    assetic:
      filters:
        lessphp:
          file: %kernel.root_dir%/../vendor/leafo/lessphp/lessc.inc.php
          apply_to: "\.less$"

After that, the last thing we need is to include bootstrap in main template:

    {% stylesheets
      'bundles/twitter/bootstrap/less/*.less'
    %}
      <link rel="styleshet" href="{{ asset_url }} "/>
    {% endstylesheets %}

Examples
--------

If you hope to enable the examples as reference, update your `app/config/routing.yml` file to this:

    pantarei_bootstrap:
        resource: "@PantareiBootstrapBundle/Resources/config/routing.yml"
        prefix:   /_bootstrap

Then you can access `_bootstrap/starter-template` or other pages as example.

Create Page
--------

Go to Symfony directory in ssh :

	php app/console generate:bundle --namespace=Yourname/yourBundle --format=yml

Check the name and the directory and press yes.

Then ssh or sshfs to the file, [ symfony/src/your directory/Controller/DefaultController.php ],then correct as below. :


	class DefaultController extends Controller
	{
    public function indexAction($path = 'index')
    {
        return $this->render('yournameBundle:Default:' . $path . '.html.twig');
    }
	}


also, ssh or sshfs to the file, [ symfony/src/your directory/Resources/config/routing.yml ]:
Then correct as below.

    pattern:  /{path}
    defaults: { _controller:yournameBundle:Default:index, path: index }
    
Then, ssh or sshfs to the file, [ symfony/src/your directory/Resources/views/Default/index.html.twig ]:
Correct as below.

	Hello world!!

Finally, you can check the path ../app_dev.php/index.

Use Pantarei Bootstrap Lib
--------
Then you have to create a page with Bootstrap.

For Symfony when you call any new page .html.twig, with Pantarie Booststrap Library any demo .html.twig, please add below command at the top:

	{% extends 'PantareiBootstrapBundle:Default:boilerplate.html.twig' %}


if unknown, go to phy side folder to check and have a look the page detail.

phy side folder : 
../vendor/pantarei/bootsrap../Pantrei../Bundle/BootstrapBundle/Resources/views/Default/...html.twig

Customize CSS
--------

Go to Symfony directory in ssh :

	php app/console assets:install web --symlink

then add the command below in the composer.json :

    "minimum-stability": "alpha",
    "extra": {
	"symfony-assets-install": "symlink"
        }
	
and execute the command `composer update`:


Create cusotom.css file in [yourdirectory]/Resources/public/css:
Then add below line into ANY .html.twig file to run your custom css :

	{% block styles %}
	<link rel="stylesheet" href="{{ asset('bundles/yourdirectory/css/custom.css') }}"> 
	{% endblock %}

then the CSS file will auto asset from your own bundle public and make it work in your own page.

License
-------

- The bundle is licensed under the [MIT License](http://opensource.org/licenses/MIT)
- The CSS and Javascript from the Twitter Bootstrap are licensed under the [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0)