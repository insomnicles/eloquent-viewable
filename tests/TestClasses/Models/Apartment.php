<?php

declare(strict_types=1);

namespace CyrildeWit\EloquentViewable\Tests\TestClasses\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractWithViews;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model implements Viewable
{
    use InteractWithViews;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'apartments';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
