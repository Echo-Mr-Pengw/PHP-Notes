<?php
/**
 * PHP7 构造函数
 * 实例化时，自动调用构造函数，一般用于做初始化工作
 * @author  pengw
 * @since  2019-12-25
 */
class ConstructFunction {
	/**
	 * [__construct 构造函数]
	 */
	public function __construct() {
		echo 'init';
	}
}

new ConstructFunction();  //输出：init