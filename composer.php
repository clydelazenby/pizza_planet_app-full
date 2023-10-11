{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "7a2b364d1081610382b42b446583abd4",
    "packages": [
        {
            "name": "dnoegel/php-xdg-base-dir",
            "version": "v0.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/dnoegel/php-xdg-base-dir.git",
                "reference": "8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dnoegel/php-xdg-base-dir/zipball/8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd",
                "reference": "8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "~7.0|~6.0|~5.0|~4.8.35"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "XdgBaseDir\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "implementation of xdg base directory specification for php",
            "time": "2019-12-04T15:06:13+00:00"
        },
        {
            "name": "doctrine/inflector",
            "version": "1.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "ec3a55242203ffa6a4b27c58176da97ff0a7aec1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/ec3a55242203ffa6a4b27c58176da97ff0a7aec1",
                "reference": "ec3a55242203ffa6a4b27c58176da97ff0a7aec1",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.3.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Common\\Inflector\\": "lib/Doctrine/Common/Inflector"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Benjamin Eberlei",
                    "email": "kontakt@beberlei.de"
                },
                {
                    "name": "Jonathan Wage",
                    "email": "jonwage@gmail.com"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "Common String Manipulations with regard to casing and singular/plural rules.",
            "homepage": "http://www.doctrine-project.org",
            "keywords": [
                "inflection",
                "pluralize",
                "singularize",
                "string"
            ],
            "time": "2019-10-30T19:59:35+00:00"
        },
        {
            "name": "doctrine/lexer",
            "version": "1.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/lexer.git",
                "reference": "5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/lexer/zipball/5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6",
                "reference": "5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6",
                "shasum": ""
            },
            "require": {
                "php": "^7.2"
            },
            "require-dev": {
                "doctrine/coding-standard": "^6.0",
                "phpstan/phpstan": "^0.11.8",
                "phpunit/phpunit": "^8.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Common\\Lexer\\": "lib/Doctrine/Common/Lexer"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.",
            "homepage": "https://www.doctrine-project.org/projects/lexer.html",
            "keywords": [
                "annotations",
                "docblock",
                "lexer",
                "parser",
                "php"
            ],
            "time": "2019-10-30T14:39:59+00:00"
        },
        {
            "name": "dragonmantank/cron-expression",
            "version": "v2.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/dragonmantank/cron-expression.git",
                "reference": "72b6fbf76adb3cf5bc0db68559b33d41219aba27"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dragonmantank/cron-expression/zipball/72b6fbf76adb3cf5bc0db68559b33d41219aba27",
                "reference": "72b6fbf76adb3cf5bc0db68559b33d41219aba27",
                "shasum": ""
            },
            "require": {
                "php": "^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.4|^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.3-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Cron\\": "src/Cron/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Chris Tankersley",
                    "email": "chris@ctankersley.com",
                    "homepage": "https://github.com/dragonmantank"
                }
            ],
            "description": "CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due",
            "keywords": [
                "cron",
                "schedule"
            ],
            "time": "2019-03-31T00:38:28+00:00"
        },
        {
            "name": "egulias/email-validator",
            "version": "2.1.17",
            "source": {
                "type": "git",
                "url": "https://github.com/egulias/EmailValidator.git",
                "reference": "ade6887fd9bd74177769645ab5c474824f8a418a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/egulias/EmailValidator/zipball/ade6887fd9bd74177769645ab5c474824f8a418a",
                "reference": "ade6887fd9bd74177769645ab5c474824f8a418a",
                "shasum": ""
            },
            "require": {
                "doctrine/lexer": "^1.0.1",
                "php": ">=5.5",
                "symfony/polyfill-intl-idn": "^1.10"
            },
            "require-dev": {
                "dominicsayers/isemail": "^3.0.7",
                "phpunit/phpunit": "^4.8.36|^7.5.15",
                "satooshi/php-coveralls": "^1.0.1"
            },
            "suggest": {
                "ext-intl": "PHP Internationalization Libraries are required to use the SpoofChecking validation"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Egulias\\EmailValidator\\": "EmailValidator"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Eduardo Gulias Davis"
                }
            ],
            "description": "A library for validating emails against several RFCs",
            "homepage": "https://github.com/egulias/EmailValidator",
            "keywords": [
                "email",
                "emailvalidation",
                "emailvalidator",
                "validation",
                "validator"
            ],
            "time": "2020-02-13T22:36:52+00:00"
        },
        {
            "name": "fideloper/proxy",
            "version": "4.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/fideloper/TrustedProxy.git",
                "reference": "ec38ad69ee378a1eec04fb0e417a97cfaf7ed11a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fideloper/TrustedProxy/zipball/ec38ad69ee378a1eec04fb0e417a97cfaf7ed11a",
                "reference": "ec38ad69ee378a1eec04fb0e417a97cfaf7ed11a",
                "shasum": ""
            },
            "require": {
                "illuminate/contracts": "^5.0|^6.0|^7.0|^8.0",
                "php": ">=5.4.0"
            },
            "require-dev": {
                "illuminate/http": "^5.0|^6.0|^7.0|^8.0",
                "mockery/mockery": "^1.0",
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Fideloper\\Proxy\\TrustedProxyServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Fideloper\\Proxy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Chris Fidao",
                    "email": "fideloper@gmail.com"
                }
            ],
            "description": "Set trusted proxies for Laravel",
            "keywords": [
                "load balancing",
                "proxy",
                "trusted proxy"
            ],
            "time": "2020-02-22T01:51:47+00:00"
        },
        {
            "name": "fzaninotto/faker",
            "version": "v1.9.1",
            "source": {
                "type": "git",
                "url": "https://github.com/fzaninotto/Faker.git",
                "reference": "fc10d778e4b84d5bd315dad194661e091d307c6f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fzaninotto/Faker/zipball/fc10d778e4b84d5bd315dad194661e091d307c6f",
                "reference": "fc10d778e4b84d5bd315dad194661e091d307c6f",
                "shasum": ""
            },
            "require": {
                "php": "^5.3.3 || ^7.0"
            },
            "require-dev": {
                "ext-intl": "*",
                "phpunit/phpunit": "^4.8.35 || ^5.7",
                "squizlabs/php_codesniffer": "^2.9.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.9-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Faker\\": "src/Faker/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "François Zaninotto"
                }
            ],
            "description": "Faker is a PHP library that generates fake data for you.",
            "keywords": [
                "data",
                "faker",
                "fixtures"
            ],
            "time": "2019-12-12T13:22:17+00:00"
        },
        {
            "name": "jakub-onderka/php-console-color",
            "version": "v0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/JakubOnderka/PHP-Console-Color.git",
                "reference": "d5deaecff52a0d61ccb613bb3804088da0307191"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/JakubOnderka/PHP-Console-Color/zipball/d5deaecff52a0d61ccb613bb3804088da0307191",
                "reference": "d5deaecff52a0d61ccb613bb3804088da0307191",
                "shasum": ""
            },
            "require": {
                "php": ">=5.4.0"
            },
            "require-dev": {
                "jakub-onderka/php-code-style": "1.0",
                "jakub-onderka/php-parallel-lint": "1.0",
                "jakub-onderka/php-var-dump-check": "0.*",
                "phpunit/phpunit": "~4.3",
                "squizlabs/php_codesniffer": "1.*"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "JakubOnderka\\PhpConsoleColor\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-2-Clause"
            ],
            "authors": [
                {
                    "name": "Jakub Onderka",
                    "email": "jakub.onderka@gmail.com"
                }
            ],
            "time": "2018-09-29T17:23:10+00:00"
        },
        {
            "name": "jakub-onderka/php-console-highlighter",
            "version": "v0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/JakubOnderka/PHP-Console-Highlighter.git",
                "reference": "9f7a229a69d52506914b4bc61bfdb199d90c5547"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/JakubOnderka/PHP-Console-Highlighter/zipball/9f7a229a69d52506914b4bc61bfdb199d90c5547",
                "reference": "9f7a229a69d52506914b4bc61bfdb199d90c5547",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "jakub-onderka/php-console-color": "~0.2",
                "php": ">=5.4.0"
            },
            "require-dev": {
                "jakub-onderka/php-code-style": "~1.0",
                "jakub-onderka/php-parallel-lint": "~1.0",
                "jakub-onderka/php-var-dump-check": "~0.1",
                "phpunit/phpunit": "~4.0",
                "squizlabs/php_codesniffer": "~1.5"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "JakubOnderka\\PhpConsoleHighlighter\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jakub Onderka",
                    "email": "acci@acci.cz",
                    "homepage": "http://www.acci.cz/"
                }
            ],
            "description": "Highlight PHP code in terminal",
            "time": "2018-09-29T18:48:56+00:00"
        },
        {
            "name": "laravel/framework",
            "version": "^9.52.7",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/framework.git",
                "reference": "9425a2f410d05d5bba493f62cff03854a8b19559"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/framework/zipball/9425a2f410d05d5bba493f62cff03854a8b19559",
                "reference": "9425a2f410d05d5bba493f62cff03854a8b19559",
                "shasum": ""
            },
            "require": {
                "doctrine/inflector": "^2.1",
                "dragonmantank/cron-expression": "^3.3.2",
                "egulias/email-validator": "^4.1",
                "ext-json": "*",
                "ext-mbstring": "*",
                "ext-openssl": "*",
                "league/commonmark": "^2.5",
                "league/flysystem": "^3.8.0",
                "monolog/monolog": "^2.3",
                "nesbot/carbon": "^2.47",
                "opis/closure": "^4.5",
                "php": "^7.2",
                "psr/container": "^1.0",
                "psr/simple-cache": "^1.0",
                "ramsey/uuid": "^4.3",
                "swiftmailer/swiftmailer": "^6.0",
                "symfony/console": "^6.2",
                "symfony/debug": "^5.4",
                "symfony/finder": "^6.2",
                "symfony/http-foundation": "^6.2",
                "symfony/http-kernel": "^6.2",
                "symfony/process": "^4.3.4",
                "symfony/routing": "^4.3.4",
                "symfony/var-dumper": "^4.3.4",
                "tijsverkoyen/css-to-inline-styles": "^2.2.1",
                "vlucas/phpdotenv": "^3.3"
            },
            "conflict": {
                "tightenco/collect": "<5.5.33"
            },
            "replace": {
                "illuminate/auth": "self.version",
                "illuminate/broadcasting": "self.version",
                "illuminate/bus": "self.version",
                "illuminate/cache": "self.version",
                "illuminate/config": "self.version",
                "illuminate/console": "self.version",
                "illuminate/container": "self.version",
                "illuminate/contracts": "self.version",
                "illuminate/cookie": "self.version",
                "illuminate/database": "self.version",
                "illuminate/encryption": "self.version",
                "illuminate/events": "self.version",
                "illuminate/filesystem": "self.version",
                "illuminate/hashing": "self.version",
                "illuminate/http": "self.version",
                "illuminate/log": "self.version",
                "illuminate/mail": "self.version",
                "illuminate/notifications": "self.version",
                "illuminate/pagination": "self.version",
                "illuminate/pipeline": "self.version",
                "illuminate/queue": "self.version",
                "illuminate/redis": "self.version",
                "illuminate/routing": "self.version",
                "illuminate/session": "self.version",
                "illuminate/support": "self.version",
                "illuminate/translation": "self.version",
                "illuminate/validation": "self.version",
                "illuminate/view": "self.version"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^3.0",
                "doctrine/dbal": "^2.6",
                "filp/whoops": "^2.4",
                "guzzlehttp/guzzle": "^6.3|^7.0",
                "league/flysystem-cached-adapter": "^1.0",
                "mockery/mockery": "^1.3.1",
                "moontoast/math": "^1.1",
                "orchestra/testbench-core": "^4.0",
                "pda/pheanstalk": "^4.0",
                "phpunit/phpunit": "^7.5.15|^8.4|^9.0",
                "predis/predis": "^1.1.1",
                "symfony/cache": "^4.3.4"
            },
            "suggest": {
                "aws/aws-sdk-php": "Required to use the SQS queue driver, DynamoDb failed job storage and SES mail driver (^3.0).",
                "doctrine/dbal": "Required to rename columns and drop SQLite columns (^2.6).",
                "ext-gd": "Required to use Illuminate\\Http\\Testing\\FileFactory::image().",
                "ext-memcached": "Required to use the memcache cache driver.",
                "ext-pcntl": "Required to use all features of the queue worker.",
                "ext-posix": "Required to use all features of the queue worker.",
                "ext-redis": "Required to use the Redis cache and queue drivers (^4.0|^5.0).",
                "filp/whoops": "Required for friendly error pages in development (^2.4).",
                "fzaninotto/faker": "Required to use the eloquent factory builder (^1.9.1).",
                "guzzlehttp/guzzle": "Required to use the Mailgun mail driver and the ping methods on schedules (^6.0|^7.0).",
                "laravel/tinker": "Required to use the tinker console command (^2.0).",
                "league/flysystem-aws-s3-v3": "Required to use the Flysystem S3 driver (^1.0).",
                "league/flysystem-cached-adapter": "Required to use the Flysystem cache (^1.0).",
                "league/flysystem-sftp": "Required to use the Flysystem SFTP driver (^1.0).",
                "moontoast/math": "Required to use ordered UUIDs (^1.1).",
                "nyholm/psr7": "Required to use PSR-7 bridging features (^1.2).",
                "pda/pheanstalk": "Required to use the beanstalk queue driver (^4.0).",
                "psr/http-message": "Required to allow Storage::put to accept a StreamInterface (^1.0).",
                "pusher/pusher-php-server": "Required to use the Pusher broadcast driver (^4.0).",
                "symfony/cache": "Required to PSR-6 cache bridge (^4.3.4).",
                "symfony/psr-http-message-bridge": "Required to use PSR-7 bridging features (^1.2).",
                "wildbit/swiftmailer-postmark": "Required to use Postmark mail driver (^3.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "6.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Illuminate/Foundation/helpers.php",
                    "src/Illuminate/Support/helpers.php"
                ],
                "psr-4": {
                    "Illuminate\\": "src/Illuminate/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Laravel Framework.",
            "homepage": "https://laravel.com",
            "keywords": [
                "framework",
                "laravel"
            ],
            "time": "2020-03-17T17:08:02+00:00"
        },
        {
            "name": "laravel/tinker",
            "version": "v2.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/tinker.git",
                "reference": "5271893ec90ad9f8d3e34792ac6b72cad3b84cc2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/tinker/zipball/5271893ec90ad9f8d3e34792ac6b72cad3b84cc2",
                "reference": "5271893ec90ad9f8d3e34792ac6b72cad3b84cc2",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^6.0|^7.0|^8.0",
                "illuminate/contracts": "^6.0|^7.0|^8.0",
                "illuminate/support": "^6.0|^7.0|^8.0",
                "php": "^7.2",
                "psy/psysh": "^0.9|^0.10",
                "symfony/var-dumper": "^4.0|^5.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.3.1",
                "phpunit/phpunit": "^8.0|^9.0"
            },
            "suggest": {
                "illuminate/database": "The Illuminate Database package (^6.0|^7.0|^8.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Tinker\\TinkerServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Tinker\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Powerful REPL for the Laravel framework.",
            "keywords": [
                "REPL",
                "Tinker",
                "laravel",
                "psysh"
            ],
            "time": "2020-03-17T15:34:59+00:00"
        },
        {
            "name": "league/commonmark",
            "version": "1.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/commonmark.git",
                "reference": "8015f806173c6ee54de25a87c2d69736696e88db"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/commonmark/zipball/8015f806173c6ee54de25a87c2d69736696e88db",
                "reference": "8015f806173c6ee54de25a87c2d69736696e88db",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "php": "^7.1"
            },
            "conflict": {
                "scrutinizer/ocular": "1.7.*"
            },
            "require-dev": {
                "cebe/markdown": "~1.0",
                "commonmark/commonmark.js": "0.29.1",
                "erusev/parsedown": "~1.0",
                "ext-json": "*",
                "github/gfm": "0.29.0",
                "michelf/php-markdown": "~1.4",
                "mikehaertl/php-shellcommand": "^1.4",
                "phpstan/phpstan-shim": "^0.11.5",
                "phpunit/phpunit": "^7.5",
                "scrutinizer/ocular": "^1.5",
                "symfony/finder": "^6.2"
            },
            "bin": [
                "bin/commonmark"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\CommonMark\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com",
                    "role": "Lead Developer"
                }
            ],
            "description": "Highly-extensible PHP Markdown parser which fully supports the CommonMark spec and Github-Flavored Markdown (GFM)",
            "homepage": "https://commonmark.thephpleague.com",
            "keywords": [
                "commonmark",
                "flavored",
                "gfm",
                "github",
                "github-flavored",
                "markdown",
                "md",
                "parser"
            ],
            "time": "2020-02-28T18:53:50+00:00"
        },
        {
            "name": "league/flysystem",
            "version": "^3.8.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/flysystem.git",
                "reference": "021569195e15f8209b1c4bebb78bd66aa4f08c21"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/021569195e15f8209b1c4bebb78bd66aa4f08c21",
                "reference": "021569195e15f8209b1c4bebb78bd66aa4f08c21",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "php": ">=5.5.9"
            },
            "conflict": {
                "league/flysystem-sftp": "<1.0.6"
            },
            "require-dev": {
                "phpspec/phpspec": "^3.4",
                "phpunit/phpunit": "^5.7.26"
            },
            "suggest": {
                "ext-fileinfo": "Required for MimeType",
                "ext-ftp": "Allows you to use FTP server storage",
                "ext-openssl": "Allows you to use FTPS server storage",
                "league/flysystem-aws-s3-v2": "Allows you to use S3 storage with AWS SDK v2",
                "league/flysystem-aws-s3-v3": "Allows you to use S3 storage with AWS SDK v3",
                "league/flysystem-azure": "Allows you to use Windows Azure Blob storage",
                "league/flysystem-cached-adapter": "Flysystem adapter decorator for metadata caching",
                "league/flysystem-eventable-filesystem": "Allows you to use EventableFilesystem",
                "league/flysystem-rackspace": "Allows you to use Rackspace Cloud Files",
                "league/flysystem-sftp": "Allows you to use SFTP server storage via phpseclib",
                "league/flysystem-webdav": "Allows you to use WebDAV storage",
                "league/flysystem-ziparchive": "Allows you to use ZipArchive adapter",
                "spatie/flysystem-dropbox": "Allows you to use Dropbox storage",
                "srmklive/flysystem-dropbox-v2": "Allows you to use Dropbox storage for PHP 5 applications"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\Flysystem\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frenky.net"
                }
            ],
            "description": "Filesystem abstraction: Many filesystems, one API.",
            "keywords": [
                "Cloud Files",
                "WebDAV",
                "abstraction",
                "aws",
                "cloud",
                "copy.com",
                "dropbox",
                "file systems",
                "files",
                "filesystem",
                "filesystems",
                "ftp",
                "rackspace",
                "remote",
                "s3",
                "sftp",
                "storage"
            ],
            "time": "2020-03-17T18:58:12+00:00"
        },
        {
            "name": "monolog/monolog",
            "version": "^2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/Seldaek/monolog.git",
                "reference": "c861fcba2ca29404dc9e617eedd9eff4616986b8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Seldaek/monolog/zipball/c861fcba2ca29404dc9e617eedd9eff4616986b8",
                "reference": "c861fcba2ca29404dc9e617eedd9eff4616986b8",
                "shasum": ""
            },
            "require": {
                "php": "^7.2",
                "psr/log": "^1.0.1"
            },
            "provide": {
                "psr/log-implementation": "1.0.0"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^2.4.9 || ^3.0",
                "doctrine/couchdb": "~1.0@dev",
                "elasticsearch/elasticsearch": "^6.0",
                "graylog2/gelf-php": "^1.4.2",
                "jakub-onderka/php-parallel-lint": "^0.9",
                "php-amqplib/php-amqplib": "~2.4",
                "php-console/php-console": "^3.1.3",
                "phpspec/prophecy": "^1.6.1",
                "phpunit/phpunit": "^8.3",
                "predis/predis": "^1.1",
                "rollbar/rollbar": "^1.3",
                "ruflin/elastica": ">=0.90 <3.0",
                "swiftmailer/swiftmailer": "^5.3|^6.0"
            },
            "suggest": {
                "aws/aws-sdk-php": "Allow sending log messages to AWS services like DynamoDB",
                "doctrine/couchdb": "Allow sending log messages to a CouchDB server",
                "elasticsearch/elasticsearch": "Allow sending log messages to an Elasticsearch server via official client",
                "ext-amqp": "Allow sending log messages to an AMQP server (1.0+ required)",
                "ext-mbstring": "Allow to work properly with unicode symbols",
                "ext-mongodb": "Allow sending log messages to a MongoDB server (via driver)",
                "graylog2/gelf-php": "Allow sending log messages to a GrayLog2 server",
                "mongodb/mongodb": "Allow sending log messages to a MongoDB server (via library)",
                "php-amqplib/php-amqplib": "Allow sending log messages to an AMQP server using php-amqplib",
                "php-console/php-console": "Allow sending log messages to Google Chrome",
                "rollbar/rollbar": "Allow sending log messages to Rollbar",
                "ruflin/elastica": "Allow sending log messages to an Elastic Search server"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Monolog\\": "src/Monolog"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jordi Boggiano",
                    "email": "j.boggiano@seld.be",
                    "homepage": "http://seld.be"
                }
            ],
            "description": "Sends your logs to files, sockets, inboxes, databases and various web services",
            "homepage": "http://github.com/Seldaek/monolog",
            "keywords": [
                "log",
                "logging",
                "psr-3"
            ],
            "time": "2019-12-20T14:22:59+00:00"
        },
        {
            "name": "nesbot/carbon",
            "version": "^2.47",
            "source": {
                "type": "git",
                "url": "https://github.com/briannesbitt/Carbon.git",
                "reference": "bbc0ab53f41a4c6f223c18efcdbd9bc725eb5d2d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/briannesbitt/Carbon/zipball/bbc0ab53f41a4c6f223c18efcdbd9bc725eb5d2d",
                "reference": "bbc0ab53f41a4c6f223c18efcdbd9bc725eb5d2d",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.1.8 || ^8.0",
                "symfony/translation": "^3.4 || ^4.0 || ^5.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^2.14 || ^3.0",
                "kylekatarnls/multi-tester": "^1.1",
                "phpmd/phpmd": "^2.8",
                "phpstan/phpstan": "^0.11",
                "phpunit/phpunit": "^7.5 || ^8.0",
                "squizlabs/php_codesniffer": "^3.4"
            },
            "bin": [
                "bin/carbon"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Carbon\\Laravel\\ServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Carbon\\": "src/Carbon/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Brian Nesbitt",
                    "email": "brian@nesbot.com",
                    "homepage": "http://nesbot.com"
                },
                {
                    "name": "kylekatarnls",
                    "homepage": "http://github.com/kylekatarnls"
                }
            ],
            "description": "An API extension for DateTime that supports 281 different languages.",
            "homepage": "http://carbon.nesbot.com",
            "keywords": [
                "date",
                "datetime",
                "time"
            ],
            "time": "2020-03-01T11:11:58+00:00"
        },
        {
            "name": "nikic/php-parser",
            "version": "v4.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nikic/PHP-Parser.git",
                "reference": "9a9981c347c5c49d6dfe5cf826bb882b824080dc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nikic/PHP-Parser/zipball/9a9981c347c5c49d6dfe5cf826bb882b824080dc",
                "reference": "9a9981c347c5c49d6dfe5cf826bb882b824080dc",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": ">=7.0"
            },
            "require-dev": {
                "ircmaxell/php-yacc": "0.0.5",
                "phpunit/phpunit": "^6.5 || ^7.0 || ^8.0"
            },
            "bin": [
                "bin/php-parse"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.3-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpParser\\": "lib/PhpParser"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Nikita Popov"
                }
            ],
            "description": "A PHP parser written in PHP",
            "keywords": [
                "parser",
                "php"
            ],
            "time": "2019-11-08T13:50:10+00:00"
        },
        {
            "name": "opis/closure",
            "version": "^4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/opis/closure.git",
                "reference": "93ebc5712cdad8d5f489b500c59d122df2e53969"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/opis/closure/zipball/93ebc5712cdad8d5f489b500c59d122df2e53969",
                "reference": "93ebc5712cdad8d5f489b500c59d122df2e53969",
                "shasum": ""
            },
            "require": {
                "php": "^5.4 || ^7.0"
            },
            "require-dev": {
                "jeremeamia/superclosure": "^2.0",
                "phpunit/phpunit": "^4.0 || ^5.0 || ^6.0 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Opis\\Closure\\": "src/"
                },
                "files": [
                    "functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Marius Sarca",
                    "email": "marius.sarca@gmail.com"
                },
                {
                    "name": "Sorin Sarca",
                    "email": "sarca_sorin@hotmail.com"
                }
            ],
            "description": "A library that can be used to serialize closures (anonymous functions) and arbitrary objects.",
            "homepage": "https://opis.io/closure",
            "keywords": [
                "anonymous functions",
                "closure",
                "function",
                "serializable",
                "serialization",
                "serialize"
            ],
            "time": "2019-11-29T22:36:02+00:00"
        },
        {
            "name": "paragonie/random_compat",
            "version": "v9.99.99",
            "source": {
                "type": "git",
                "url": "https://github.com/paragonie/random_compat.git",
                "reference": "84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/paragonie/random_compat/zipball/84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95",
                "reference": "84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95",
                "shasum": ""
            },
            "require": {
                "php": "^7"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*|5.*",
                "vimeo/psalm": "^1"
            },
            "suggest": {
                "ext-libsodium": "Provides a modern crypto API that can be used to generate random bytes."
            },
            "type": "library",
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Paragon Initiative Enterprises",
                    "email": "security@paragonie.com",
                    "homepage": "https://paragonie.com"
                }
            ],
            "description": "PHP 5.x polyfill for random_bytes() and random_int() from PHP 7",
            "keywords": [
                "csprng",
                "polyfill",
                "pseudorandom",
                "random"
            ],
            "time": "2018-07-02T15:55:56+00:00"
        },
        {
            "name": "phpoption/phpoption",
            "version": "1.7.2",
            "source": {
                "type": "git",
                "url": "https://github.com/schmittjoh/php-option.git",
                "reference": "77f7c4d2e65413aff5b5a8cc8b3caf7a28d81959"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/schmittjoh/php-option/zipball/77f7c4d2e65413aff5b5a8cc8b3caf7a28d81959",
                "reference": "77f7c4d2e65413aff5b5a8cc8b3caf7a28d81959",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.3",
                "phpunit/phpunit": "^4.8.35 || ^5.0 || ^6.0 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpOption\\": "src/PhpOption/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "Apache-2.0"
            ],
            "authors": [
                {
                    "name": "Johannes M. Schmitt",
                    "email": "schmittjoh@gmail.com"
                },
                {
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com"
                }
            ],
            "description": "Option Type for PHP",
            "keywords": [
                "language",
                "option",
                "php",
                "type"
            ],
            "time": "2019-12-15T19:35:24+00:00"
        },
        {
            "name": "psr/container",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/container.git",
                "reference": "b7ce3b176482dbbc1245ebf52b181af44c2cf55f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f",
                "reference": "b7ce3b176482dbbc1245ebf52b181af44c2cf55f",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Container\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common Container Interface (PHP FIG PSR-11)",
            "homepage": "https://github.com/php-fig/container",
            "keywords": [
                "PSR-11",
                "container",
                "container-interface",
                "container-interop",
                "psr"
            ],
            "time": "2017-02-14T16:28:37+00:00"
        },
        {
            "name": "psr/log",
            "version": "1.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/log.git",
                "reference": "446d54b4cb6bf489fc9d75f55843658e6f25d801"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/log/zipball/446d54b4cb6bf489fc9d75f55843658e6f25d801",
                "reference": "446d54b4cb6bf489fc9d75f55843658e6f25d801",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Log\\": "Psr/Log/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interface for logging libraries",
            "homepage": "https://github.com/php-fig/log",
            "keywords": [
                "log",
                "psr",
                "psr-3"
            ],
            "time": "2019-11-01T11:05:21+00:00"
        },
        {
            "name": "psr/simple-cache",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/simple-cache.git",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/simple-cache/zipball/408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\SimpleCache\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interfaces for simple caching",
            "keywords": [
                "cache",
                "caching",
                "psr",
                "psr-16",
                "simple-cache"
            ],
            "time": "2017-10-23T01:57:42+00:00"
        },
        {
            "name": "psy/psysh",
            "version": "v0.10.0",
            "source": {
                "type": "git",
                "url": "https://github.com/bobthecow/psysh.git",
                "reference": "e361c8b7e5114534078e0ce04ddc442b39018a3c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/bobthecow/psysh/zipball/e361c8b7e5114534078e0ce04ddc442b39018a3c",
                "reference": "e361c8b7e5114534078e0ce04ddc442b39018a3c",
                "shasum": ""
            },
            "require": {
                "dnoegel/php-xdg-base-dir": "0.1.*",
                "ext-json": "*",
                "ext-tokenizer": "*",
                "jakub-onderka/php-console-highlighter": "0.4.*|0.3.*",
                "nikic/php-parser": "~4.0|~3.0|~2.0|~1.3",
                "php": "^8.0 || ^7.0 || ^5.5.9",
                "symfony/console": "^6.2",
                "symfony/var-dumper": "~5.0|~4.0|~3.0|~2.7"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.2",
                "hoa/console": "~3.16|~2.15"
            },
            "suggest": {
                "ext-pcntl": "Enabling the PCNTL extension makes PsySH a lot happier :)",
                "ext-pdo-sqlite": "The doc command requires SQLite to work.",
                "ext-posix": "If you have PCNTL, you'll want the POSIX extension as well.",
                "ext-readline": "Enables support for arrow-key history navigation, and showing and manipulating command history.",
                "hoa/console": "A pure PHP readline implementation. You'll want this if your PHP install doesn't already support readline or libedit."
            },
            "bin": [
                "bin/psysh"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "0.10.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/functions.php"
                ],
                "psr-4": {
                    "Psy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Justin Hileman",
                    "email": "justin@justinhileman.info",
                    "homepage": "http://justinhileman.com"
                }
            ],
            "description": "An interactive shell for modern PHP.",
            "homepage": "http://psysh.org",
            "keywords": [
                "REPL",
                "console",
                "interactive",
                "shell"
            ],
            "time": "2020-03-15T22:52:37+00:00"
        },
        {
            "name": "ramsey/uuid",
            "version": "^4.3",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/uuid.git",
                "reference": "7e1633a6964b48589b142d60542f9ed31bd37a92"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/uuid/zipball/7e1633a6964b48589b142d60542f9ed31bd37a92",
                "reference": "7e1633a6964b48589b142d60542f9ed31bd37a92",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "paragonie/random_compat": "^1 | ^2 | 9.99.99",
                "php": "^5.4 | ^7 | ^8",
                "symfony/polyfill-ctype": "^1.8"
            },
            "replace": {
                "rhumsaa/uuid": "self.version"
            },
            "require-dev": {
                "codeception/aspect-mock": "^1 | ^2",
                "doctrine/annotations": "^1.2",
                "goaop/framework": "1.0.0-alpha.2 | ^1 | ^2.1",
                "jakub-onderka/php-parallel-lint": "^1",
                "mockery/mockery": "^0.9.11 | ^1",
                "moontoast/math": "^1.1",
                "paragonie/random-lib": "^2",
                "php-mock/php-mock-phpunit": "^0.3 | ^1.1",
                "phpunit/phpunit": "^4.8 | ^5.4 | ^6.5",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "suggest": {
                "ext-ctype": "Provides support for PHP Ctype functions",
                "ext-libsodium": "Provides the PECL libsodium extension for use with the SodiumRandomGenerator",
                "ext-openssl": "Provides the OpenSSL extension for use with the OpenSslGenerator",
                "ext-uuid": "Provides the PECL UUID extension for use with the PeclUuidTimeGenerator and PeclUuidRandomGenerator",
                "moontoast/math": "Provides support for converting UUID to 128-bit integer (in string form).",
                "paragonie/random-lib": "Provides RandomLib for use with the RandomLibAdapter",
                "ramsey/uuid-console": "A console application for generating UUIDs with ramsey/uuid",
                "ramsey/uuid-doctrine": "Allows the use of Ramsey\\Uuid\\Uuid as Doctrine field type."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Ramsey\\Uuid\\": "src/"
                },
                "files": [
                    "src/functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ben Ramsey",
                    "email": "ben@benramsey.com",
                    "homepage": "https://benramsey.com"
                },
                {
                    "name": "Marijn Huizendveld",
                    "email": "marijn.huizendveld@gmail.com"
                },
                {
                    "name": "Thibaud Fabre",
                    "email": "thibaud@aztech.io"
                }
            ],
            "description": "Formerly rhumsaa/uuid. A PHP 5.4+ library for generating RFC 4122 version 1, 3, 4, and 5 universally unique identifiers (UUID).",
            "homepage": "https://github.com/ramsey/uuid",
            "keywords": [
                "guid",
                "identifier",
                "uuid"
            ],
            "time": "2020-02-21T04:36:14+00:00"
        },
        {
            "name": "swiftmailer/swiftmailer",
            "version": "v6.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/swiftmailer/swiftmailer.git",
                "reference": "149cfdf118b169f7840bbe3ef0d4bc795d1780c9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/swiftmailer/swiftmailer/zipball/149cfdf118b169f7840bbe3ef0d4bc795d1780c9",
                "reference": "149cfdf118b169f7840bbe3ef0d4bc795d1780c9",
                "shasum": ""
            },
            "require": {
                "egulias/email-validator": "~2.0",
                "php": ">=7.0.0",
                "symfony/polyfill-iconv": "^1.0",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0"
            },
            "require-dev": {
                "mockery/mockery": "~0.9.1",
                "symfony/phpunit-bridge": "^3.4.19|^4.1.8"
            },
            "suggest": {
                "ext-intl": "Needed to support internationalized email addresses",
                "true/punycode": "Needed to support internationalized email addresses, if ext-intl is not installed"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "6.2-dev"
                }
            },
            "autoload": {
                "files": [
                    "lib/swift_required.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Chris Corbyn"
                },
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                }
            ],
            "description": "Swiftmailer, free feature-rich PHP mailer",
            "homepage": "https://swiftmailer.symfony.com",
            "keywords": [
                "email",
                "mail",
                "mailer"
            ],
            "time": "2019-11-12T09:31:26+00:00"
        },
        {
            "name": "symfony/console",
            "version": "^6.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/console.git",
                "reference": "4fa15ae7be74e53f6ec8c83ed403b97e23b665e9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/console/zipball/4fa15ae7be74e53f6ec8c83ed403b97e23b665e9",
                "reference": "4fa15ae7be74e53f6ec8c83ed403b97e23b665e9",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php73": "^1.8",
                "symfony/service-contracts": "^1.1|^2"
            },
            "conflict": {
                "symfony/dependency-injection": "<3.4",
                "symfony/event-dispatcher": "<4.3|>=5",
                "symfony/lock": "<4.4",
                "symfony/process": "<3.3"
            },
            "provide": {
                "psr/log-implementation": "1.0"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "^3.4|^4.0|^5.0",
                "symfony/dependency-injection": "^3.4|^4.0|^5.0",
                "symfony/event-dispatcher": "^4.3",
                "symfony/lock": "^4.4|^5.0",
                "symfony/process": "^3.4|^4.0|^5.0",
                "symfony/var-dumper": "^4.3|^5.0"
            },
            "suggest": {
                "psr/log": "For using the console logger",
                "symfony/event-dispatcher": "",
                "symfony/lock": "",
                "symfony/process": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Console\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Console Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-24T13:10:00+00:00"
        },
        {
            "name": "symfony/css-selector",
            "version": "v5.0.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/css-selector.git",
                "reference": "a0b51ba9938ccc206d9284de7eb527c2d4550b44"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/css-selector/zipball/a0b51ba9938ccc206d9284de7eb527c2d4550b44",
                "reference": "a0b51ba9938ccc206d9284de7eb527c2d4550b44",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\CssSelector\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Jean-François Simon",
                    "email": "jeanfrancois.simon@sensiolabs.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony CssSelector Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-04T09:41:09+00:00"
        },
        {
            "name": "symfony/debug",
            "version": "^5.4",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/debug.git",
                "reference": "a980d87a659648980d89193fd8b7a7ca89d97d21"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/debug/zipball/a980d87a659648980d89193fd8b7a7ca89d97d21",
                "reference": "a980d87a659648980d89193fd8b7a7ca89d97d21",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "psr/log": "~1.0"
            },
            "conflict": {
                "symfony/http-kernel": "^6.2"
            },
            "require-dev": {
                "symfony/http-kernel": "^6.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Debug\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Debug Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-23T14:41:43+00:00"
        },
        {
            "name": "symfony/error-handler",
            "version": "v4.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/error-handler.git",
                "reference": "89aa4b9ac6f1f35171b8621b24f60477312085be"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/error-handler/zipball/89aa4b9ac6f1f35171b8621b24f60477312085be",
                "reference": "89aa4b9ac6f1f35171b8621b24f60477312085be",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "psr/log": "~1.0",
                "symfony/debug": "^5.4",
                "symfony/var-dumper": "^4.4|^5.0"
            },
            "require-dev": {
                "symfony/http-kernel": "^6.2",
                "symfony/serializer": "^4.4|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\ErrorHandler\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony ErrorHandler Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-26T11:45:31+00:00"
        },
        {
            "name": "symfony/event-dispatcher",
            "version": "v4.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher.git",
                "reference": "4ad8e149799d3128621a3a1f70e92b9897a8930d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher/zipball/4ad8e149799d3128621a3a1f70e92b9897a8930d",
                "reference": "4ad8e149799d3128621a3a1f70e92b9897a8930d",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "symfony/event-dispatcher-contracts": "^1.1"
            },
            "conflict": {
                "symfony/dependency-injection": "<3.4"
            },
            "provide": {
                "psr/event-dispatcher-implementation": "1.0",
                "symfony/event-dispatcher-implementation": "1.1"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "^3.4|^4.0|^5.0",
                "symfony/dependency-injection": "^3.4|^4.0|^5.0",
                "symfony/expression-language": "^3.4|^4.0|^5.0",
                "symfony/http-foundation": "^6.2",
                "symfony/service-contracts": "^1.1|^2",
                "symfony/stopwatch": "^3.4|^4.0|^5.0"
            },
            "suggest": {
                "symfony/dependency-injection": "",
                "symfony/http-kernel": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\EventDispatcher\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony EventDispatcher Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-04T09:32:40+00:00"
        },
        {
            "name": "symfony/event-dispatcher-contracts",
            "version": "v1.1.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher-contracts.git",
                "reference": "c43ab685673fb6c8d84220c77897b1d6cdbe1d18"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/c43ab685673fb6c8d84220c77897b1d6cdbe1d18",
                "reference": "c43ab685673fb6c8d84220c77897b1d6cdbe1d18",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3"
            },
            "suggest": {
                "psr/event-dispatcher": "",
                "symfony/event-dispatcher-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\EventDispatcher\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to dispatching event",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "time": "2019-09-17T09:54:03+00:00"
        },
        {
            "name": "symfony/finder",
            "version": "^6.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/finder.git",
                "reference": "ea69c129aed9fdeca781d4b77eb20b62cf5d5357"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/finder/zipball/ea69c129aed9fdeca781d4b77eb20b62cf5d5357",
                "reference": "ea69c129aed9fdeca781d4b77eb20b62cf5d5357",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Finder\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Finder Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-14T07:42:58+00:00"
        },
        {
            "name": "symfony/http-foundation",
            "version": "^6.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-foundation.git",
                "reference": "7e41b4fcad4619535f45f8bfa7744c4f384e1648"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-foundation/zipball/7e41b4fcad4619535f45f8bfa7744c4f384e1648",
                "reference": "7e41b4fcad4619535f45f8bfa7744c4f384e1648",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "symfony/mime": "^4.3|^5.0",
                "symfony/polyfill-mbstring": "~1.1"
            },
            "require-dev": {
                "predis/predis": "~1.0",
                "symfony/expression-language": "^3.4|^4.0|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpFoundation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony HttpFoundation Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-13T19:40:01+00:00"
        },
        {
            "name": "symfony/http-kernel",
            "version": "^6.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-kernel.git",
                "reference": "8c8734486dada83a6041ab744709bdc1651a8462"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-kernel/zipball/8c8734486dada83a6041ab744709bdc1651a8462",
                "reference": "8c8734486dada83a6041ab744709bdc1651a8462",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "psr/log": "~1.0",
                "symfony/error-handler": "^4.4",
                "symfony/event-dispatcher": "^4.4",
                "symfony/http-foundation": "^6.2",
                "symfony/polyfill-ctype": "^1.8",
                "symfony/polyfill-php73": "^1.9"
            },
            "conflict": {
                "symfony/browser-kit": "<4.3",
                "symfony/config": "<3.4",
                "symfony/console": "^6.2",
                "symfony/dependency-injection": "<4.3",
                "symfony/translation": "<4.2",
                "twig/twig": "<1.34|<2.4,>=2"
            },
            "provide": {
                "psr/log-implementation": "1.0"
            },
            "require-dev": {
                "psr/cache": "~1.0",
                "symfony/browser-kit": "^4.3|^5.0",
                "symfony/config": "^3.4|^4.0|^5.0",
                "symfony/console": "^6.2",
                "symfony/css-selector": "^3.4|^4.0|^5.0",
                "symfony/dependency-injection": "^4.3|^5.0",
                "symfony/dom-crawler": "^3.4|^4.0|^5.0",
                "symfony/expression-language": "^3.4|^4.0|^5.0",
                "symfony/finder": "^6.2",
                "symfony/process": "^3.4|^4.0|^5.0",
                "symfony/routing": "^3.4|^4.0|^5.0",
                "symfony/stopwatch": "^3.4|^4.0|^5.0",
                "symfony/templating": "^3.4|^4.0|^5.0",
                "symfony/translation": "^4.2|^5.0",
                "symfony/translation-contracts": "^1.1|^2",
                "twig/twig": "^1.34|^2.4|^3.0"
            },
            "suggest": {
                "symfony/browser-kit": "",
                "symfony/config": "",
                "symfony/console": "",
                "symfony/dependency-injection": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpKernel\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony HttpKernel Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-29T10:31:38+00:00"
        },
        {
            "name": "symfony/mime",
            "version": "v5.0.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/mime.git",
                "reference": "9b3e5b5e58c56bbd76628c952d2b78556d305f3c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/mime/zipball/9b3e5b5e58c56bbd76628c952d2b78556d305f3c",
                "reference": "9b3e5b5e58c56bbd76628c952d2b78556d305f3c",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0"
            },
            "conflict": {
                "symfony/mailer": "<4.4"
            },
            "require-dev": {
                "egulias/email-validator": "^2.1.10",
                "symfony/dependency-injection": "^4.4|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Mime\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "A library to manipulate MIME messages",
            "homepage": "https://symfony.com",
            "keywords": [
                "mime",
                "mime-type"
            ],
            "time": "2020-02-04T09:41:09+00:00"
        },
        {
            "name": "symfony/polyfill-ctype",
            "version": "v1.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-ctype.git",
                "reference": "fbdeaec0df06cf3d51c93de80c7eb76e271f5a38"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/fbdeaec0df06cf3d51c93de80c7eb76e271f5a38",
                "reference": "fbdeaec0df06cf3d51c93de80c7eb76e271f5a38",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-ctype": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.14-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Ctype\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Gert de Pagter",
                    "email": "BackEndTea@gmail.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for ctype functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "ctype",
                "polyfill",
                "portable"
            ],
            "time": "2020-01-13T11:15:53+00:00"
        },
        {
            "name": "symfony/polyfill-iconv",
            "version": "v1.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-iconv.git",
                "reference": "926832ce51059bb58211b7b2080a88e0c3b5328e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-iconv/zipball/926832ce51059bb58211b7b2080a88e0c3b5328e",
                "reference": "926832ce51059bb58211b7b2080a88e0c3b5328e",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-iconv": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.14-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Iconv\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Iconv extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "iconv",
                "polyfill",
                "portable",
                "shim"
            ],
            "time": "2020-01-13T11:15:53+00:00"
        },
        {
            "name": "symfony/polyfill-intl-idn",
            "version": "v1.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-idn.git",
                "reference": "6842f1a39cf7d580655688069a03dd7cd83d244a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/6842f1a39cf7d580655688069a03dd7cd83d244a",
                "reference": "6842f1a39cf7d580655688069a03dd7cd83d244a",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3",
                "symfony/polyfill-mbstring": "^1.3",
                "symfony/polyfill-php72": "^1.10"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.14-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Idn\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Laurent Bassin",
                    "email": "laurent@bassin.info"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "idn",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "time": "2020-01-17T12:01:36+00:00"
        },
        {
            "name": "symfony/polyfill-mbstring",
            "version": "v1.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-mbstring.git",
                "reference": "34094cfa9abe1f0f14f48f490772db7a775559f2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/34094cfa9abe1f0f14f48f490772db7a775559f2",
                "reference": "34094cfa9abe1f0f14f48f490772db7a775559f2",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "suggest": {
                "ext-mbstring": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.14-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Mbstring\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Mbstring extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "mbstring",
                "polyfill",
                "portable",
                "shim"
            ],
            "time": "2020-01-13T11:15:53+00:00"
        },
        {
            "name": "symfony/polyfill-php72",
            "version": "v1.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php72.git",
                "reference": "46ecacf4751dd0dc81e4f6bf01dbf9da1dc1dadf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php72/zipball/46ecacf4751dd0dc81e4f6bf01dbf9da1dc1dadf",
                "reference": "46ecacf4751dd0dc81e4f6bf01dbf9da1dc1dadf",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.14-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php72\\": ""
                },
                "files": [
                    "bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "time": "2020-01-13T11:15:53+00:00"
        },
        {
            "name": "symfony/polyfill-php73",
            "version": "v1.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php73.git",
                "reference": "5e66a0fa1070bf46bec4bea7962d285108edd675"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/5e66a0fa1070bf46bec4bea7962d285108edd675",
                "reference": "5e66a0fa1070bf46bec4bea7962d285108edd675",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.14-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Polyfill\\Php73\\": ""
                },
                "files": [
                    "bootstrap.php"
                ],
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "time": "2020-01-13T11:15:53+00:00"
        },
        {
            "name": "symfony/process",
            "version": "v4.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/process.git",
                "reference": "bf9166bac906c9e69fb7a11d94875e7ced97bcd7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/process/zipball/bf9166bac906c9e69fb7a11d94875e7ced97bcd7",
                "reference": "bf9166bac906c9e69fb7a11d94875e7ced97bcd7",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Process\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Process Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-07T20:06:44+00:00"
        },
        {
            "name": "symfony/routing",
            "version": "v4.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/routing.git",
                "reference": "4124d621d0e445732520037f888a0456951bde8c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/routing/zipball/4124d621d0e445732520037f888a0456951bde8c",
                "reference": "4124d621d0e445732520037f888a0456951bde8c",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3"
            },
            "conflict": {
                "symfony/config": "<4.2",
                "symfony/dependency-injection": "<3.4",
                "symfony/yaml": "<3.4"
            },
            "require-dev": {
                "doctrine/annotations": "~1.2",
                "psr/log": "~1.0",
                "symfony/config": "^4.2|^5.0",
                "symfony/dependency-injection": "^3.4|^4.0|^5.0",
                "symfony/expression-language": "^3.4|^4.0|^5.0",
                "symfony/http-foundation": "^6.2",
                "symfony/yaml": "^3.4|^4.0|^5.0"
            },
            "suggest": {
                "doctrine/annotations": "For using the annotation loader",
                "symfony/config": "For using the all-in-one router or any loader",
                "symfony/expression-language": "For using expression matching",
                "symfony/http-foundation": "For using a Symfony Request object",
                "symfony/yaml": "For using the YAML loader"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Routing\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Routing Component",
            "homepage": "https://symfony.com",
            "keywords": [
                "router",
                "routing",
                "uri",
                "url"
            ],
            "time": "2020-02-25T12:41:09+00:00"
        },
        {
            "name": "symfony/service-contracts",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/service-contracts.git",
                "reference": "144c5e51266b281231e947b51223ba14acf1a749"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/service-contracts/zipball/144c5e51266b281231e947b51223ba14acf1a749",
                "reference": "144c5e51266b281231e947b51223ba14acf1a749",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5",
                "psr/container": "^1.0"
            },
            "suggest": {
                "symfony/service-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Service\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to writing services",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "time": "2019-11-18T17:27:11+00:00"
        },
        {
            "name": "symfony/translation",
            "version": "v4.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation.git",
                "reference": "0a19a77fba20818a969ef03fdaf1602de0546353"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation/zipball/0a19a77fba20818a969ef03fdaf1602de0546353",
                "reference": "0a19a77fba20818a969ef03fdaf1602de0546353",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/translation-contracts": "^1.1.6|^2"
            },
            "conflict": {
                "symfony/config": "<3.4",
                "symfony/dependency-injection": "<3.4",
                "symfony/http-kernel": "^6.2",
                "symfony/yaml": "<3.4"
            },
            "provide": {
                "symfony/translation-implementation": "1.0"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "^3.4|^4.0|^5.0",
                "symfony/console": "^6.2",
                "symfony/dependency-injection": "^3.4|^4.0|^5.0",
                "symfony/finder": "^6.2",
                "symfony/http-kernel": "^4.4",
                "symfony/intl": "^3.4|^4.0|^5.0",
                "symfony/service-contracts": "^1.1.2|^2",
                "symfony/yaml": "^3.4|^4.0|^5.0"
            },
            "suggest": {
                "psr/log-implementation": "To use logging capability in translator",
                "symfony/config": "",
                "symfony/yaml": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Translation Component",
            "homepage": "https://symfony.com",
            "time": "2020-02-04T09:32:40+00:00"
        },
        {
            "name": "symfony/translation-contracts",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation-contracts.git",
                "reference": "8cc682ac458d75557203b2f2f14b0b92e1c744ed"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation-contracts/zipball/8cc682ac458d75557203b2f2f14b0b92e1c744ed",
                "reference": "8cc682ac458d75557203b2f2f14b0b92e1c744ed",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5"
            },
            "suggest": {
                "symfony/translation-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Translation\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to translation",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "time": "2019-11-18T17:27:11+00:00"
        },
        {
            "name": "symfony/var-dumper",
            "version": "v4.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/var-dumper.git",
                "reference": "2572839911702b0405479410ea7a1334bfab0b96"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/var-dumper/zipball/2572839911702b0405479410ea7a1334bfab0b96",
                "reference": "2572839911702b0405479410ea7a1334bfab0b96",
                "shasum": ""
            },
            "require": {
                "php": "^7.1.3",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php72": "~1.5"
            },
            "conflict": {
                "phpunit/phpunit": "<4.8.35|<5.4.3,>=5.0",
                "symfony/console": "^6.2"
            },
            "require-dev": {
                "ext-iconv": "*",
                "symfony/console": "^6.2",
                "symfony/process": "^4.4|^5.0",
                "twig/twig": "^1.34|^2.4|^3.0"
            },
            "suggest": {
                "ext-iconv": "To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).",
                "ext-intl": "To show region name in time zone dump",
                "symfony/console": "To use the ServerDumpCommand and/or the bin/var-dump-server script"
            },
            "bin": [
                "Resources/bin/var-dump-server"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.4-dev"
                }
            },
            "autoload": {
                "files": [
                    "Resources/functions/dump.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\VarDumper\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony mechanism for exploring and dumping PHP variables",
            "homepage": "https://symfony.com",
            "keywords": [
                "debug",
                "dump"
            ],
            "time": "2020-02-24T13:10:00+00:00"
        },
        {
            "name": "tijsverkoyen/css-to-inline-styles",
            "version": "2.2.2",
            "source": {
                "type": "git",
                "url": "https://github.com/tijsverkoyen/CssToInlineStyles.git",
                "reference": "dda2ee426acd6d801d5b7fd1001cde9b5f790e15"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/tijsverkoyen/CssToInlineStyles/zipball/dda2ee426acd6d801d5b7fd1001cde9b5f790e15",
                "reference": "dda2ee426acd6d801d5b7fd1001cde9b5f790e15",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "php": "^5.5 || ^7.0",
                "symfony/css-selector": "^2.7 || ^3.0 || ^4.0 || ^5.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "TijsVerkoyen\\CssToInlineStyles\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Tijs Verkoyen",
                    "email": "css_to_inline_styles@verkoyen.eu",
                    "role": "Developer"
                }
            ],
            "description": "CssToInlineStyles is a class that enables you to convert HTML-pages/files into HTML-pages/files with inline styles. This is very useful when you're sending emails.",
            "homepage": "https://github.com/tijsverkoyen/CssToInlineStyles",
            "time": "2019-10-24T08:53:34+00:00"
        },
        {
            "name": "vlucas/phpdotenv",
            "version": "v3.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/vlucas/phpdotenv.git",
                "reference": "8f7961f7b9deb3b432452c18093cf16f88205902"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/8f7961f7b9deb3b432452c18093cf16f88205902",
                "reference": "8f7961f7b9deb3b432452c18093cf16f88205902",
                "shasum": ""
            },
            "require": {
                "php": "^5.4 || ^7.0",
                "phpoption/phpoption": "^1.5",
                "symfony/polyfill-ctype": "^1.9"
            },
            "require-dev": {
                "ext-filter": "*",
                "phpunit/phpunit": "^4.8.35 || ^5.0 || ^6.0 || ^7.0"
            },
            "suggest": {
                "ext-filter": "Required to use the boolean validator."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.6-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dotenv\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com",
                    "homepage": "https://gjcampbell.co.uk/"
                },
                {
                    "name": "Vance Lucas",
                    "email": "vance@vancelucas.com",
                    "homepage": "https://vancelucas.com/"
                }
            ],
            "description": "Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.",
            "keywords": [
                "dotenv",
                "env",
                "environment"
            ],
            "time": "2020-03-12T13:44:00+00:00"
        }
    ],
    "packages-dev": [
        {
            "name": "doctrine/instantiator",
            "version": "1.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/instantiator.git",
                "reference": "ae466f726242e637cebdd526a7d991b9433bacf1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/instantiator/zipball/ae466f726242e637cebdd526a7d991b9433bacf1",
                "reference": "ae466f726242e637cebdd526a7d991b9433bacf1",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "doctrine/coding-standard": "^6.0",
                "ext-pdo": "*",
                "ext-phar": "*",
                "phpbench/phpbench": "^0.13",
                "phpstan/phpstan-phpunit": "^0.11",
                "phpstan/phpstan-shim": "^0.11",
                "phpunit/phpunit": "^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Instantiator\\": "src/Doctrine/Instantiator/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Marco Pivetta",
                    "email": "ocramius@gmail.com",
                    "homepage": "http://ocramius.github.com/"
                }
            ],
            "description": "A small, lightweight utility to instantiate objects in PHP without invoking their constructors",
            "homepage": "https://www.doctrine-project.org/projects/instantiator.html",
            "keywords": [
                "constructor",
                "instantiate"
            ],
            "time": "2019-10-21T16:45:58+00:00"
        },
        {
            "name": "facade/flare-client-php",
            "version": "1.3.2",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/flare-client-php.git",
                "reference": "db1e03426e7f9472c9ecd1092aff00f56aa6c004"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/flare-client-php/zipball/db1e03426e7f9472c9ecd1092aff00f56aa6c004",
                "reference": "db1e03426e7f9472c9ecd1092aff00f56aa6c004",
                "shasum": ""
            },
            "require": {
                "facade/ignition-contracts": "~1.0",
                "illuminate/pipeline": "^5.5|^6.0|^7.0",
                "php": "^7.1",
                "symfony/http-foundation": "^6.2",
                "symfony/var-dumper": "^3.4|^4.0|^5.0"
            },
            "require-dev": {
                "larapack/dd": "^1.1",
                "phpunit/phpunit": "^7.5.16",
                "spatie/phpunit-snapshot-assertions": "^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Facade\\FlareClient\\": "src"
                },
                "files": [
                    "src/helpers.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Send PHP errors to Flare",
            "homepage": "https://github.com/facade/flare-client-php",
            "keywords": [
                "exception",
                "facade",
                "flare",
                "reporting"
            ],
            "time": "2020-03-02T15:52:04+00:00"
        },
        {
            "name": "facade/ignition",
            "version": "1.16.1",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/ignition.git",
                "reference": "af05ac5ee8587395d7474ec0681c08776a2cb09d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/ignition/zipball/af05ac5ee8587395d7474ec0681c08776a2cb09d",
                "reference": "af05ac5ee8587395d7474ec0681c08776a2cb09d",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-mbstring": "*",
                "facade/flare-client-php": "^1.3",
                "facade/ignition-contracts": "^1.0",
                "filp/whoops": "^2.4",
                "illuminate/support": "~5.5.0 || ~5.6.0 || ~5.7.0 || ~5.8.0 || ^6.0",
                "monolog/monolog": "^2.3",
                "php": "^7.1",
                "scrivo/highlight.php": "^9.15",
                "symfony/console": "^6.2",
                "symfony/var-dumper": "^3.4 || ^4.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^2.14",
                "mockery/mockery": "^1.2",
                "orchestra/testbench": "^3.5 || ^3.6 || ^3.7 || ^3.8 || ^4.0"
            },
            "suggest": {
                "laravel/telescope": "^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Facade\\Ignition\\IgnitionServiceProvider"
                    ],
                    "aliases": {
                        "Flare": "Facade\\Ignition\\Facades\\Flare"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Facade\\Ignition\\": "src"
                },
                "files": [
                    "src/helpers.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "A beautiful error page for Laravel applications.",
            "homepage": "https://github.com/facade/ignition",
            "keywords": [
                "error",
                "flare",
                "laravel",
                "page"
            ],
            "time": "2020-03-05T12:39:07+00:00"
        },
        {
            "name": "facade/ignition-contracts",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/ignition-contracts.git",
                "reference": "f445db0fb86f48e205787b2592840dd9c80ded28"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/ignition-contracts/zipball/f445db0fb86f48e205787b2592840dd9c80ded28",
                "reference": "f445db0fb86f48e205787b2592840dd9c80ded28",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Facade\\IgnitionContracts\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://flareapp.io",
                    "role": "Developer"
                }
            ],
            "description": "Solution contracts for Ignition",
            "homepage": "https://github.com/facade/ignition-contracts",
            "keywords": [
                "contracts",
                "flare",
                "ignition"
            ],
            "time": "2019-08-30T14:06:08+00:00"
        },
        {
            "name": "filp/whoops",
            "version": "2.7.1",
            "source": {
                "type": "git",
                "url": "https://github.com/filp/whoops.git",
                "reference": "fff6f1e4f36be0e0d0b84d66b413d9dcb0c49130"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/filp/whoops/zipball/fff6f1e4f36be0e0d0b84d66b413d9dcb0c49130",
                "reference": "fff6f1e4f36be0e0d0b84d66b413d9dcb0c49130",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0",
                "psr/log": "^1.0.1"
            },
            "require-dev": {
                "mockery/mockery": "^0.9 || ^1.0",
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0",
                "symfony/var-dumper": "^2.6 || ^3.0 || ^4.0 || ^5.0"
            },
            "suggest": {
                "symfony/var-dumper": "Pretty print complex values better with var-dumper available",
                "whoops/soap": "Formats errors as SOAP responses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.6-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Whoops\\": "src/Whoops/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Filipe Dobreira",
                    "homepage": "https://github.com/filp",
                    "role": "Developer"
                }
            ],
            "description": "php error handling for cool kids",
            "homepage": "https://filp.github.io/whoops/",
            "keywords": [
                "error",
                "exception",
                "handling",
                "library",
                "throwable",
                "whoops"
            ],
            "time": "2020-01-15T10:00:00+00:00"
        },
        {
            "name": "hamcrest/hamcrest-php",
            "version": "v2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/hamcrest/hamcrest-php.git",
                "reference": "776503d3a8e85d4f9a1148614f95b7a608b046ad"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/hamcrest/hamcrest-php/zipball/776503d3a8e85d4f9a1148614f95b7a608b046ad",
                "reference": "776503d3a8e85d4f9a1148614f95b7a608b046ad",
                "shasum": ""
            },
            "require": {
                "php": "^5.3|^7.0"
            },
            "replace": {
                "cordoval/hamcrest-php": "*",
                "davedevelopment/hamcrest-php": "*",
                "kodova/hamcrest-php": "*"
            },
            "require-dev": {
                "phpunit/php-file-iterator": "1.3.3",
                "phpunit/phpunit": "~4.0",
                "satooshi/php-coveralls": "^1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "hamcrest"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD"
            ],
            "description": "This is the PHP port of Hamcrest Matchers",
            "keywords": [
                "test"
            ],
            "time": "2016-01-20T08:20:44+00:00"
        },
        {
            "name": "laravel/ui",
            "version": "v1.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/ui.git",
                "reference": "bb64fca681566ca94457d490a00f899516e75664"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/ui/zipball/bb64fca681566ca94457d490a00f899516e75664",
                "reference": "bb64fca681566ca94457d490a00f899516e75664",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "~5.8|^6.0",
                "illuminate/filesystem": "~5.8|^6.0",
                "illuminate/support": "~5.8|^6.0",
                "php": "^7.1.3"
            },
            "require-dev": {
                "mockery/mockery": "^1.0",
                "phpunit/phpunit": "^8.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Laravel\\Ui\\UiServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Ui\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Laravel UI utilities and presets.",
            "keywords": [
                "laravel",
                "ui"
            ],
            "time": "2020-02-13T21:12:28+00:00"
        },
        {
            "name": "mockery/mockery",
            "version": "1.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/mockery/mockery.git",
                "reference": "f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/mockery/mockery/zipball/f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be",
                "reference": "f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be",
                "shasum": ""
            },
            "require": {
                "hamcrest/hamcrest-php": "~2.0",
                "lib-pcre": ">=7.0",
                "php": ">=5.6.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~5.7.10|~6.5|~7.0|~8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.3.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Mockery": "library/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Pádraic Brady",
                    "email": "padraic.brady@gmail.com",
                    "homepage": "http://blog.astrumfutura.com"
                },
                {
                    "name": "Dave Marshall",
                    "email": "dave.marshall@atstsolutions.co.uk",
                    "homepage": "http://davedevelopment.co.uk"
                }
            ],
            "description": "Mockery is a simple yet flexible PHP mock object framework",
            "homepage": "https://github.com/mockery/mockery",
            "keywords": [
                "BDD",
                "TDD",
                "library",
                "mock",
                "mock objects",
                "mockery",
                "stub",
                "test",
                "test double",
                "testing"
            ],
            "time": "2019-12-26T09:49:15+00:00"
        },
        {
            "name": "myclabs/deep-copy",
            "version": "1.9.5",
            "source": {
                "type": "git",
                "url": "https://github.com/myclabs/DeepCopy.git",
                "reference": "b2c28789e80a97badd14145fda39b545d83ca3ef"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/myclabs/DeepCopy/zipball/b2c28789e80a97badd14145fda39b545d83ca3ef",
                "reference": "b2c28789e80a97badd14145fda39b545d83ca3ef",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "replace": {
                "myclabs/deep-copy": "self.version"
            },
            "require-dev": {
                "doctrine/collections": "^1.0",
                "doctrine/common": "^2.6",
                "phpunit/phpunit": "^7.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "DeepCopy\\": "src/DeepCopy/"
                },
                "files": [
                    "src/DeepCopy/deep_copy.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Create deep copies (clones) of your objects",
            "keywords": [
                "clone",
                "copy",
                "duplicate",
                "object",
                "object graph"
            ],
            "time": "2020-01-17T21:11:47+00:00"
        },
        {
            "name": "nunomaduro/collision",
            "version": "v3.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/nunomaduro/collision.git",
                "reference": "af42d339fe2742295a54f6fdd42aaa6f8c4aca68"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nunomaduro/collision/zipball/af42d339fe2742295a54f6fdd42aaa6f8c4aca68",
                "reference": "af42d339fe2742295a54f6fdd42aaa6f8c4aca68",
                "shasum": ""
            },
            "require": {
                "filp/whoops": "^2.1.4",
                "jakub-onderka/php-console-highlighter": "0.3.*|0.4.*",
                "php": "^7.1",
                "symfony/console": "^6.2"
            },
            "require-dev": {
                "laravel/framework": "5.8.*",
                "nunomaduro/larastan": "^0.3.0",
                "phpstan/phpstan": "^0.11",
                "phpunit/phpunit": "~8.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "NunoMaduro\\Collision\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nuno Maduro",
                    "email": "enunomaduro@gmail.com"
                }
            ],
            "description": "Cli error handling for console/command-line PHP applications.",
            "keywords": [
                "artisan",
                "cli",
                "command-line",
                "console",
                "error",
                "handling",
                "laravel",
                "laravel-zero",
                "php",
                "symfony"
            ],
            "time": "2019-03-07T21:35:13+00:00"
        },
        {
            "name": "phar-io/manifest",
            "version": "1.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/manifest.git",
                "reference": "7761fcacf03b4d4f16e7ccb606d4879ca431fcf4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/manifest/zipball/7761fcacf03b4d4f16e7ccb606d4879ca431fcf4",
                "reference": "7761fcacf03b4d4f16e7ccb606d4879ca431fcf4",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-phar": "*",
                "phar-io/version": "^2.0",
                "php": "^5.6 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Component for reading phar.io manifest information from a PHP Archive (PHAR)",
            "time": "2018-07-08T19:23:20+00:00"
        },
        {
            "name": "phar-io/version",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/version.git",
                "reference": "45a2ec53a73c70ce41d55cedef9063630abaf1b6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/version/zipball/45a2ec53a73c70ce41d55cedef9063630abaf1b6",
                "reference": "45a2ec53a73c70ce41d55cedef9063630abaf1b6",
                "shasum": ""
            },
            "require": {
                "php": "^5.6 || ^7.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Library for handling version information and constraints",
            "time": "2018-07-08T19:19:57+00:00"
        },
        {
            "name": "phpdocumentor/reflection-common",
            "version": "2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionCommon.git",
                "reference": "63a995caa1ca9e5590304cd845c15ad6d482a62a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/63a995caa1ca9e5590304cd845c15ad6d482a62a",
                "reference": "63a995caa1ca9e5590304cd845c15ad6d482a62a",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "~6"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jaap van Otterdijk",
                    "email": "opensource@ijaap.nl"
                }
            ],
            "description": "Common reflection classes used by phpdocumentor to reflect the code structure",
            "homepage": "http://www.phpdoc.org",
            "keywords": [
                "FQSEN",
                "phpDocumentor",
                "phpdoc",
                "reflection",
                "static analysis"
            ],
            "time": "2018-08-07T13:53:10+00:00"
        },
        {
            "name": "phpdocumentor/reflection-docblock",
            "version": "5.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionDocBlock.git",
                "reference": "cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e",
                "reference": "cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e",
                "shasum": ""
            },
            "require": {
                "ext-filter": "^7.1",
                "php": "^7.2",
                "phpdocumentor/reflection-common": "^2.0",
                "phpdocumentor/type-resolver": "^1.0",
                "webmozart/assert": "^1"
            },
            "require-dev": {
                "doctrine/instantiator": "^1",
                "mockery/mockery": "^1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mike van Riel",
                    "email": "me@mikevanriel.com"
                },
                {
                    "name": "Jaap van Otterdijk",
                    "email": "account@ijaap.nl"
                }
            ],
            "description": "With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.",
            "time": "2020-02-22T12:28:44+00:00"
        },
        {
            "name": "phpdocumentor/type-resolver",
            "version": "1.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/TypeResolver.git",
                "reference": "7462d5f123dfc080dfdf26897032a6513644fc95"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/7462d5f123dfc080dfdf26897032a6513644fc95",
                "reference": "7462d5f123dfc080dfdf26897032a6513644fc95",
                "shasum": ""
            },
            "require": {
                "php": "^7.2",
                "phpdocumentor/reflection-common": "^2.0"
            },
            "require-dev": {
                "ext-tokenizer": "^7.2",
                "mockery/mockery": "~1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mike van Riel",
                    "email": "me@mikevanriel.com"
                }
            ],
            "description": "A PSR-5 based resolver of Class names, Types and Structural Element Names",
            "time": "2020-02-18T18:59:58+00:00"
        },
        {
            "name": "phpspec/prophecy",
            "version": "v1.10.3",
            "source": {
                "type": "git",
                "url": "https://github.com/phpspec/prophecy.git",
                "reference": "451c3cd1418cf640de218914901e51b064abb093"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpspec/prophecy/zipball/451c3cd1418cf640de218914901e51b064abb093",
                "reference": "451c3cd1418cf640de218914901e51b064abb093",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.0.2",
                "php": "^5.3|^7.0",
                "phpdocumentor/reflection-docblock": "^2.0|^3.0.2|^4.0|^5.0",
                "sebastian/comparator": "^1.2.3|^2.0|^3.0|^4.0",
                "sebastian/recursion-context": "^1.0|^2.0|^3.0|^4.0"
            },
            "require-dev": {
                "phpspec/phpspec": "^2.5 || ^3.2",
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.5 || ^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.10.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Prophecy\\": "src/Prophecy"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Konstantin Kudryashov",
                    "email": "ever.zet@gmail.com",
                    "homepage": "http://everzet.com"
                },
                {
                    "name": "Marcello Duarte",
                    "email": "marcello.duarte@gmail.com"
                }
            ],
            "description": "Highly opinionated mocking framework for PHP 5.3+",
            "homepage": "https://github.com/phpspec/prophecy",
            "keywords": [
                "Double",
                "Dummy",
                "fake",
                "mock",
                "spy",
                "stub"
            ],
            "time": "2020-03-05T15:02:03+00:00"
        },
        {
            "name": "phpunit/php-code-coverage",
            "version": "7.0.10",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-code-coverage.git",
                "reference": "f1884187926fbb755a9aaf0b3836ad3165b478bf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/f1884187926fbb755a9aaf0b3836ad3165b478bf",
                "reference": "f1884187926fbb755a9aaf0b3836ad3165b478bf",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-xmlwriter": "*",
                "php": "^7.2",
                "phpunit/php-file-iterator": "^2.0.2",
                "phpunit/php-text-template": "^1.2.1",
                "phpunit/php-token-stream": "^3.1.1",
                "sebastian/code-unit-reverse-lookup": "^1.0.1",
                "sebastian/environment": "^4.2.2",
                "sebastian/version": "^2.0.1",
                "theseer/tokenizer": "^1.1.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.2.2"
            },
            "suggest": {
                "ext-xdebug": "^2.7.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "7.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that provides collection, processing, and rendering functionality for PHP code coverage information.",
            "homepage": "https://github.com/sebastianbergmann/php-code-coverage",
            "keywords": [
                "coverage",
                "testing",
                "xunit"
            ],
            "time": "2019-11-20T13:55:58+00:00"
        },
        {
            "name": "phpunit/php-file-iterator",
            "version": "2.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-file-iterator.git",
                "reference": "050bedf145a257b1ff02746c31894800e5122946"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/050bedf145a257b1ff02746c31894800e5122946",
                "reference": "050bedf145a257b1ff02746c31894800e5122946",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "FilterIterator implementation that filters files based on a list of suffixes.",
            "homepage": "https://github.com/sebastianbergmann/php-file-iterator/",
            "keywords": [
                "filesystem",
                "iterator"
            ],
            "time": "2018-09-13T20:33:42+00:00"
        },
        {
            "name": "phpunit/php-text-template",
            "version": "1.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-text-template.git",
                "reference": "31f8b717e51d9a2afca6c9f046f5d69fc27c8686"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686",
                "reference": "31f8b717e51d9a2afca6c9f046f5d69fc27c8686",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Simple template engine.",
            "homepage": "https://github.com/sebastianbergmann/php-text-template/",
            "keywords": [
                "template"
            ],
            "time": "2015-06-21T13:50:34+00:00"
        },
        {
            "name": "phpunit/php-timer",
            "version": "2.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-timer.git",
                "reference": "1038454804406b0b5f5f520358e78c1c2f71501e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-timer/zipball/1038454804406b0b5f5f520358e78c1c2f71501e",
                "reference": "1038454804406b0b5f5f520358e78c1c2f71501e",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Utility class for timing",
            "homepage": "https://github.com/sebastianbergmann/php-timer/",
            "keywords": [
                "timer"
            ],
            "time": "2019-06-07T04:22:29+00:00"
        },
        {
            "name": "phpunit/php-token-stream",
            "version": "3.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-token-stream.git",
                "reference": "995192df77f63a59e47f025390d2d1fdf8f425ff"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/995192df77f63a59e47f025390d2d1fdf8f425ff",
                "reference": "995192df77f63a59e47f025390d2d1fdf8f425ff",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Wrapper around PHP's tokenizer extension.",
            "homepage": "https://github.com/sebastianbergmann/php-token-stream/",
            "keywords": [
                "tokenizer"
            ],
            "time": "2019-09-17T06:23:10+00:00"
        },
        {
            "name": "phpunit/phpunit",
            "version": "8.5.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/phpunit.git",
                "reference": "018b6ac3c8ab20916db85fa91bf6465acb64d1e0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/phpunit/zipball/018b6ac3c8ab20916db85fa91bf6465acb64d1e0",
                "reference": "018b6ac3c8ab20916db85fa91bf6465acb64d1e0",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.2.0",
                "ext-dom": "*",
                "ext-json": "*",
                "ext-libxml": "*",
                "ext-mbstring": "*",
                "ext-xml": "*",
                "ext-xmlwriter": "*",
                "myclabs/deep-copy": "^1.9.1",
                "phar-io/manifest": "^1.0.3",
                "phar-io/version": "^2.0.1",
                "php": "^7.2",
                "phpspec/prophecy": "^1.8.1",
                "phpunit/php-code-coverage": "^7.0.7",
                "phpunit/php-file-iterator": "^2.0.2",
                "phpunit/php-text-template": "^1.2.1",
                "phpunit/php-timer": "^2.1.2",
                "sebastian/comparator": "^3.0.2",
                "sebastian/diff": "^3.0.2",
                "sebastian/environment": "^4.2.2",
                "sebastian/exporter": "^3.1.1",
                "sebastian/global-state": "^3.0.0",
                "sebastian/object-enumerator": "^3.0.3",
                "sebastian/resource-operations": "^2.0.1",
                "sebastian/type": "^1.1.3",
                "sebastian/version": "^2.0.1"
            },
            "require-dev": {
                "ext-pdo": "*"
            },
            "suggest": {
                "ext-soap": "*",
                "ext-xdebug": "*",
                "phpunit/php-invoker": "^2.0.0"
            },
            "bin": [
                "phpunit"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.5-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "The PHP Unit Testing framework.",
            "homepage": "https://phpunit.de/",
            "keywords": [
                "phpunit",
                "testing",
                "xunit"
            ],
            "time": "2020-01-08T08:49:49+00:00"
        },
        {
            "name": "scrivo/highlight.php",
            "version": "v9.18.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/scrivo/highlight.php.git",
                "reference": "52fc21c99fd888e33aed4879e55a3646f8d40558"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/scrivo/highlight.php/zipball/52fc21c99fd888e33aed4879e55a3646f8d40558",
                "reference": "52fc21c99fd888e33aed4879e55a3646f8d40558",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-mbstring": "*",
                "php": ">=5.4"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8|^5.7",
                "sabberworm/php-css-parser": "^8.3",
                "symfony/finder": "^6.2",
                "symfony/var-dumper": "^2.8|^3.4"
            },
            "suggest": {
                "ext-dom": "Needed to make use of the features in the utilities namespace"
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "Highlight\\": "",
                    "HighlightUtilities\\": ""
                },
                "files": [
                    "HighlightUtilities/functions.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Geert Bergman",
                    "homepage": "http://www.scrivo.org/",
                    "role": "Project Author"
                },
                {
                    "name": "Vladimir Jimenez",
                    "homepage": "https://allejo.io",
                    "role": "Maintainer"
                },
                {
                    "name": "Martin Folkers",
                    "homepage": "https://twobrain.io",
                    "role": "Contributor"
                }
            ],
            "description": "Server side syntax highlighter that supports 185 languages. It's a PHP port of highlight.js",
            "keywords": [
                "code",
                "highlight",
                "highlight.js",
                "highlight.php",
                "syntax"
            ],
            "time": "2020-03-02T05:59:21+00:00"
        },
        {
            "name": "sebastian/code-unit-reverse-lookup",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/code-unit-reverse-lookup.git",
                "reference": "4419fcdb5eabb9caa61a27c7a1db532a6b55dd18"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/4419fcdb5eabb9caa61a27c7a1db532a6b55dd18",
                "reference": "4419fcdb5eabb9caa61a27c7a1db532a6b55dd18",
                "shasum": ""
            },
            "require": {
                "php": "^5.6 || ^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^5.7 || ^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Looks up which function or method a line of code belongs to",
            "homepage": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/",
            "time": "2017-03-04T06:30:41+00:00"
        },
        {
            "name": "sebastian/comparator",
            "version": "3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/comparator.git",
                "reference": "5de4fc177adf9bce8df98d8d141a7559d7ccf6da"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/comparator/zipball/5de4fc177adf9bce8df98d8d141a7559d7ccf6da",
                "reference": "5de4fc177adf9bce8df98d8d141a7559d7ccf6da",
                "shasum": ""
            },
            "require": {
                "php": "^7.1",
                "sebastian/diff": "^3.0",
                "sebastian/exporter": "^3.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@2bepublished.at"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides the functionality to compare PHP values for equality",
            "homepage": "https://github.com/sebastianbergmann/comparator",
            "keywords": [
                "comparator",
                "compare",
                "equality"
            ],
            "time": "2018-07-12T15:12:46+00:00"
        },
        {
            "name": "sebastian/diff",
            "version": "3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/diff.git",
                "reference": "720fcc7e9b5cf384ea68d9d930d480907a0c1a29"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/diff/zipball/720fcc7e9b5cf384ea68d9d930d480907a0c1a29",
                "reference": "720fcc7e9b5cf384ea68d9d930d480907a0c1a29",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.5 || ^8.0",
                "symfony/process": "^2 || ^3.3 || ^4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Kore Nordmann",
                    "email": "mail@kore-nordmann.de"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Diff implementation",
            "homepage": "https://github.com/sebastianbergmann/diff",
            "keywords": [
                "diff",
                "udiff",
                "unidiff",
                "unified diff"
            ],
            "time": "2019-02-04T06:01:07+00:00"
        },
        {
            "name": "sebastian/environment",
            "version": "4.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/environment.git",
                "reference": "464c90d7bdf5ad4e8a6aea15c091fec0603d4368"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/environment/zipball/464c90d7bdf5ad4e8a6aea15c091fec0603d4368",
                "reference": "464c90d7bdf5ad4e8a6aea15c091fec0603d4368",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "require-dev": {
                "phpunit/phpunit": "^7.5"
            },
            "suggest": {
                "ext-posix": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.2-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides functionality to handle HHVM/PHP environments",
            "homepage": "http://www.github.com/sebastianbergmann/environment",
            "keywords": [
                "Xdebug",
                "environment",
                "hhvm"
            ],
            "time": "2019-11-20T08:46:58+00:00"
        },
        {
            "name": "sebastian/exporter",
            "version": "3.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/exporter.git",
                "reference": "68609e1261d215ea5b21b7987539cbfbe156ec3e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/exporter/zipball/68609e1261d215ea5b21b7987539cbfbe156ec3e",
                "reference": "68609e1261d215ea5b21b7987539cbfbe156ec3e",
                "shasum": ""
            },
            "require": {
                "php": "^7.0",
                "sebastian/recursion-context": "^3.0"
            },
            "require-dev": {
                "ext-mbstring": "*",
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.1.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Provides the functionality to export PHP variables for visualization",
            "homepage": "http://www.github.com/sebastianbergmann/exporter",
            "keywords": [
                "export",
                "exporter"
            ],
            "time": "2019-09-14T09:02:43+00:00"
        },
        {
            "name": "sebastian/global-state",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/global-state.git",
                "reference": "edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/global-state/zipball/edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4",
                "reference": "edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4",
                "shasum": ""
            },
            "require": {
                "php": "^7.2",
                "sebastian/object-reflector": "^1.1.1",
                "sebastian/recursion-context": "^3.0"
            },
            "require-dev": {
                "ext-dom": "*",
                "phpunit/phpunit": "^8.0"
            },
            "suggest": {
                "ext-uopz": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Snapshotting of global state",
            "homepage": "http://www.github.com/sebastianbergmann/global-state",
            "keywords": [
                "global state"
            ],
            "time": "2019-02-01T05:30:01+00:00"
        },
        {
            "name": "sebastian/object-enumerator",
            "version": "3.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-enumerator.git",
                "reference": "7cfd9e65d11ffb5af41198476395774d4c8a84c5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/7cfd9e65d11ffb5af41198476395774d4c8a84c5",
                "reference": "7cfd9e65d11ffb5af41198476395774d4c8a84c5",
                "shasum": ""
            },
            "require": {
                "php": "^7.0",
                "sebastian/object-reflector": "^1.1.1",
                "sebastian/recursion-context": "^3.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Traverses array structures and object graphs to enumerate all referenced objects",
            "homepage": "https://github.com/sebastianbergmann/object-enumerator/",
            "time": "2017-08-03T12:35:26+00:00"
        },
        {
            "name": "sebastian/object-reflector",
            "version": "1.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-reflector.git",
                "reference": "773f97c67f28de00d397be301821b06708fca0be"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/773f97c67f28de00d397be301821b06708fca0be",
                "reference": "773f97c67f28de00d397be301821b06708fca0be",
                "shasum": ""
            },
            "require": {
                "php": "^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Allows reflection of object attributes, including inherited and non-public ones",
            "homepage": "https://github.com/sebastianbergmann/object-reflector/",
            "time": "2017-03-29T09:07:27+00:00"
        },
        {
            "name": "sebastian/recursion-context",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/recursion-context.git",
                "reference": "5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8",
                "reference": "5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8",
                "shasum": ""
            },
            "require": {
                "php": "^7.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                }
            ],
            "description": "Provides functionality to recursively process PHP variables",
            "homepage": "http://www.github.com/sebastianbergmann/recursion-context",
            "time": "2017-03-03T06:23:57+00:00"
        },
        {
            "name": "sebastian/resource-operations",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/resource-operations.git",
                "reference": "4d7a795d35b889bf80a0cc04e08d77cedfa917a9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/4d7a795d35b889bf80a0cc04e08d77cedfa917a9",
                "reference": "4d7a795d35b889bf80a0cc04e08d77cedfa917a9",
                "shasum": ""
            },
            "require": {
                "php": "^7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides a list of PHP built-in functions that operate on resources",
            "homepage": "https://www.github.com/sebastianbergmann/resource-operations",
            "time": "2018-10-04T04:07:39+00:00"
        },
        {
            "name": "sebastian/type",
            "version": "1.1.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/type.git",
                "reference": "3aaaa15fa71d27650d62a948be022fe3b48541a3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/type/zipball/3aaaa15fa71d27650d62a948be022fe3b48541a3",
                "reference": "3aaaa15fa71d27650d62a948be022fe3b48541a3",
                "shasum": ""
            },
            "require": {
                "php": "^7.2"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Collection of value objects that represent the types of the PHP type system",
            "homepage": "https://github.com/sebastianbergmann/type",
            "time": "2019-07-02T08:10:15+00:00"
        },
        {
            "name": "sebastian/version",
            "version": "2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/version.git",
                "reference": "99732be0ddb3361e16ad77b68ba41efc8e979019"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019",
                "reference": "99732be0ddb3361e16ad77b68ba41efc8e979019",
                "shasum": ""
            },
            "require": {
                "php": ">=5.6"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that helps with managing the version number of Git-hosted PHP projects",
            "homepage": "https://github.com/sebastianbergmann/version",
            "time": "2016-10-03T07:35:21+00:00"
        },
        {
            "name": "theseer/tokenizer",
            "version": "1.1.3",
            "source": {
                "type": "git",
                "url": "https://github.com/theseer/tokenizer.git",
                "reference": "11336f6f84e16a720dae9d8e6ed5019efa85a0f9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/theseer/tokenizer/zipball/11336f6f84e16a720dae9d8e6ed5019efa85a0f9",
                "reference": "11336f6f84e16a720dae9d8e6ed5019efa85a0f9",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-tokenizer": "*",
                "ext-xmlwriter": "*",
                "php": "^7.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                }
            ],
            "description": "A small library for converting tokenized PHP source code into XML and potentially other formats",
            "time": "2019-06-13T22:48:21+00:00"
        },
        {
            "name": "webmozart/assert",
            "version": "1.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/webmozart/assert.git",
                "reference": "aed98a490f9a8f78468232db345ab9cf606cf598"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/webmozart/assert/zipball/aed98a490f9a8f78468232db345ab9cf606cf598",
                "reference": "aed98a490f9a8f78468232db345ab9cf606cf598",
                "shasum": ""
            },
            "require": {
                "php": "^5.3.3 || ^7.0",
                "symfony/polyfill-ctype": "^1.8"
            },
            "conflict": {
                "vimeo/psalm": "<3.6.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8.36 || ^7.5.13"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Webmozart\\Assert\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Assertions to validate method input/output with nice error messages.",
            "keywords": [
                "assert",
                "check",
                "validate"
            ],
            "time": "2020-02-14T12:15:55+00:00"
        }
    ],
    "aliases": [],
    "minimum-stability": "dev",
    "stability-flags": [],
    "prefer-stable": true,
    "prefer-lowest": false,
    "platform": {
        "php": "^7.2"
    },
    "platform-dev": []
}