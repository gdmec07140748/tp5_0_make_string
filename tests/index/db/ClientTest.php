<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/2/25
 * Time: 19:34
 */

namespace tests\index\db;


use PDO;
use PHPUnit_Extensions_Database_TestCase;
use think\testing\ApplicationTrait;
use think\testing\AssertionsTrait;
use think\testing\CrawlerTrait;

/**
 * @property  pdo
 */
class ClientTest extends PHPUnit_Extensions_Database_TestCase{
    use ApplicationTrait, AssertionsTrait, CrawlerTrait;

    private static $pdo;
    protected $baseUrl = 'http://localhost';
    private $conn;

    //获得连接
    public function getConnection(){
        //数据库的连接
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'] );
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
        }

        return $this->conn;
    }

    // 获得初始数据
    public function getDataSet(){
        // 基境的建立
    }

    // 具体的测试用例

}