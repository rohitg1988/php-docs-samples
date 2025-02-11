# How to become a contributor and submit your own code

## Contributor License Agreements

We'd love to accept your patches! Before we can take them, we
have to jump a couple of legal hurdles.

Please fill out either the individual or corporate Contributor License Agreement
(CLA).

  * If you are an individual writing original source code and you're sure you
    own the intellectual property, then you'll need to sign an
    [individual CLA](https://developers.google.com/open-source/cla/individual).
  * If you work for a company that wants to allow you to contribute your work,
    then you'll need to sign a
    [corporate CLA](https://developers.google.com/open-source/cla/corporate).

Follow either of the two links above to access the appropriate CLA and
instructions for how to sign and return it. Once we receive it, we'll be able to
accept your pull requests.

## Contributing A Patch

1. Submit an issue describing your proposed change to the repo in question.
1. The repo owner will respond to your issue promptly.
1. If your proposed change is accepted, and you haven't already done so, sign a
   Contributor License Agreement (see details above).
1. Fork the desired repo, develop and test your code changes.

   Install dependencies via [Composer](http://getcomposer.org/doc/00-intro.md).
   Run `composer install` (if composer is installed globally).

   To run the tests, first set up [application default
   credentials](https://cloud.google.com/docs/authentication/getting-started)
   by setting the environment variable `GOOGLE_APPLICATION_CREDENTIALS` to the
   path to a service account key JSON file.

   Then set any environment variables needed by the test. Check the
   `$SAMPLES_DIRECTORY/test` directory to see what specific variables are needed.
   ```
   export GOOGLE_PROJECT_ID=YOUR_PROJECT_ID
   export GOOGLE_STORAGE_BUCKET=YOUR_BUCKET
   ```

   To run the tests in a samples directory, first install the global Composer
   dependencies by running `bash test/composer.sh`. Then, run `composer install`
   and `phpunit` in any directory containing a `phpunit.xml.dist` file to run
   the tests.
   ```
   bash test/composer.sh
   cd $SAMPLES_DIRECTORY
   composer install
   phpunit
   ```

1. Ensure that your code adheres to the existing style in the sample to which
   you are contributing.
1. Ensure that your code has an appropriate set of unit tests which all pass.
   Set up [Travis](./TRAVIS.md) to run the unit tests on your fork.
1. Submit a pull request.

## Style

Samples in this repository follow the [PSR2][psr2] and [PSR4][psr4]
recommendations. This is enforced using [PHP CS Fixer][php-cs-fixer].

[psr2]: http://www.php-fig.org/psr/psr-2/
[psr4]: http://www.php-fig.org/psr/psr-4/
[php-cs-fixer]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
