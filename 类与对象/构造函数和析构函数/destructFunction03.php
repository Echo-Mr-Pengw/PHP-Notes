<?php 
/**
 * PHP7 析构函数
 * 如果某个方法中使用`exit()`，不影响析构函数的执行
 * @author  new1024kb
 * @since  2019-12-25
 */

class DestructFunction {

	/**
	 * [stop 中断方法]
	 * @return [string]
	 */
	public function stop() {
		echo 'interrupt';
		exit();
	}

	/**
	 * [__destruct 析构函数]
	 */
	public function __destruct() {
		echo 'Destructor executed successfully';
	}
}

//输出：interrupt Destructor executed successfully.
$d = new DestructFunction();  
$d->stop();