<?php
/**
 * PHP7 对象接口
 * 接口中定义的方法只能用public修饰
 * @author  new1024kb
 * @since  2019-12-26
 */

interface objectInterface {
	/**
	 * [test 受保护的测试方法]
	 * @return [type] [description]
	 */
	protected function test();
}

/**
 * 运行报错:
 * PHP Fatal error:  Access type for interface method objectInterface::test() must be omitted in 
 * xx\PHP-Notes\类与对象\对象接口\objectInterface02.php on line 14
 * 
 * 正确的写法：
 * interface objectInterface {
 *     public function test();
 * }
 */