<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-03-20
 * Time: 10:08
 */

/**
 * Yar并行服务端
 * Class Yar_Concurrent_Client
 */
class Yar_Concurrent_Client
{
    /* 属性 */

    static $_callstack;

    static $_callback;

    static $_error_callback;

    /* 方法 */

    /**
     * 注册一个并行的(异步的)远程服务调用, 不过这个调用请求不会被立即发出
     *
     * @param string   $uri        RPC 服务的 URI(http 或 tcp).
     * @param string   $method     调用的服务方法名字
     * @param array    $parameters 参数
     * @param callable $callback   回调函数, 在远程服务的返回到达的时候被Yar调用, 从而可以处理返回内容.
     *
     * @return string id 唯一 ID， 可用于区分到底是那个调用的返回.
     */
    public static function call($uri, $method, array $parameters, callable $callback = null)
    {
    }

    /**
     * 发送所有注册的并行调用
     *
     * @param callable $callback       回调函数 （如call设置回调，优先执行call的回调，在执行次此回调）
     * @param callable $error_callback 错误回掉函数
     */
    public static function loop(callable $callback, callable $error_callback)
    {
    }
}