<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id
 * @property string $title
 * @property string $img
 * @property string $content
 * @property string $link
 * @property int $view
 * @property int $count
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $type_id
 */
class Img extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'imgs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'int', 'view' => 'integer', 'count' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'type_id' => 'integer'];
}