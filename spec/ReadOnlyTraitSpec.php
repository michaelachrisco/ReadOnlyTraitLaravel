<?php
require_once('src/ReadOnlyTrait.php');

use MichaelAChrisco\ReadOnly\ReadOnlyException;
use MichaelAChrisco\ReadOnly\ReadOnlyTrait;

class User extends Illuminate\Database\Eloquent\Model
{
    use ReadOnlyTrait;
}

describe("User", function () {
    context("When User calls unsupported method", function () {
        describe("::create()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->create([]);
                    })->toThrow(new ReadOnlyException('create', 'User'));
            });
        });
        describe("::forceCreate()", function () {
            it("is expected to throw ReadOnlyException", function () {
                $closure = function () {
                    $user = new User;
                    $user->forceCreate([]);
                };
                expect($closure)->toThrow(new ReadOnlyException('forceCreate', 'User'));
            });
        });
        describe("::save()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->save([]);
                    })->toThrow(new ReadOnlyException('save', 'User'));
            });
        });
        describe("::update()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->update([]);
                    })->toThrow(new ReadOnlyException('update', 'User'));
            });
        });
        describe("::firstOrCreate()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->firstOrCreate([]);
                    })->toThrow(new ReadOnlyException('firstOrCreate', 'User'));
            });
        });
        describe("::firstOrNew()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->firstOrNew([]);
                    })->toThrow(new ReadOnlyException('firstOrNew', 'User'));
            });
        });
        describe("::delete()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->delete();
                    })->toThrow(new ReadOnlyException('delete', 'User'));
            });
        });
        describe("::destroy()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->destroy(1);
                    })->toThrow(new ReadOnlyException('destroy', 'User'));
            });
        });
        describe("::restore()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->restore();
                    })->toThrow(new ReadOnlyException('restore', 'User'));
            });
        });
        describe("::forceDelete()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->forceDelete();
                    })->toThrow(new ReadOnlyException('forceDelete', 'User'));
            });
        });
        describe("::performDeleteOnModel()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->performDeleteOnModel();
                    })->toThrow(new ReadOnlyException('performDeleteOnModel', 'User'));
            });
        });
        describe("::push()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->push();
                    })->toThrow(new ReadOnlyException('push', 'User'));
            });
        });
        describe("::finishSave()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->finishSave([]);
                    })->toThrow(new ReadOnlyException('finishSave', 'User'));
            });
        });
        describe("::performUpdate()", function () {
            it("is expected to throw ReadOnlyException", function () {
                $user = new User;
                //TODO: Mock up
                // $user = new User;
                // $user->performUpdate(new Builder, []);
                unset($user);
            });
        });
        describe("::touch()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->touch();
                    })->toThrow(new ReadOnlyException('touch', 'User'));
            });
        });
        describe("::truncate()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->truncate();
                    })->toThrow(new ReadOnlyException('truncate', 'User'));
            });
        });
        describe("::insert()", function () {
            it("is expected to throw ReadOnlyException", function () {
                expect(
                    function () {
                        $user = new User;
                        $user->insert();
                    })->toThrow(new ReadOnlyException('insert', 'User'));
            });
        });
    });
});

class MockModel
{
    public static function create(array $attributes = [])
    {
        return true;
    }
}

class UserReadOnlyNotActive extends MockModel
{
    use ReadOnlyTrait;

    protected static function isActive(): bool
    {
        return false;
    }
}

describe("UserReadOnlyNotActive", function () {
    describe("::create()", function () {
        it("expects `create()` to be toBeTruthy", function () {
            $user = new UserReadOnlyNotActive;
            expect($user->create([]))->toBeTruthy();
        });
    });
});
