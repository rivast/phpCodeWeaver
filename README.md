phpCodeWeaver
============================

The aim of this project is to create a web application that can "scaffold" a BDD ready web-application project.


It's been developed and tested in a LAMP stack environment with Xdebug enabled, so there is no guarantee that in will run on a Windows development environment.

Initial development will happen on the master branch till the first release is ready.

Coding standard: PSR2 

Current tools needed:
=====================

Behat with Mink
---------------

  - Download [master](https://github.com/Behat/Behat.git) - staging branch. Latest stable version:

```bash
$> git clone https://github.com/Behat/Behat.git
$> git submodule update --init
```

  - Create a composer.json file in Behat root:

```bash
{
	"require": {
	    "behat/behat": "2.4.*@stable",
	    "behat/mink": "1.4.*@stable",
	    "behat/mink-extension": "*",
	    "behat/mink-goutte-driver": "*",
	    "behat/mink-selenium2-driver": "*"
	},
	"minimum-stability": "dev",
	"config": {
	    "bin-dir": "bin/"
	}
}
```

  - Install:

```bash
$> wget -nc http://getcomposer.org/composer.phar
$> php composer.phar install
```

  - It's useful to create an alias. For example:

```bash
$> alias behat='/var/www/Behat/bin/behat'
```
  - Test Behat setup with:

```bash
$> behat run
```

  - Visit [http://behat.org](http://behat.org) for more information and documentation.

PhpSpec2
--------
  - Download [master](https://github.com/phpspec/phpspec2) ([![Master Build Status](https://secure.travis-ci.org/phpspec/phpspec2.png?branch=master)](http://travis-ci.org/phpspec/phpspec2)) - staging branch. Latest stable version:

```bash
$> git clone https://github.com/phpspec/phpspec2
```

  - Install:
```bash
$> wget -nc http://getcomposer.org/composer.phar
$> php composer.phar install
```

  - It's useful to create an alias. For example:

```bash
$> alias phpspec='/var/www/phpspec2/bin/phpspec'
```

  - Test Behat setup with:

```bash
$> phpspec
```

  - Visit [http://phpspec.net](http://phpspec.net) for more information and documentation.


Next?
-----

  - Integrate PhpDocs
  - Integrate CodeSniffer 

Any improvement or comments are welcome.
---------------------------------------
