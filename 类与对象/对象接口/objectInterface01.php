<?php 
/**
 * PHP7 对象接口
 * 接口中声明需要实现方法，实现接口的类，必须实现该接口中所有的方法
 * @author new1024kb
 * @since  2019-12-26
 */

/**
 * 案例一
 * 接口中只是声明实现的方法
 */
interface objectInterface {

	/**
	 * [test 测试的方法]
	 * @return [type] [description]
	 */
	public function test() {}
}

/**
 * 运行报错：
 * PHP Fatal error:  Interface function objectInterface::test() cannot contain body in 
 * xxx\PHP-Notes\类与对象\对象接口\objectInterface01.php on line xx
 *
 * 正确的写法：
 * interface objectInterface {
 *     public function test();
 * }
 */



/**
 * 案例二
 * 实现接口的类，必须实现该接口中所有的方法
 */
interface objectInterface1 {

	/**
	 * [test1 测试的方法]
	 * @return [type] [description]
	 */
	public function test1();
}

class Child extends objectInterface1 {

}

/**
 * 运行报错：
 * PHP Fatal error:  Class Child cannot extend from interface objectInterface1 in xxx\PHP-Notes\类 
 * 与对象\对象接口\objectInterface01.php on line xxx
 *
 * 正确写法：
 * interface objectInterface1 {
 *     public function test1();
 * }
 *
 * class Child extends objectInterface1{
 *     public function test1(){}
 * }
 */



