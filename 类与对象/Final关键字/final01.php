<?php 
/**
 * Final 关键字可以修饰类和方法，不能修饰属性。
 * @link https://github.com/Echo-Mr-Pengw
 * @author  new1024kb
 * @since  2020-01-13
 */

//final关键字修饰类（正确）
final class Final01 {
}

//final关键字修饰方法（正确）
class Final011 {
	final public function test() {}
}

//final关键字修饰方法（错误写法）
//PHP Fatal error:  Cannot declare property Final001::$name final, the final modifier is allowed only for methods and classes in xxx\PHP-Notes\类与对象\Final关键字\final01.php on line 20
class Final0111 {
	final public $name;	
}




