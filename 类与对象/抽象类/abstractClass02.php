<?php 
/**
 * PHP7 抽象类
 * 抽象类不一定含有抽象方法，含有抽象方法的类必定是抽象类，抽象方法只是声明、不定义具体的功能实现。
 * @author  new1024kb
 * @since  2019-12-25
 */

/**
 * 案例一
 * 抽象类不一定含有抽象方法
 */
abstract class abstractClass {
	
	/**
	 * [test 普通的测试方法]
	 * @return [string]
	 */
	public function test() {
		echo 'test';
	}
}

//子类继承抽象类
class Child extends abstractClass {

}

$c = new Child();
$c->test();


/**
 * 案例二
 * 含有抽象方法的类，必定是抽象类
 */
class abstractClass1 {

	/**
	 * [test1 测试的抽象方法]
	 * 运行报错：PHP Fatal error:  Class abstractClass1 contains 1 abstract method and must therefore be declared abstract 
	 * or implement the remaining methods (abstractClass1::test1) in xxx\PHP-Notes\类与对象\抽象类\abstractClass02.php on 
	 * line 42
	 */
	abstract public function test1();

	/**
	 * 正确的写法
	 * abstract abstractClass1 {
	 *     abstract public function test1();
	 * }
	 */
}

/**
 * 案例三
 * 抽象方法只是声明、不定义具体的功能实现。
 */
abstract class abstractClass2 {
	/**
	 * [test2 抽象方法]
	 * 运行报错： PHP Fatal error:  Abstract function abstractClass2::test2() cannot contain body in
	 * xxx\PHP-Notes\类与对象\抽象类\abstractClass02.php on line 65
	 */
	abstract public function test2() {

	}

	/**
	 * 正确的写法
	 * abstract class abstractClass2 {
	 *    abstract public function test2();
	 * }
	 */
}