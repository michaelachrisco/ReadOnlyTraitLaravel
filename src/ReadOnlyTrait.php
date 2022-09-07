<?php
namespace MichaelAChrisco\ReadOnly;

use Illuminate\Database\Eloquent\Builder;

trait ReadOnlyTrait
{
    protected static function isActive(): bool {
        return true;
    }

    /**
     * Throws ReadOnlyException on create
     * @param array $attributes
     * @throws ReadOnlyException
     */
    public static function create(array $attributes = [])
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::create($attributes);
    }

    /**
     * Throws ReadOnlyException on forceCreate
     * @param array $attributes
     * @throws ReadOnlyException
     */
    public static function forceCreate(array $attributes)
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::forceCreate($attributes);
    }

    /**
     * Throws ReadOnlyException on save
     * @param array $options
     * @throws ReadOnlyException
     */
    public function save(array $options = [])
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::save($options);
    }

    /**
     * Throws ReadOnlyException on update
     * @param array $attributes
     * @param array $options
     * @throws ReadOnlyException
     */
    public function update(array $attributes = [], array $options = [])
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::update($attributes, $options);
    }

    /**
     * Throws ReadOnlyException on firstOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadOnlyException
     */
    public static function firstOrCreate(array $attributes, array $values = [])
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::firstOrCreate( $attributes,  $values);
    }

    /**
     * Throws ReadOnlyException on firstOrNew
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadOnlyException
     */
    public static function firstOrNew(array $attributes, array $values = [])
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::firstOrNew( $attributes,  $values);
    }

    /**
     * Throws ReadOnlyException on updateOrCreate
     * @param  array  $attributes
     * @param  array  $values
     * @throws ReadOnlyException
     */
    public static function updateOrCreate(array $attributes, array $values = [])
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::updateOrCreate( $attributes,  $values );
    }

    /**
     * Throws ReadOnlyException on delete
     * @throws ReadOnlyException
     */
    public function delete()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::delete();
    }

    /**
     * Throws ReadOnlyException on destroy
     * @param mixed $ids
     * @throws ReadOnlyException
     */
    public static function destroy($ids)
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::destroy($ids);
    }

    /**
     * Throws ReadOnlyException on restore
     * @throws ReadOnlyException
     */
    public function restore()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::restore();
    }

    /**
     * Throws ReadOnlyException on forceDelete
     * @throws ReadOnlyException
     */
    public function forceDelete()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::forceDelete();
    }

    /**
     * Throws ReadOnlyException on performDeleteOnModel
     * @throws ReadOnlyException
     */
    public function performDeleteOnModel()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        parent::performDeleteOnModel();
    }

    /**
     * Throws ReadOnlyException on push
     * @throws ReadOnlyException
     */
    public function push()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::push();
    }

    /**
     * Throws ReadOnlyException on finishSave
     * @param array $options
     * @throws ReadOnlyException
     */
    public function finishSave(array $options)
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        parent::finishSave($options);
    }

    /**
     * Throws ReadOnlyException on performUpdate
     * @param Builder $query
     * @param array $options
     * @throws ReadOnlyException
     */
    public function performUpdate(Builder $query, array $options = []): bool
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::performUpdate($query, $options);
    }

    /**
     * Throws ReadOnlyException on touch
     * @param  string|null  $attribute
     * @throws ReadOnlyException
     */
    public function touch($attribute = null)
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::touch($attribute);
    }

    /**
     * Throws ReadOnlyException on insert
     * @throws ReadOnlyException
     */
    public function insert()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::insert();
    }

    /**
     * Throws ReadOnlyException on truncate
     * @throws ReadOnlyException
     */
    public function truncate()
    {
        if (static::isActive()) {
            throw new ReadOnlyException(__FUNCTION__, get_called_class());
        }
        return parent::truncate();
    }
}
