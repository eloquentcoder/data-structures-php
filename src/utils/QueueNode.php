<?php

namespace Eloquentcoder\DatastructuresPHP\Utils;

class QueueNode {
    public QueueNode $next;
    public $data;

    public function __construct($data) {
        $this->data = $data;        
    }

}