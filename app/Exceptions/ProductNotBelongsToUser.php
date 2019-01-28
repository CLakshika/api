<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	return ['errors' => 'Products Not Belongs To User'];
    }
}
