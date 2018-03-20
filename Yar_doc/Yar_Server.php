<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-03-20
 * Time: 9:37
 */

/**
 * Yar服务端
 * Class Yar_Server
 */
class Yar_Server
{
    /* 属性 */
    protected $_executor;

    /**
     * 创建一个Yar的HTTP RPC服务，参数 $obj 对象的所有公开方法都会被注册为服务函数， 可以被RPC调用。
     *
     * @param object $obj 一个对象实例, 这个对象的所有公开方法都会被注册为服务函数
     */
    final public function __construct($obj)
    {

    }

    /**
     * 启动HTTP RPC Server
     *
     * 来自客户端的调用, 都是通过POST请求发送过来的. 如果一个GET请求访问到这个Server, 那在yar.expose_info开启的情况下, 这个服务的Server Info信息会被展现.
     */
    public function handle()
    {
    }
}