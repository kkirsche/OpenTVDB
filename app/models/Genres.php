<?php

class Genres extends BaseModel {
    protected $table = 'genres';


    public function series()
    {
        return  $this->belongsToMany('Series', 'genres_series', 'genres_id', 'series_id');
    }
}