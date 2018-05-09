<?php
/**
 * Copyright 2018 Twohill & Co. Ltd
 */

namespace Twohill\Example;


class GuestRegistration extends Registration
{
    private static $table_name = 'GuestRegistration';
    private static $db = [
        'AttendingDinner' => 'Boolean'
    ];
}