[![Latest Version on Packagist](https://img.shields.io/packagist/v/michaelachrisco/readonly.svg?style=flat-square)](https://packagist.org/packages/michaelachrisco/readonly)


# Laravel 5+ Read Only Models
The read only trait removes the ability to save, delete or modify Laravel models.
Ideally, this would be used in addition to DB permissions to ensure users and developers cannot write to a Legacy system.

## Install

```
composer require michaelachrisco/readonly
```

## To use:



```php
<?php
use Illuminate\Database\Eloquent\Model;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;
class User extends Model {
  use ReadOnlyTrait;
}

$legacyUser = new User;
$legacyUser->set_user_name('bob');

$result = $legacyUser->save();
//User is not saved. 
//ReadOnlyException is thrown.
 ?>
```

## Methods that will throw ReadOnlyExceptions:

 * create
 * forceCreate
 * save
 * update
 * firstOrCreate
 * firstOrNew
 * delete
 * destroy
 * restore
 * forceDelete
 * performDeleteOnModel
 * push
 * finishSave
 * performUpdate
 * touch
 * insert
 * truncate
 * Add in a PR for any other methods you can find!

###
