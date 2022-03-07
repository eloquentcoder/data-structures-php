<?php

namespace Eloquentcoder\DatastructuresPHP\Utils;


class LinkedListNode {
    public LinkedListNode $next;
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
}