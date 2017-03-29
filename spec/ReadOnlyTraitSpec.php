<?php
require_once('src/ReadOnlyTrait.php');
use MichaelAChrisco\ReadOnly\ReadOnlyException,
    MichaelAChrisco\ReadOnly\ReadOnlyTrait,
    Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Builder;

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
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
 });
 describe("::forceCreate()", function(){
   it("is expected to throw ReadOnlyException", function() {
     $closure = function(){
       $user = new User;
       $user->forceCreate([]);
     };
     expect($closure)->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
   });
});
  describe("::save()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->save([]);
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
  });
  describe("::update()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->update([]);
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
      });
   });
  describe("::firstOrCreate()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->firstOrCreate([]);
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
  });
  describe("::firstOrNew()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->firstOrNew([]);
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
   });
  describe("::delete()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->delete();
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
   });
  describe("::destroy()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->destroy(1);
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
   });
  describe("::restore()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->restore();
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
    });
   });
  describe("::forceDelete()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->forceDelete();
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
      });
    });
   describe("::performDeleteOnModel()", function(){
     it("is expected to throw ReadOnlyException", function() {
       expect(
         function(){
           $user = new User;
           $user->performDeleteOnModel();
         })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
      });
    });
  describe("::push()", function(){
    it("is expected to throw ReadOnlyException", function() {
      expect(
        function(){
          $user = new User;
          $user->push();
        })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
     });
   });
 describe("::finishSave()", function(){
   it("is expected to throw ReadOnlyException", function() {
     expect(
       function(){
         $user = new User;
         $user->finishSave([]);
       })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
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
         })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
      });
    });
   describe("::truncate()", function(){
     it("is expected to throw Error", function() {
       expect(
         function(){
           $user = new User;
           $user->truncate();
         })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
      });
    });
   describe("::insert()", function(){
     it("is expected to throw Error", function() {
       expect(
         function(){
           $user = new User;
           $user->insert();
         })->toThrow(new ReadOnlyException("Not allowed to persist changes in read-only model User"));
      });
    });
});


 ?>
