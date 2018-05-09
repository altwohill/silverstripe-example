<?php
/**
 * Copyright 2018 Twohill & Co. Ltd
 */

namespace Twohill\Example;


use SilverStripe\ORM\DataObject;

class Registration extends DataObject
{
    private static $table_name = 'Registration';
    private static $db = [
        'NameTag' => 'Varchar(255)'
    ];
}