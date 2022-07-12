<?php
declare (strict_types=1);

class Airplane implements Flyable
{
    public function fly(): void
    {
        echo 'Airplane is flying..';
    }
}
