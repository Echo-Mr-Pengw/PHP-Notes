<?php 
/**
 * Final 关键字修饰的方法，不能被子类覆盖。
 * @link https://github.com/Echo-Mr-Pengw
 * @author  new1024kb
 * @since  2020-01-13
 */

class Base {

	public function test01() {
		echo 'base test01()';
	}

	final public function test02() {
		echo 'base test02()';
	}
}

/*
* 被Final修饰的类，不能被继承
* PHP Fatal error:  Cannot override final method Base::test02() in x\PHP-Notes\类与对象\Final关 键字\final03.php on line 31
*/
class Child extends Base {

	public function test01() {
		echo 'Child test01()';
	}

	//覆盖父类中final声明的方法（报错）
	public function test02() {
		echo 'Child test02()';
	}
}



