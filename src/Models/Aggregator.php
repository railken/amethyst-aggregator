<?php

namespace Amethyst\Models;

use Amethyst\Core\ConfigurableModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Lem\Contracts\EntityContract;

class Aggregator extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.aggregator.data.aggregator');
        parent::__construct($attributes);
    }

    /**
     * Get all of the owning raw models.
     */
    public function source(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get all of the owning raw models.
     */
    public function aggregate(): MorphTo
    {
        return $this->morphTo();
    }
}
