<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
      // By default, this is true, so you don't need to add it unless you disable timestamps
      public $timestamps = true;

      // In Post.php model
        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
