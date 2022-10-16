<?php

namespace App;

use App\Traits\ImageTrait;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
/**
 * App\User.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property Carbon|null $email_verified_at
 * @property string|null $password
 * @property int|null $created_by
 * @property bool $set_password
 * @property int $is_email_verified
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereIsEmailVerified($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereSetPassword($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @property string $image
 * @method static Builder|User whereImagePath($value)
 * @mixin Eloquent
 * @property string $image_path
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 */
class User extends Authenticatable
{
    use Notifiable, ImageTrait;
    use ImageTrait {
        deleteImage as traitDeleteImage;
    }
    use HasRoles;

    public $table = 'users';
    const IMAGE_PATH = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'email_verified_at',
        'image_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'set_password'      => 'boolean',
        'image_path'      => 'string',
    ];

    

    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    public function scopeWithSearch($query){
        $keyword = request()->keyword;
        $search_fields = $this->search_fields;
        // dd($search_fields);

        if(request('keyword')){
            if(count($search_fields)){
                foreach ($search_fields as $field) {
                    $query = $query->orWhere( $field, 'like', '%' . $keyword . '%');
                }
            }
        }
        return $query;
    }

    
    public function scopeVerify($query){
        return $query->delete();
    }

    /**
     * @param $value
     *
     * @return string
     */
    public function getImagePathAttribute($value)
    {
        if (!empty($value)) {
            return $this->imageUrl(self::IMAGE_PATH.DIRECTORY_SEPARATOR.$value);
        }

        return getUserImageInitial($this->id, $this->name);
    }

    /**
     * @return bool
     */
    public function deleteImage()
    {
        $image = $this->getOriginal('image_path');
        if (empty($image)) {
            return true;
        }

        return $this->traitDeleteImage(self::IMAGE_PATH.DIRECTORY_SEPARATOR.$image);
    }
}
