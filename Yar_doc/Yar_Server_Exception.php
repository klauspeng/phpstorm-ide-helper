<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-03-20
 * Time: 10:39
 */

/**
 * Yar服务端异常
 * Class Yar_Server_Exception
 */
class Yar_Server_Exception extends Exception
{
    /* 属性 */

    protected $_type;

    /* 方法 */

    /**
     * 获取异常的原始类型
     */
    public function getType()
    {
    }

}