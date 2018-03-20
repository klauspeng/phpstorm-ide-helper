<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-03-20
 * Time: 9:58
 */

/**
 * Yar客户端
 * Class Yar_Client
 */
class Yar_Client
{
    /* 属性 */

    protected $_protocol;

    protected $_uri;

    protected $_options;

    protected $_running;

    /* 方法 */

    /**
     * 创建一个客户端实例
     *
     * @param string $url 服务端的HTTP URL路径.
     */
    final public function __construct($url)
    {

    }

    /**
     * 调用远程服务
     *
     * @param string $method     方法
     * @param array  $parameters 参数
     */
    public function __call($method, array $parameters)
    {

    }

    /**
     * 设置调用的配置
     *
     * @param integer $name  可以是: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (需要服务端支持keepalive), YAR_OPT_TIMEOUT,
     *                       YAR_OPT_CONNECT_TIMEOUT
     * @param mixed   $value 值
     */
    public function setOpt($name, $value)
    {

    }
}