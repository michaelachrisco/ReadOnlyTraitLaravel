<?php
namespace MichaelAChrisco\ReadOnly;

use Illuminate\Database\Eloquent\Builder;
use MichaelAChrisco\ReadOnly\ReadOnlyException;

trait ReadOnlyTrait
{
    /**
     * Throws ReadOnlyException on create
     * @param array $attributes
     * @throws ReadOnlyException
     */
    public static function create(array $attributes = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on forceCreate
     * @param array $attributes
     * @throws ReadOnlyException
     */
    public static function forceCreate(array $attributes)
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on save
     * @param array $options
     * @throws ReadOnlyException
     */
    public function save(array $options = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on update
     * @param array $attributes
     * @param array $options
     * @throws ReadOnlyException
     */
    public function update(array $attributes = [], array $options = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on firstOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadOnlyException
     */
    public static function firstOrCreate(array $attributes, array $values = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on firstOrNew
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadOnlyException
     */
    public static function firstOrNew(array $attributes, array $values = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on updateOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadOnlyException
     */
    public static function updateOrCreate(array $attributes, array $values = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on delete
     * @throws ReadOnlyException
     */
    public function delete()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on destroy
     * @param mixed $ids
     * @throws ReadOnlyException
     */
    public static function destroy($ids)
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on restore
     * @throws ReadOnlyException
     */
    public function restore()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on forceDelete
     * @throws ReadOnlyException
     */
    public function forceDelete()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on performDeleteOnModel
     * @throws ReadOnlyException
     */
    public function performDeleteOnModel()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on push
     * @throws ReadOnlyException
     */
    public function push()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on finishSave
     * @param array $options
     * @throws ReadOnlyException
     */
    public function finishSave(array $options)
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on performUpdate
     * @param Builder $query
     * @param array $options
     * @throws ReadOnlyException
     */
    public function performUpdate(Builder $query, array $options = [])
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on touch
     * @throws ReadOnlyException
     */
    public function touch()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on insert
     * @throws ReadOnlyException
     */
    public function insert()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }

    /**
     * Throws ReadOnlyException on truncate
     * @throws ReadOnlyException
     */
    public function truncate()
    {
        throw new ReadOnlyException(__FUNCTION__, get_called_class());
    }
}
