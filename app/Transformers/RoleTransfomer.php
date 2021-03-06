<?php
/**
 * Created by IntelliJ IDEA.
 * User: CodeThunder
 * Date: 2017/07/18
 * Time: 9:57 PM
 */

namespace Anglo\Transformers;

use Anglo\Models\Roles;
use League\Fractal\TransformerAbstract;

class RoleTransfomer extends TransformerAbstract
{
    public function transform(Roles $role)
    {
        return [
            'id'=> $role->getId(),
            'name'=> $role->getName()
        ];
    }
}