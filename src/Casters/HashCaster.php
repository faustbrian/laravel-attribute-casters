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

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class HashCaster implements CastsInboundAttributes
{
    private string $algorithm;

    public function __construct(string $algorithm = 'sha256')
    {
        $this->algorithm = $algorithm;
    }

    public function set($model, $key, $value, $attributes)
    {
        return [$key => hash($this->algorithm, $value)];
    }
}
