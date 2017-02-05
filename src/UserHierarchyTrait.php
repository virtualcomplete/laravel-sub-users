<?php
namespace VirtualComplete\UserHierarchy;

/**
 * Trait UserHierarchyTrait
 * @package VirtualComplete\UserHierarchy
 */
trait UserHierarchyTrait
{
    /**
     * Retrieve the parent of this child user if one exists
     *
     * @return $this|\Illuminate\Database\Eloquent\Relations\BelongsTo|null
     */
    public function parent()
    {
        return $this->belongsTo('App\User', 'parent_id');
    }

    /**
     * Retrieve the children of this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|$this[]
     */
    public function children()
    {
        return $this->hasMany('App\User', 'parent_id');
    }
}
