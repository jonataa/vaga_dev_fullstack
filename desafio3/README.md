# Todo (PHP + AngularJS)

## Running Rest API
```shell
$ php bin/composer.phar install
$ export DB=sqlite:../db/database.sq3
$ php -S localhost:8000 -t public/api -c php.ini
```

## Testing
```shell
$ php bin/composer.phar install
$ php vendor/bin/phpunit tests
```
Output:

```
PHPUnit 5.0.9 by Sebastian Bergmann and contributors.

.........                                                           9 / 9 (100%)

Time: 58 ms, Memory: 4.00Mb

OK (9 tests, 19 assertions)
```
