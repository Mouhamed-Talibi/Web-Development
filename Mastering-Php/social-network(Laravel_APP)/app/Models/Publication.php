<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Publication extends Model
    {
        use HasFactory, SoftDeletes;

        // fillable fields
        protected $fillable = [
            'title',
            'body', 
            'image',
            'profile_id',
        ];

        // profile
        public function profile() {
            return $this->belongsTo(Profile::class, 'profile_id');
        }
    }
