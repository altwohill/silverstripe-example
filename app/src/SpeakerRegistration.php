<?php
/**
 * Copyright 2018 Twohill & Co. Ltd
 */

namespace Twohill\Example;


class SpeakerRegistration extends Registration
{
    private static $table_name = 'SpeakerRegistration';
    private static $db = [
        'Subject' => 'Varchar(255)'
    ];
}