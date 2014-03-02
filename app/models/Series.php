<?php

class Series extends BaseModel {

    protected $table = 'series';

    public function network()
    {
        return $this->hasOne('Network', 'id', 'network_id');
    }

    public function aliases()
    {
        return $this->hasMany('Alias', 'series_id', 'id');
    }    

    public function ratings()
    {
        return $this->hasMany('SeriesRatings', 'series_id', 'id');
    }

    public function genres()
    {
        return  $this->belongsToMany('Genres', 'genres_series', 'series_id', 'genres_id');
    }

    public function actors()
    {
        return  $this->belongsToMany('Actors', 'actors_series', 'series_id', 'actors_id');
    }

    public function seasons()
    {
        return $this->hasMany('Seasons', 'series_id', 'id');
    }

    public function episodes()
    {
        return $this->hasMany('Episodes', 'series_id', 'id');
    }
}