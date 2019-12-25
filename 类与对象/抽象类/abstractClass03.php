<?php
/**
 * PHP7 抽象类
 * 继承抽象类的类，必须实现抽象类中所有的抽象方法，并且其方法在子类中访问控制更宽松。
 * @author  new1024kb
 * @since  2019-12-25
 */

abstract class abstractClass {

	/**
	 * [test1 受保护的抽象方法]
	 */
	abstract protected function test1();

	/**
	 * [test2 公有的抽象方法]
	 */
	abstract public function test2();
}

/**
 * 案例一
 * 继承抽象类的类，必须实现抽象类中所有的抽象方法
 * 
 * 运行报错：
 * PHP Fatal error:  Class Child contains 1 abstract method and must therefore be declared abstract or implement the 
 * remaining methods (abstractClass::test2) in xxx\PHP-Notes\类与对象\抽象类\abstractClass03.php on 
 * line 32
 */

class Child extends abstractClass {

	public function test1() {
		echo 'child test1()';
	}

	/**
	 * 正确的做法
	 * class Child extends abstractClass {
	 *     public function test1(){}
	 *     public function test2(){}
	 * }
	 */
}


/**
 * 案例二
 * 继承抽象类的类，其方法在子类中访问控制更宽松
 *
 * 运行报错：
 * PHP Fatal error:  Access level to Child1::test1() must be protected (as in class abstractClass) or weaker in 
 * xxx\PHP-Notes\类与对象\抽象类\abstractClass03.php on line 57
 */

class Child1 extends abstractClass {

	/**
	 * [test1 私有的方法]
	 */
	private function test1() {}

	/**
	 * [test2 受保护的方法]
	 */
	protected function test2(){}

	/**
	 * 正确的做法
	 * class Child1 extends abstractClass {
	 *     public function test1(){}  //或者protected function test1(){}
	 *     public function test2(){}
	 * }
	 */
}
