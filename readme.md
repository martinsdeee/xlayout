[![Build Status](https://travis-ci.org/martinsdeee/xlayout.svg?branch=master)](https://travis-ci.org/martinsdeee/xlayout)
[![Total Downloads](https://poser.pugx.org/martinsdeee/xlayout/downloads.svg)](https://packagist.org/packages/martinsdeee/xlayout)

# PACKAGE IN DEVELOPMENT STAGE

# Laravel 4 xLayout Package
Package for webpage layout

### Package contains

* Master layout
* Bootstrap 3
* Partials
  * Navigation
  * Footer
* Admin Dashboard
* Pages
  * Home Page
  * About Page
  * Contacts Page

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `martinsdeee/xlayout`.

```js
{
    "require": {
        "martinsdeee/xlayout": "dev-master"
    }
}
```

Next, update Composer from the Terminal:

```
composer update
```

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

```php
'Martinsdeee\Xlayout\XlayoutServiceProvider',
'Way\Form\FormServiceProvider'
```

Publish assets

```
php artisan asset:publish
```
```
php artisan asset:publish martinsdeee/xlayout
```

Migrate database

```
php artisan migrate --package="martinsdeee/xlayout"
```
