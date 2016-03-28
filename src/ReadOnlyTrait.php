<?php
namespace MichaelAChrisco\ReadOnly;
trait ReadOnlyTrait {
  public function save(array $options = []){
    return false;
  }

  public function update(array $attributes = [], array $options = []){
    return false;
  }

  static function firstOrCreate(array $arr){
    return false;
  }

  static function firstOrNew(array $arr){
    return false;
  }

  public function delete(){
    return false;
  }

  static function destroy($ids){
    return false;
  }

  public function restore(){
    return false;
  }

  public function forceDelete(){
    return false;
  }

  public function test(){
    return false;
  }
}
