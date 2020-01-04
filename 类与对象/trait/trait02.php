<?php 
/**
 * PHP7 trait
 * trait的优先级：当前类的成员覆盖trait，trait覆盖继承的父类。
 * @link https://github.com/Echo-Mr-Pengw/PHP-Notes
 * @author  new1024kb
 * @since  2020-01-03
 */

class Base {
	public function say() {
		echo 'Base say()';
	}
}


trait Demo {
	public function say() {
		echo 'trait say()';
	}
}

/**
 * 当前类的成员的优先级高于trait和父类
 */
class Child01 extends Base {
	use Demo;

	public function say() {
		echo 'Child01 say()';
	}
}

$c1 = new Child01();
$c1->say();   //Child01 say()


/**
 * trait中的成员优先级高于子类的父类
 */
class Child02 extends Base {
	use Demo;
}

$c2 = new Child02();
$c2->say();   //trait say()
