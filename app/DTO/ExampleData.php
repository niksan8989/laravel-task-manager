<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class ExampleData extends DataTransferObject
{
    /** @var string */
    public $title;

    /** @var string */
    public $body;
}
