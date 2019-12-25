<?php 
/**
 * PHP7 构造函数
 * 如果父类和子类都有自己的构造函数，实例化子类的时候，只会调用子类自身的构造函数，如果想在子类中调用父类中的构造函数，在
 * 子类中使用parent::__construct()。
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

	/**
	 * [__construct 子类的构造函数]
	 */
	public function __construct() {
		echo 'child init';

		//如果需要使用父类的构造方法，使用parent::__construct()
		//parent::__construct();
	}
}

new ChildConstructFunction();  //输出：child init

