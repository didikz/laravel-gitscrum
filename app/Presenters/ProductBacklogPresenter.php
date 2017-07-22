<?php
/**
 * Laravel GitScrum <https://github.com/GitScrum-Community/laravel-gitscrum>
 *
 * The MIT License (MIT)
 * Copyright (c) 2017 Renato Marinho <renato.marinho@s2move.com>
 */

namespace GitScrum\Presenters;

trait ProductBacklogPresenter
{
    public function getVisibilityAttribute()
    {
        return $this->attributes['is_private'] ? trans('Private') : trans('Public');
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes['description'] ?? '';
    }
}
