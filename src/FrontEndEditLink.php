<?php
namespace evanshunt\FrontEndEditLink;

use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\Security\Security;


use SilverStripe\Dev\Debug;

class FrontEndEditLink extends DataExtension
{

    public function EditLink(){

        if ($member = Security::getCurrentUser()) {
            return DBField::create_field('HTMLFragment',"<a href='admin/pages/edit/show/".$this->owner->ID."/' style='
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

        return NULL;
    }

}
