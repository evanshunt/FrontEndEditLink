<?php

use SilverStripe\ORM\DataExtension;
use Silverstripe\Security\Security;
use SilverStripe\ORM\FieldType\DBField;

use SilverStripe\Dev\Debug;

class CMSEditLink extends DataExtension
{
    private static $db = [

    ];

    private static $many_many = array(
    );

    private static $has_one = [];

    private static $hide_ancestor = 'Page';
    private static $table_name = 'CMSEditLink';



    public function EditURL(){

        if ($member = Security::getCurrentUser()) {
            return DBField::create_field(HTMLFragment::class,"<a href='admin/pages/edit/show/".$this->owner->ID."/' style='
            position: fixed;
            z-index: 1000;
            bottom: 0;
            left: 0;
            background: #f90;
            padding: 0 3px;
            font-size: 12px;
            color: #fff;
            ' target='_blank' rel='nofollow'>Edit</a>");
        }
    }

}
