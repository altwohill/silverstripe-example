<?php
/**
 * Copyright 2018 Twohill & Co. Ltd
 */

namespace Twohill\Example;


use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;

class Registration extends DataObject
{
    private static $table_name = 'Registration';
    private static $db = [
        'NameTag' => 'Varchar(255)'
    ];

    private static $has_one = [
        'Member' => Member::class
    ];
}