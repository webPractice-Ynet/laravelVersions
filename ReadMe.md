#　Laravel全バージョン on Homestead

## 鍵を設定する

[公式](https://readouble.com/laravel/7.x/ja/homestead.html)を参考に

## ホスト側のルーティングを設定

192.168.10.30 42.homestead.test

192.168.10.30 50.homestead.test

192.168.10.30 51.homestead.test

192.168.10.30 52.homestead.test

192.168.10.30 53.homestead.test

192.168.10.30 54.homestead.test

192.168.10.30 55.homestead.test

192.168.10.30 56.homestead.test

192.168.10.30 57.homestead.test

192.168.10.30 58.homestead.test

192.168.10.30 6x.homestead.test

192.168.10.30 7x.homestead.test


## インストール時に出たエラーと警告

インストールした順序 : 7x, 6x, 5.0~5.8
今のところver50だけが正常に起動しないです。
⇒やり方発見
homestead.ymlで、50に対応するsiteにphpのバージョンを指定
```yml
sites:
    - map: 50.homestead.test
        to: /home/vagrant/code/Laravel/50/public
        php: "5.6"
```

## ７系
Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.

## 6系
Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.



## 50
 
Your requirements could not be resolved to an installable set of packages.

  Problem 1

    - Installation request for laravel/framework v5.0.16 -> satisfiable by laravel/framework[v5.0.16].
  
    - laravel/framework v5.0.16 requires ext-mcrypt * -> the requested PHP extension mcrypt is missing from your system.

  To enable extensions, verify that they are enabled in your .ini files:
 
    - C:\xampp\php\php.ini
  You can also run `php --ini` inside terminal to see which files are used by PHP in CLI mode.


## 51

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package mtdowling/cron-expression is abandoned, you should avoid using it. Use dragonmantank/cron-expression instead.

Package jeremeamia/superclosure is abandoned, you should avoid using it. Use opis/closure instead.

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.

Carbon 1 is deprecated, see how to migrate to Carbon 2.

https://carbon.nesbot.com/docs/#api-carbon-2
    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

11 packages you are using are looking for funding.

Use the `composer fund` command to find out more!

> Illuminate\Foundation\ComposerScripts::postUpdate

> php artisan optimize

## 52

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package mtdowling/cron-expression is abandoned, you should avoid using it. Use dragonmantank/cron-expression instead.
Package jeremeamia/superclosure is abandoned, you should avoid using it. Use opis/closure instead.

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.

Carbon 1 is deprecated, see how to migrate to Carbon 2.


https://carbon.nesbot.com/docs/#api-carbon-2

    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

13 packages you are using are looking for funding.

Use the `composer fund` command to find out more!

> Illuminate\Foundation\ComposerScripts::postUpdate
> php artisan optimize


## 53

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package mtdowling/cron-expression is abandoned, you should avoid using it. Use dragonmantank/cron-expression instead.

Package jeremeamia/superclosure is abandoned, you should avoid using it. Use opis/closure instead.

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.


Carbon 1 is deprecated, see how to migrate to Carbon 2.


https://carbon.nesbot.com/docs/#api-carbon-2
    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

14 packages you are using are looking for funding.

Use the `composer fund` command to find out more!

> Illuminate\Foundation\ComposerScripts::postUpdate
> php artisan optimize

Generating optimized class loader
The compiled class file has been removed.


## 54

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package mtdowling/cron-expression is abandoned, you should avoid using it. Use dragonmantank/cron-expression instead.

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.


Carbon 1 is deprecated, see how to migrate to Carbon 2.

https://carbon.nesbot.com/docs/#api-carbon-2

    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

26 packages you are using are looking for funding.

Use the `composer fund` command to find out more!

> Illuminate\Foundation\ComposerScripts::postUpdate
> php artisan optimize

Generating optimized class loader
The compiled services file has been removed.

## 55

Package mtdowling/cron-expression is abandoned, you should avoid using it. Use dragonmantank/cron-expression instead.

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package phpunit/phpunit-mock-objects is abandoned, you should avoid using it. No replacement was suggested.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.


Carbon 1 is deprecated, see how to migrate to Carbon 2.

https://carbon.nesbot.com/docs/#api-carbon-2

    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover

Discovered Package: fideloper/proxy

Discovered Package: laravel/tinker

Discovered Package: nesbot/carbon

## 56

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.


Carbon 1 is deprecated, see how to migrate to Carbon 2.

https://carbon.nesbot.com/docs/#api-carbon-2

    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover

Discovered Package: fideloper/proxy

Discovered Package: laravel/tinker

Discovered Package: nunomaduro/collision


## 57

Package zendframework/zend-diactoros is abandoned, you should avoid using it. Use laminas/laminas-diactoros instead.

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.

Carbon 1 is deprecated, see how to migrate to Carbon 2.

https://carbon.nesbot.com/docs/#api-carbon-2

    You can run ".\vendor\bin\upgrade-carbon" to get help in updating carbon and other frameworks and libraries that depend on it.

> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

## 58

Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.

Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.

Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file

Generating optimized autoload files

> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi




### アクセスログ

## PHP7.4

[2020-09-02 04:44:58] production.ERROR: ErrorException: Use of undefined constant MCRYPT_RIJNDAEL_128 - assumed 'MCRYPT_RIJNDAEL_128' (this will throw an Error in a future version of PHP) in /home/vagrant/code/Laravel/50/vendor/compiled.php:6539
Stack trace:
#0 /home/vagrant/code/Laravel/50/vendor/compiled.php(6539): Illuminate\Foundation\Bootstrap\HandleExceptions->handleError()
#1 /home/vagrant/code/Laravel/50/vendor/compiled.php(1027): Illuminate\Encryption\EncryptionServiceProvider->Illuminate\Encryption\{closure}()
#2 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build()
#3 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make()
#4 /home/vagrant/code/Laravel/50/vendor/compiled.php(1072): Illuminate\Foundation\Application->make()
#5 /home/vagrant/code/Laravel/50/vendor/compiled.php(1056): Illuminate\Container\Container->resolveClass()
#6 /home/vagrant/code/Laravel/50/vendor/compiled.php(1042): Illuminate\Container\Container->getDependencies()
#7 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build()
#8 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make()
#9 /home/vagrant/code/Laravel/50/vendor/compiled.php(8944): Illuminate\Foundation\Application->make()
#10 /home/vagrant/code/Laravel/50/vendor/compiled.php(2478): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 /home/vagrant/code/Laravel/50/vendor/compiled.php(8944): Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode->handle()
#12 [internal function]: Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 /home/vagrant/code/Laravel/50/vendor/compiled.php(8935): call_user_func()
#14 /home/vagrant/code/Laravel/50/vendor/compiled.php(1891): Illuminate\Pipeline\Pipeline->then()
#15 /home/vagrant/code/Laravel/50/vendor/compiled.php(1880): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#16 /home/vagrant/code/Laravel/50/public/index.php(55): Illuminate\Foundation\Http\Kernel->handle()
#17 {main}  
[2020-09-02 04:44:58] production.ERROR: ErrorException: Use of undefined constant MCRYPT_RIJNDAEL_128 - assumed 'MCRYPT_RIJNDAEL_128' (this will throw an Error in a future version of PHP) in /home/vagrant/code/Laravel/50/vendor/compiled.php:6539
Stack trace:
#0 /home/vagrant/code/Laravel/50/vendor/compiled.php(6539): Illuminate\Foundation\Bootstrap\HandleExceptions->handleError()
#1 /home/vagrant/code/Laravel/50/vendor/compiled.php(1027): Illuminate\Encryption\EncryptionServiceProvider->Illuminate\Encryption\{closure}()
#2 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build()
#3 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make()
#4 /home/vagrant/code/Laravel/50/vendor/compiled.php(1072): Illuminate\Foundation\Application->make()
#5 /home/vagrant/code/Laravel/50/vendor/compiled.php(1056): Illuminate\Container\Container->resolveClass()
#6 /home/vagrant/code/Laravel/50/vendor/compiled.php(1042): Illuminate\Container\Container->getDependencies()
#7 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build()
#8 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make()
#9 /home/vagrant/code/Laravel/50/vendor/compiled.php(1897): Illuminate\Foundation\Application->make()
#10 /home/vagrant/code/Laravel/50/public/index.php(60): Illuminate\Foundation\Http\Kernel->terminate()


### PHP7.1

[2020-09-02 04:56:55] production.ERROR: ErrorException: Function mcrypt_get_iv_size() is deprecated in /home/vagrant/code/Laravel/50/vendor/compiled.php:11911
Stack trace:
#0 /home/vagrant/code/Laravel/50/vendor/compiled.php(11911): Illuminate\Foundation\Bootstrap\HandleExceptions->handleError(8192, 'Function mcrypt...', '/home/vagrant/c...', 11911, Array)
#1 /home/vagrant/code/Laravel/50/vendor/compiled.php(11902): Illuminate\Encryption\Encrypter->updateBlockSize()
#2 /home/vagrant/code/Laravel/50/vendor/compiled.php(6541): Illuminate\Encryption\Encrypter->setCipher('rijndael-128')
#3 /home/vagrant/code/Laravel/50/vendor/compiled.php(1027): Illuminate\Encryption\EncryptionServiceProvider->Illuminate\Encryption\{closure}(Object(Illuminate\Foundation\Application), Array)
#4 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build(Object(Closure), Array)
#5 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make('encrypter', Array)
#6 /home/vagrant/code/Laravel/50/vendor/compiled.php(1072): Illuminate\Foundation\Application->make('encrypter')
#7 /home/vagrant/code/Laravel/50/vendor/compiled.php(1056): Illuminate\Container\Container->resolveClass(Object(ReflectionParameter))
#8 /home/vagrant/code/Laravel/50/vendor/compiled.php(1042): Illuminate\Container\Container->getDependencies(Array, Array)
#9 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build('Illuminate\\Cook...', Array)
#10 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make('Illuminate\\Cook...', Array)
#11 /home/vagrant/code/Laravel/50/vendor/compiled.php(8944): Illuminate\Foundation\Application->make('Illuminate\\Cook...')
#12 /home/vagrant/code/Laravel/50/vendor/compiled.php(2478): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}(Object(Illuminate\Http\Request))
#13 /home/vagrant/code/Laravel/50/vendor/compiled.php(8944): Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode->handle(Object(Illuminate\Http\Request), Object(Closure))
#14 [internal function]: Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}(Object(Illuminate\Http\Request))
#15 /home/vagrant/code/Laravel/50/vendor/compiled.php(8935): call_user_func(Object(Closure), Object(Illuminate\Http\Request))
#16 /home/vagrant/code/Laravel/50/vendor/compiled.php(1891): Illuminate\Pipeline\Pipeline->then(Object(Closure))
#17 /home/vagrant/code/Laravel/50/vendor/compiled.php(1880): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter(Object(Illuminate\Http\Request))
#18 /home/vagrant/code/Laravel/50/public/index.php(55): Illuminate\Foundation\Http\Kernel->handle(Object(Illuminate\Http\Request))
#19 {main}  
[2020-09-02 04:56:55] production.ERROR: ErrorException: Function mcrypt_get_iv_size() is deprecated in /home/vagrant/code/Laravel/50/vendor/compiled.php:11911
Stack trace:
#0 /home/vagrant/code/Laravel/50/vendor/compiled.php(11911): Illuminate\Foundation\Bootstrap\HandleExceptions->handleError(8192, 'Function mcrypt...', '/home/vagrant/c...', 11911, Array)
#1 /home/vagrant/code/Laravel/50/vendor/compiled.php(11902): Illuminate\Encryption\Encrypter->updateBlockSize()
#2 /home/vagrant/code/Laravel/50/vendor/compiled.php(6541): Illuminate\Encryption\Encrypter->setCipher('rijndael-128')
#3 /home/vagrant/code/Laravel/50/vendor/compiled.php(1027): Illuminate\Encryption\EncryptionServiceProvider->Illuminate\Encryption\{closure}(Object(Illuminate\Foundation\Application), Array)
#4 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build(Object(Closure), Array)
#5 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make('encrypter', Array)
#6 /home/vagrant/code/Laravel/50/vendor/compiled.php(1072): Illuminate\Foundation\Application->make('encrypter')
#7 /home/vagrant/code/Laravel/50/vendor/compiled.php(1056): Illuminate\Container\Container->resolveClass(Object(ReflectionParameter))
#8 /home/vagrant/code/Laravel/50/vendor/compiled.php(1042): Illuminate\Container\Container->getDependencies(Array, Array)
#9 /home/vagrant/code/Laravel/50/vendor/compiled.php(980): Illuminate\Container\Container->build('Illuminate\\Cook...', Array)
#10 /home/vagrant/code/Laravel/50/vendor/compiled.php(1493): Illuminate\Container\Container->make('Illuminate\\Cook...', Array)
#11 /home/vagrant/code/Laravel/50/vendor/compiled.php(1897): Illuminate\Foundation\Application->make('Illuminate\\Cook...')
#12 /home/vagrant/code/Laravel/50/public/index.php(60): Illuminate\Foundation\Http\Kernel->terminate(Object(Illuminate\Http\Request), Object(Symfony\Component\HttpFoundation\Response))
#13 {main}  

