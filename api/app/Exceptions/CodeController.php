<?php

namespace App\Exceptions;

use Exception;

class CodeController extends Exception
{
    //成功时返回的信息
    const SUCCESS_CODE="200";
    const SUCCESS_CODE_MSG="ok";
    //失败时返回的信息
    const ERROR_CODE="0";
    const ERROR_CODE_MSG="发生未知错误";
}
