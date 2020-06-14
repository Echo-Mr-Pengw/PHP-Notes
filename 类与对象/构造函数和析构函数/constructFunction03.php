<?php 
/**
 * PHP7 构造函数
 * 如果父类中有构造函数，子类没有构造函数且继承了父类(父类的构造方法 不被private修饰的时候)，子类实例化时，会自动调到父类中的构造函数。
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

	// PHP Fatal error:  Uncaught Error: Call to private ParentConstructFunction::__construct() from invalid context 
	/*private function __construct() {
		echo 'private parent init';
	}*/
}

class ChildConstructFunction extends ParentConstructFunction { 
}

new ChildConstructFunction();  //输出：parent init

