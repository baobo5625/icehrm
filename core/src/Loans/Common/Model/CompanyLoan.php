<?php
/**
 * Created by PhpStorm.
 * User: Thilina
 * Date: 8/19/17
 * Time: 2:53 PM
 */

namespace Loans\Common\Model;

use Classes\ModuleAccess;
use Model\BaseModel;

class CompanyLoan extends BaseModel
{
    public $table = 'CompanyLoans';

    public function getAdminAccess()
    {
        return array("get","element","save","delete");
    }

    public function getModuleAccess()
    {
        return [
            new ModuleAccess('loans', 'admin'),
        ];
    }
}
