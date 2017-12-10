<?php
require_once('src/ReadOnlyTrait.php');

use MichaelAChrisco\ReadOnly\ReadOnlyException;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

class User extends Illuminate\Database\Eloquent\Model {
  use ReadOnlyTrait;
}

describe("User", function() {
  describe("::create()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->create([]);
        })->toThrow(new ReadOnlyException('Calling [create] method on read-only model [User] is not allowed.'));
    });
 });
 describe("::forceCreate()", function(){
   it("is expected to throw ReadOnlyException", function() {
     $closure = function(){
       $user = new User;
       $user->forceCreate([]);
     };
     expect($closure)->toThrow(new ReadOnlyException('Calling [forceCreate] method on read-only model [User] is not allowed.'));
   });
});
  describe("::save()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->save([]);
        })->toThrow(new ReadOnlyException('Calling [save] method on read-only model [User] is not allowed.'));
    });
  });
  describe("::update()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->update([]);
        })->toThrow(new ReadOnlyException('Calling [update] method on read-only model [User] is not allowed.'));
      });
   });
  describe("::firstOrCreate()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->firstOrCreate([]);
        })->toThrow(new ReadOnlyException('Calling [firstOrCreate] method on read-only model [User] is not allowed.'));
    });
  });
  describe("::firstOrNew()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->firstOrNew([]);
        })->toThrow(new ReadOnlyException('Calling [firstOrNew] method on read-only model [User] is not allowed.'));
    });
   });
  describe("::delete()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->delete();
        })->toThrow(new ReadOnlyException('Calling [delete] method on read-only model [User] is not allowed.'));
    });
   });
  describe("::destroy()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->destroy(1);
        })->toThrow(new ReadOnlyException('Calling [destroy] method on read-only model [User] is not allowed.'));
    });
   });
  describe("::restore()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->restore();
        })->toThrow(new ReadOnlyException('Calling [restore] method on read-only model [User] is not allowed.'));
    });
   });
  describe("::forceDelete()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->forceDelete();
        })->toThrow(new ReadOnlyException('Calling [forceDelete] method on read-only model [User] is not allowed.'));
      });
    });
   describe("::performDeleteOnModel()", function(){
     it("is expected to throw ReadOnlyException", function() {
       expect(
         function(){
           $user = new User;
           $user->performDeleteOnModel();
         })->toThrow(new ReadOnlyException('Calling [performDeleteOnModel] method on read-only model [User] is not allowed.'));
      });
    });
  describe("::push()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->push();
        })->toThrow(new ReadOnlyException('Calling [push] method on read-only model [User] is not allowed.'));
     });
   });
 describe("::finishSave()", function(){
   it("is expected to throw ReadOnlyException", function() {
     expect(
       function(){
         $user = new User;
         $user->finishSave([]);
       })->toThrow(new ReadOnlyException('Calling [finishSave] method on read-only model [User] is not allowed.'));
     });
  });
  describe("::performUpdate()", function(){
    it("is expected to throw ReadOnlyException", function() {
        $user = new User;
        //TODO: Mock up
          // $user = new User;
          // $user->performUpdate(new Builder, []);
        unset($user);
    });
   });
   describe("::touch()", function(){
     it("is expected to throw Error", function() {
       expect(
         function(){
           $user = new User;
           $user->touch();
         })->toThrow(new ReadOnlyException('Calling [touch] method on read-only model [User] is not allowed.'));
      });
    });
   describe("::truncate()", function(){
     it("is expected to throw Error", function() {
       expect(
         function(){
           $user = new User;
           $user->truncate();
         })->toThrow(new ReadOnlyException('Calling [truncate] method on read-only model [User] is not allowed.'));
      });
    });
   describe("::insert()", function(){
     it("is expected to throw Error", function() {
       expect(
         function(){
           $user = new User;
           $user->insert();
         })->toThrow(new ReadOnlyException('Calling [insert] method on read-only model [User] is not allowed.'));
      });
    });
});
