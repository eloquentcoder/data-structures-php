<?php

namespace Eloquentcoder\DatastructuresPHP\Utils;


class SinglyLinkedListNode {
    public SinglyLinkedListNode $next;
    public $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
}