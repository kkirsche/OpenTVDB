<?php

class Network extends BaseModel {
    protected $table = 'networks';

    /**
     * Indicates if the model has update and creation timestamps.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Set the update and creation timestamps on the model.
     */
    public function timestamp()
    {
        $this->updated_at = time();

        if ( ! $this->exists) $this->created_at = $this->updated_at;
    } 
}
