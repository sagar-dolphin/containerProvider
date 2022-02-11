<?php

namespace App;

class Container {

    //Array for keeping the container binding
    protected $bindings = [];
    
    //Binding new data to the container
    public function bind($key, $value)
    {
        //Bind the given value with given key
        $this->bindings[$key] = $value;
    }

    //Return Bound data from the container
    public function make($key)
    {
        if(isset($this->bindings[$key])){
            //Check if bound data is callback function
            if (is_callable($this->bindings[$key])) {
                // if yes, call the callback and return the value
                return call_user_func($this->bindings[$key]);
            } else {
                // if not, return the value as it is
                return $this->bindings[$key];
            }
        }
        
    }
}

