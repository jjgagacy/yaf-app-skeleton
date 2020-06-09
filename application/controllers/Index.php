<?php
/**
 * Class IndexController
 */
class IndexController extends Yaf\Controller_Abstract
{
    public function indexAction()
    {
        // instantiate Bar class in Foo namespace
        $bar = new Foo\Bar();

        $this->getView()->assign('content', 'hello world');
    }

    public function testAction()
    {
        echo 'test';
        die;// 没有die会触发模板异常
    }

}