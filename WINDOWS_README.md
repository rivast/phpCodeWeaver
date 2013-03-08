phpCodeWeaver
============================

The aim of this project is to create a web application that can "scaffold" a BDD ready web-application project.


It's been developed and tested in a LAMP stack environment with Xdebug enabled, so there is no guarantee that in will run on a Windows development environment.

Initial development will happen on the master branch till the first release is ready.

Coding standard: PSR2 

Current tools needed:
=====================

NB: Using the git shell when using Windows 7 makes this process much easier!

PHP  
---

We used a XAMPP installation but that is not a requirement.

Enabling the curl, sqlite3 and xdebug extensions are though - in most cases it was not enabled by default.

PEAR
----

NB: run these commands from the php installation directory, for xampp it was c:\xampp\php

We found that the new [http://pear2.php.net/pyrus.phar](http://pear2.php.net/pyrus.phar) method works the best for installing our development tools.

If you don't have pear installed using [http://pear.php.net/go-pear.phar](http://pear.php.net/go-pear.phar) works nicely :-)

Download the above files and copy them to the php installation directory


  - Installing pear (if needed)

```bash
c:\xampp\php\php go-pear.phar install
```

PhpDocumentor
-------------

  - Install

```bash
c:\xampp\php\php pyrus.phar install PhpDocumentor
```

  - It's useful to create an alias. For example:

```bash
c:\> doskey php=c:\xampp\php\php.exe $*
c:\> doskey phpdoc=c:\xampp\php>phpdoc $*
```

php_CondeSniffer
----------------

  - Install

```bash
c:\xampp\php\php pyrus.phar install pear/PHP_CodeSniffer
```

  - It's useful to create an alias. For example:

```bash
c:\> doskey phpcs=c:\xampp\php>phpcs $*
```

  - In some cases you will need to install the necessary coding standard sniffs, locate them in the PHP_CodeSniffer-1.4.4.tgz file and extract it to the standards directory. The xampp directory was C:\xampp\php\php\PHP\CodeSniffer\Standards


Behat with Mink
---------------

  - Download [https://github.com/Behat/Behat.git](https://github.com/Behat/Behat.git) - staging branch. Latest stable version:

```bash
C:\xampp\htdocs> git clone https://github.com/Behat/Behat.git
C:\xampp\htdocs> cd Behat
C:\xampp\htdocs\Behat> git submodule update --init
```

  - Download [http://getcomposer.org/composer.phar](http://getcomposer.org/composer.phar) to the Behat root

  - Create a composer.json file in the Behat root:

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
C:\xampp\htdocs\Behat> c:\xampp\php\php.exe composer.phar install
```

  - It's useful to create an alias. For example:

```bash
c:\> doskey behat=c:\xampp\php\php.exe c:\xampp\htdocs\Behat\bin\behat $*
```

  - Test Behat setup with:

```bash
c:\xampp\htdocs\MyProject> behat
```

  - Visit [http://www.behat.org](http://www.behat.org) for more information and documentation.

PhpSpec2
--------
  - Download [https://github.com/phpspec/phpspec2](https://github.com/phpspec/phpspec2) - staging branch. Latest stable version:

```bash
C:\xampp\htdocs> git clone https://github.com/phpspec/phpspec2
```

Download [http://getcomposer.org/composer.phar](http://getcomposer.org/composer.phar) to the phpspec2 root
  - Install:
```bash
C:\xampp\htdocs> cd phpspec2
C:\xampp\htdocs\phpspec2> php composer.phar install
```

  - It's useful to create an alias. For example:

```bash
c:\> doskey phpspec=c:\xampp\php\php.exe c:\xampp\htdocs\phpspec2\bin\phpspec $*
```

  - Test phpspec setup with:

```bash
c:\xampp\htdocs\MyProject> phpspec
```

  - Visit [http://phpspec.net](http://phpspec.net) for more information and documentation.


Next?
-----

  - Build Base application that can take user stories and specs.

Any improvement or comments are welcome.
---------------------------------------
