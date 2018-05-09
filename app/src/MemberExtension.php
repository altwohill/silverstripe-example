<?php
/**
 * Copyright 2018 Twohill & Co. Ltd
 */

namespace Twohill\Example;

use SilverStripe\GraphQL\Scaffolding\Interfaces\ScaffoldingProvider;
use SilverStripe\GraphQL\Scaffolding\Scaffolders\SchemaScaffolder;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Security\Member;

class MemberExtension extends DataExtension implements ScaffoldingProvider
{
    private static $has_many = [
        'Registrations' => Registration::class, // could be either SpeakerRegistration or PublicRegistration class
    ];
    public function provideGraphQLScaffolding(SchemaScaffolder $scaffolder)
    {
        $scaffolder
            ->type(Member::class)
            ->addAllFields()
            ->operation(SchemaScaffolder::READ)
            ->end()
            ->nestedQuery('Registrations')
            ->setUsePagination(false)
            ->end();
        return $scaffolder;
    }
}