<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/laravel-attribute-casters.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\AttributeCasters\Casters;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use KodeKeep\Cereal\Json;

class JsonCaster implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return (new Json())->unserialise($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        return (new Json())->serialise($value);
    }
}
