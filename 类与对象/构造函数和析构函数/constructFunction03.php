<?php 
/**
 * PHP7 构造函数
 * 如果父类中有构造函数，子类没有构造函数且继承了父类，子类实例化时，会自动调到父类中的构造函数。
 * @author new1024kb
 * @since  2019-12-25
 */

class ParentConstructFunction {

	/**
	 * [__construct 父类的构造函数]
	 */
	public function __construct() {
		echo 'parent init';
	}
}

class ChildConstructFunction extends ParentConstructFunction { 
}

new ChildConstructFunction();  //输出：parent init

