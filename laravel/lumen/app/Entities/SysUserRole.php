<?php
/**
 * Created by PhpStorm.
 * User: tangjun <tangjun@misrobot.com>
 * Date: 2015年12月15日
 * Time: 11:18:06
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use DB;
class SysUserRole extends Model
{
    protected $connection	=	'sys_mis';
    protected $table 		= 	'sys_user_role';
    protected $fillable 	=	['role_id', 'user_id'];
    public $incrementing	=	true;
    public $timestamps	=	true;
    protected $primaryKey	=	'id';


    /**
     * @access public
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * @author tangjun <tangjun@misrobot.com>
     * @date    2016年1月22日10:22:06
     * @copyright 2013-2015 MIS misrobot.com Inc. All Rights Reserved
     */
    public function SysRoles(){
        return  $this->hasOne('App\Entities\SysRoles','id','role_id');
    }



}