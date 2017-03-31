<?php
namespace MichaelAChrisco\ReadOnly;

use Illuminate\Database\Eloquent\Builder;
use MichaelAChrisco\ReadOnly\ReadOnlyException;

trait ReadOnlyTrait
{
    public static function readOnly($class)
    {
        throw new ReadOnlyException("Not allowed to persist changes in read-only model {$class}");
    }

  /**
   * throws ReadOnlyException on create
   * @method create
   * @param  array $attributes
   *
   */
  public static function create(array $attributes = [])
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on forceCreate
 * @method forceCreate
 * @param  array       $attributes
 *
 */
  public static function forceCreate(array $attributes)
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

  /**
   * throws ReadOnlyException on save
   * @method save
   * @param  array $options
   *
   */
  public function save(array $options = [])
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on update
 * @method update
 * @param  [type] $attributes
 * @param   $options
 *
 */
  public function update(array $attributes = [], array $options = [])
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on firstOrCreate
 * @method firstOrCreate
 * @param  array         $arr
 *
 */
  public static function firstOrCreate(array $arr)
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on firstOrNew
 * @method firstOrNew
 * @param  array      $arr
 *
 */
  public static function firstOrNew(array $arr)
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on delete
 * @method delete
 *
 */
  public function delete()
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on destroy
 * @method destroy
 * @param  mixed  $ids
 *
 */
  public static function destroy($ids)
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on restore
 * @method restore
 *
 */
  public function restore()
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

/**
 * throws ReadOnlyException on forceDelete
 * @method forceDelete
 *
 */
  public function forceDelete()
  {
      ReadOnlyTrait::readOnly(get_called_class());
  }

  /**
   * throws ReadOnlyException on performDeleteOnModel
   * @method performDeleteOnModel
   *
   */
    public function performDeleteOnModel()
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }

  /**
   * throws ReadOnlyException on push
   * @method push
   *
   */
    public function push()
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }

  /**
   * throws ReadOnlyException on finishSave
   * @method finishSave
   *
   */
    public function finishSave(array $options)
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }

  /**
   * throws ReadOnlyException on performUpdate
   * @method performUpdate
   *
   */
    public function performUpdate(Builder $query, array $options = [])
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }

  /**
   * throws ReadOnlyException on touch
   * @method touch
   *
   */
    public function touch()
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }

   /**
   * throws ReadOnlyException on insert
   * @method insert
   *
   */
    public function insert()
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }

    /**
   * throws ReadOnlyException on truncate
   * @method truncate
   *
   */
    public function truncate()
    {
        ReadOnlyTrait::readOnly(get_called_class());
    }
}
