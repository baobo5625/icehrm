<?php
/**
 * Created by PhpStorm.
 * User: Thilina
 * Date: 8/19/17
 * Time: 6:10 PM
 */

namespace Qualifications\Common\Model;

use Classes\ModuleAccess;
use Model\BaseModel;

class EmployeeEducation extends BaseModel
{
    public $table = 'EmployeeEducations';

    public function getAdminAccess()
    {
        return array("get","element","save","delete");
    }

    public function getManagerAccess()
    {
        return array("get","element","save","delete");
    }

    public function getUserAccess()
    {
        return array("get");
    }

    public function getUserOnlyMeAccess()
    {
        return array("element","save","delete");
    }

    public function getModuleAccess()
    {
        return [
            new ModuleAccess('qualifications', 'admin'),
            new ModuleAccess('employees', 'admin'),
            new ModuleAccess('employees', 'user'),
        ];
    }
}
