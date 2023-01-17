<?php

namespace Appwapp\EPF\Models\Popularity;

use Appwapp\EPF\Models\EPFModel;

class PaidIpadApplicationPopularityPerGenre extends EPFModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paid_ipad_application_popularity_per_genre';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'storefront_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'export_date',
        'storefront_id',
        'genre_id',
        'application_id',
        'application_rank'
    ];
}