# Clear the configuration cache after saving Magento configuration

This module will automatically clear the admin system configuration cache after saving a new one in database.

## Setup

```
# Create the vendor name directory and clone the module

cd app/code && mkdir Magegang && cd $_
git clone https://github.com/magegang/m2-clearconfigcache ClearConfigCache

# Launch standard Magento commands

bin/magento se:up
bin/magento mo:en Magegang_ClearConfigCache
bin/magento ca:cl

# or install the composer package

composer require magegang/module-clearconfigcache
```

## Requirements

* Magento 2
* PHP >= 8

## Maintainers

* [ronangr1](https://github.com/ronangr1)

## Support

If you have any problems using this module, please open an issue [here](https://github.com/magegang/m2-clearconfigcache/issues/new).
