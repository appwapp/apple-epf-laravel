<?php

namespace Appwapp\EPF\Models\Itunes;

use Appwapp\EPF\Models\EPFModel;
use Appwapp\EPF\Traits\HasCompositePrimaryKey;

class ApplicationDetail extends EPFModel
{
    use HasCompositePrimaryKey;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'application_detail';

    /**
     * The primary key associated with the table.
     *
     * @var array
     */
    protected $primaryKey = [
        'application_id',
        'language_code'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'export_date',
        'application_id',
        'language_code',
        'title',
        'description',
        'release_notes',
        'company_url',
        'suppport_url',
        'screenshot_url_1',
        'screenshot_url_2',
        'screenshot_url_3',
        'screenshot_url_4',
        'screenshot_width_height_1',
        'screenshot_width_height_2',
        'screenshot_width_height_3',
        'screenshot_width_height_4'
    ];
}
