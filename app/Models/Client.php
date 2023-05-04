<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string|null $client_id
 * @property Carbon $contracted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static Builder|Client query()
 * @method static Builder|Client whereAddress($value)
 * @method static Builder|Client whereClientId($value)
 * @method static Builder|Client whereContractedAt($value)
 * @method static Builder|Client whereCreatedAt($value)
 * @method static Builder|Client whereId($value)
 * @method static Builder|Client whereName($value)
 * @method static Builder|Client whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Client extends Model
{
    use HasFactory;

    protected $casts = [
        'contracted_at' => 'date',
    ];

    protected $fillable = ['name', 'address', 'client_id', 'contracted_at'];
}
