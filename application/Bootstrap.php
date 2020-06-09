<?php
/**
 * Class Bootstrap
 * 以_init开头的方法，都会被Yaf调用，这些方法都接受一个参数 Yaf\Dispatcher
 */
class Bootstrap extends Yaf\Bootstrap_Abstract
{
    public function _initConfig(Yaf\Dispatcher $dispatcher)
    {
        // var_dump($dispatcher);
    }

}