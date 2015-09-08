# firegoby/wp-hotfix

[![Build Status](https://travis-ci.org/miya0001/wp-hotfix.svg?branch=master)](https://travis-ci.org/miya0001/wp-hotfix) [![Latest Stable Version](https://poser.pugx.org/firegoby/wp-hotfix/v/stable.svg)](https://packagist.org/packages/firegoby/wp-hotfix) [![Total Downloads](https://poser.pugx.org/firegoby/wp-hotfix/downloads.svg)](https://packagist.org/packages/firegoby/wp-hotfix) [![Latest Unstable Version](https://poser.pugx.org/firegoby/wp-hotfix/v/unstable.svg)](https://packagist.org/packages/firegoby/wp-hotfix) [![License](https://poser.pugx.org/firegoby/wp-hotfix/license.svg)](https://packagist.org/packages/firegoby/wp-hotfix)

Fix bugs on each versions of WordPress.

## Installation

Create a composer.json in your plugin root or mu-plugins

```
{
    "require": {
        "firegoby/wp-hotfix": "*"
    }
}
```

Place the following code into your plugin.

```
require_once dirname( __FILE__ ) . '/vendor/autoload.php';
```

Then:

```
$ composer install
```

## Contributing

Clone this project.

```
$ git clone git@github.com:miya0001/wp-hotfix.git
```

### Run testing

Initialize the testing environment locally:

(you'll need to already have mysql, svn and wget available)

```
$ bash bin/install-wp-tests.sh wordpress_test root '' localhost latest
```

Install phpunit.

```
$ composer install
```

The unit test files are in the `tests/` directory.

To run the unit tests, just execute:

```
$ phpunit
```

### Issue

[https://github.com/miya0001/wp-hotfix/issues](https://github.com/miya0001/wp-hotfix/issues)
