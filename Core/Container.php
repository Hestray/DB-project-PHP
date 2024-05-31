<?php

namespace Core;

class Container {
    protected $bindings = [];

    public function bind($key, $resolver) {
        // to 'add' things to a container
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key) {
        // to 'grab' things from a container
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("No matching binding found for {$key}");
        }
        $resolver = $this->bindings[$key];
        return call_user_func($resolver);
    }
}