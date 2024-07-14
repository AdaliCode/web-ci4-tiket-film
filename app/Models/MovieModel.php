<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
    protected $table = 'movies';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'slug', 'description', 'release', 'hour_duration', 'minutes_duration', 'trailer'];

    public function casts()
    {
        return $this->table('movies')->select(['movies.*', 'GROUP_CONCAT(casts.name) as all_casts'])->join('movie_casts', 'movies.id = movie_casts.movie_id', 'inner')->join('casts', 'casts.id = movie_casts.cast_id', 'inner')->groupBy('movies.title');
    }
}
