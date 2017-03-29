<?php
namespace MichaelAChrisco\ReadOnly;
use Illuminate\Database\Eloquent\Builder;
use MichaelAChrisco\ReadOnly\ReadOnlyException;

trait ReadOnlyTrait {
  /**
   * throws ReadOnlyException on create
   * @method create
   * @param  array $attributes
   *
   */
  static function create(array $attributes = []){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on forceCreate
 * @method forceCreate
 * @param  array       $attributes
 *
 */
  static function forceCreate(array $attributes){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

  /**
   * throws ReadOnlyException on save
   * @method save
   * @param  array $options
   *
   */
  public function save(array $options = []){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on update
 * @method update
 * @param  [type] $attributes
 * @param   $options
 *
 */
  public function update(array $attributes = [], array $options = []){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on firstOrCreate
 * @method firstOrCreate
 * @param  array         $arr
 *
 */
  static function firstOrCreate(array $arr){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on firstOrNew
 * @method firstOrNew
 * @param  array      $arr
 *
 */
  static function firstOrNew(array $arr){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on delete
 * @method delete
 *
 */
  public function delete(){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on destroy
 * @method destroy
 * @param  mixed  $ids
 *
 */
  static function destroy($ids){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on restore
 * @method restore
 *
 */
  public function restore(){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

/**
 * throws ReadOnlyException on forceDelete
 * @method forceDelete
 *
 */
  public function forceDelete(){
    $class = get_called_class();
    throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
  }

  /**
   * throws ReadOnlyException on performDeleteOnModel
   * @method performDeleteOnModel
   *
   */
    public function performDeleteOnModel(){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }

  /**
   * throws ReadOnlyException on push
   * @method push
   *
   */
    public function push(){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }

  /**
   * throws ReadOnlyException on finishSave
   * @method finishSave
   *
   */
    public function finishSave(array $options){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }

  /**
   * throws ReadOnlyException on performUpdate
   * @method performUpdate
   *
   */
    public function performUpdate(Builder $query, array $options = []){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }

  /**
   * throws ReadOnlyException on touch
   * @method touch
   *
   */
    public function touch(){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }
  
   /**
   * throws ReadOnlyException on insert
   * @method insert
   *
   */
    public function insert(){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }
    
    /**
   * throws ReadOnlyException on truncate
   * @method truncate
   *
   */
    public function truncate(){
      $class = get_called_class();
      throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }
}
