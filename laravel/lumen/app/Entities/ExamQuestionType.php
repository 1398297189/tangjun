<?php
/**
 * Created by PhpStorm.
 * User: tangjun <tangjun@misrobot.com>
 * Date: 2015年12月15日
 * Time: 11:18:06
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class ExamQuestionType extends Model
{
    protected $connection	=	'mysql';
    protected $table 		= 	'exam_question_type';
    public  $timestamps	=	true;
    protected $fillable 	=	['name'];





}