<?php
require_once('src/ReadOnlyTrait.php');
// use MichaelAChrisco\ReadOnlyTrait;
use Illuminate\Database\Eloquent\Model;
class User extends Illuminate\Database\Eloquent\Model {
  use MichaelAChrisco\ReadOnly\ReadOnlyTrait;
}

describe("User", function() {
  describe("::create()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->create([]))->toBe(false);
        unset($user);
    });
 });
 describe("::forceCreate()", function(){
   it("is expected to return false", function() {
       $user = new User;
       expect($user->forceCreate([]))->toBe(false);
       unset($user);
   });
});
  describe("::save()", function(){

    it("is expected to return false", function() {
        $user = new User;
        expect($user->save([]))->toBe(false);
        unset($user);
    });
  });
  describe("::update()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->update([]))->toBe(false);
        unset($user);
      });
   });
  describe("::firstOrCreate()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->firstOrCreate([]))->toBe(false);
        unset($user);
    });
  });
  describe("::firstOrNew()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->firstOrNew([]))->toBe(false);
        unset($user);
    });
   });
  describe("::delete()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->delete())->toBe(false);
        unset($user);
    });
   });
  describe("::destroy()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->destroy(1))->toBe(false);
        unset($user);
    });
   });
  describe("::restore()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->restore())->toBe(false);
        unset($user);
    });
   });
  describe("::forceDelete()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->forceDelete())->toBe(false);
        unset($user);
    });
   });
   describe("::performDeleteOnModel()", function(){
     it("is expected to return false", function() {
         $user = new User;
         expect($user->performDeleteOnModel())->toBe(false);
         unset($user);
     });
    });
  describe("::push()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->push())->toBe(false);
        unset($user);
    });
   });
 describe("::finishSave()", function(){
   it("is expected to return false", function() {
       $user = new User;
       expect($user->finishSave([]))->toBe(false);
       unset($user);
   });
  });
  describe("::performUpdate()", function(){
    it("is expected to return false", function() {
        $user = new User;
        expect($user->performUpdate())->toBe(false);
        unset($user);
    });
   });
   describe("::touch()", function(){
     it("is expected to return false", function() {
         $user = new User;
         expect($user->touch())->toBe(false);
         unset($user);
     });
    });
});


 ?>
