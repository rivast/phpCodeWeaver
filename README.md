phpCodeWeaver
============================

The aim of this project is to create a web application that can "scaffold" a BDD ready web-application project.


Currently have only been developed on a LAMP configuration with Xdebug enabled, so there is no guarantee that in will run on a Windows development environment.


Current tools needed:
=====================

Behat with Mink
---------------

  - Download [master](https://github.com/Behat/Behat.git) - staging branch. Last stable version:

```bash
$> git clone https://github.com/Behat/Behat.git
$> git submodule update --init
```

  - Create composer.json file in the Behat root:

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

  - it is useful to create a alias. Mine is:

```bash
$> alias behat='/var/www/Behat/bin/behat'
```
  - running tests:

```bash
$> behat run
```

  - The main website with documentation is at [http://behat.org](http://behat.org)

PhpSpec2
--------
  - Download [master](https://github.com/phpspec/phpspec2) ([![Master Build Status](https://secure.travis-ci.org/phpspec/phpspec2.png?branch=master)](http://travis-ci.org/phpspec/phpspec2)) - staging branch. Last stable version:

```bash
$> git clone https://github.com/phpspec/phpspec2
```

  - Install:
```bash
$> wget -nc http://getcomposer.org/composer.phar
$> php composer.phar install
```

  - it is useful to create a alias. Mine is:

```bash
$> alias phpspec='/var/www/phpspec2/bin/phpspec'
```

  - running tests:

```bash
$> phpspec
```

  - The main website with documentation is at [http://phpspec.net](http://phpspec.net)


Next?
-----

  - Integrate PhpDocs
  - Integrate CodeSniffer 

Any improvement or comments are welcome.
---------------------------------------