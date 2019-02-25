<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/2/25
 * Time: 19:21
 */

namespace tests\index\controll;


use tests\TestCase;

class IndexTest extends TestCase
{
    public function testTest()
    {
        $this->visit('/index/index/test')->see('Hello world!');
    }

}