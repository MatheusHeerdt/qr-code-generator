<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected
        $table = 'client';

    protected
        $fillable = [
        'name',
        'linkedin',
        'github',
    ];

    /**
     * @return string[]
     */
    public
    static function rules(): array
    {
        return [
            'name' => 'required|string',
            'linkedin' => 'required|string',
            'github' => 'required|string',
        ];
    }
}
