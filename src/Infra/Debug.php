<?php

namespace Projetux\Infra;

class Debug{
    
    public function debug(string $texto): void
    {
        echo "Debug: {$texto}";
    }
}