<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Profile extends Model
    {
        use HasFactory;
        use SoftDeletes;

        // date 
        protected $date = ['created_at'];

        // filables 
        protected $fillable = [
            'firstName',
            'lastName',
            'age',
            'email',
            'password',
            'description',
            'image',
        ];

        // publications 
        public function publications() {
            return $this->hasMany(Publication::class);
        }
    }
