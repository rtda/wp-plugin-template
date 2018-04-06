# WordPress Plugin Template

# Intro
You could have seen many WordPress plugins. Many of them look like unordered and
endless list of functions and hooks. But what if you prefer OOP and TDD approach
and want your classes loaded automatically? What if you want to follow the rules
of [uncle Bob](https://en.wikipedia.org/wiki/Robert_C._Martin) in order to be
confident your code is easy to refactor, etc.?

## About
The purpose of this project is to have a boilerplate code to start a brand new
WordPress plugin with minimal efforts. If you like using generators like
[wpbb](https://wppb.me/) but want it to support unit testing then probably this
plugin template will fit your needs.

**Disclaimer #1:** It's the early phase of development. But the template is
supposed to be stuffed with more code, features and/or examples soon.

**Disclaimer #2:** Composer is, no doubts, a really cool thing worth using. But
let's keep it simple so far.

**Disclaimer #3:** It's an early alpha release. You were warned.

## Features

- WordPress coding standard;
- Unit tests powered by PHPUnit framework;
    - PSR, namespaces;
    - Custom bootstrap class autoloader for PHPUnit;
    - Composer is not required for running Unit tests (but could be easily
    added);
- Build automation with PHing;

## Template structure

Neither the root directory nor *tests* folder inside of it contain anything
you are supposed to upload into your */wp-contents/plugins* directory. Only
*src* folder's contents does contain the files of your plugin. You are free to
create move your source files into a subfolder (e.g. */src/my-cool-plugin*).
All you need to do in this case is to make minor change to the */bootstrap.php*
file: change the $dir variable to the value of `'src/my-cool-plugin'`. This
makes it easy to continue running unit tests and deploy your plugin by copying
the whole directory as it is.

Automatic deployment could be set in your IDE (e.g. PhpStorm works perfectly)
or you can use PHing task for this.

Your unit tests are located in */tests* directory. You are supposed to use the
same folder structure and the same namespaces as it is in the */src* directory. 

## Usage

- Clone the repository into your working folder;
- Make sure you've got PHPUnit installed in your system;
- Make sure if PHing is installed as well (if you plan using automated build
tasks);
- Learn the WordPress coding standards (e.g. class name *Payment_Scheduler*
should be given a name of *class-payment-scheduler.php*);
- Learn and follow the rules of PSR-*;
- Remove ExampleNamespace directory from both *src* and *tests* directories
when ready;
- Write your own code and have fun (but don't forget about TDD).

## Future plans

- Implementing reusable classes for new post types, taxonomy, admin pages,
shortcodes, etc.;
- Adding BDD support (PHPSpec and/or Behat);
- More automation of any kind, etc.
