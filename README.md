# Read Only Laravel 5 Models
The Read only trait Monkey Patches Laravel models to not save, delete or modify models.
Ideally, this would be used in addition to DB permissions to ensure Users and Developers cannot write to a Legacy system of some kind.

This is only a simple demonstration of the model.
## To use:

```php
<?php
require_once('src/ReadOnlyTrait.php'); //Or register under your config/App.php
// use MichaelAChrisco\ReadOnlyTrait;          //optional
use Illuminate\Database\Eloquent\Model;
class User extends Model {
  use MichaelAChrisco\ReadOnly\ReadOnlyTrait;
}

$legacyUser = new User;
$legacyUser->set_user_name('bob');

$result = $legacyUser->save();
//User is not saved and $result is false.
 ?>
```

## Methods that will return false:

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

## TODO:
  * performDeleteOnModel
  * push
  * saveOrFail
  * finishSave
  * performUpdate
  * performInsert(??)
  * insertAndSetId(??)
  * touch
  * Add in a PR for any other methods you can find!


### registerModelEvents( look into best way to implement)  
  * saving
  * saved
  * updating
  * updated
  * creating
  * created
  * deleting
  * deleted

###
