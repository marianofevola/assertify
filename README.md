# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* PHP testing tool easily shareable between different projects 

### How do I get set up? ###

* Configuration:
Include it in composer.json
```yaml
  "repositories":      [
    {
      "type": "git",
      "url": "git@github.com:marianofevola/assertify.git"
    }
  ],
  "require-dev": {
    "assertify/assertify": "*"
  }
  
```
* How to run tests
```php
<?php

use Assertify\Framework\TestCase;


class FormTest extends TestCase
{
  
}
```

```bash
Then run:
./vendor/bin/phpunit <tests folder>/*
```
