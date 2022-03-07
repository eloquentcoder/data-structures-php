<?php

namespace Eloquentcoder\DatastructuresPHP\Utils;


class Node {
    public Node $next;
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
}