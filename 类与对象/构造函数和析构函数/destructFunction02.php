<?php 
/**
 * PHP7 析构函数
 * 如果在析构方法里面使用exit()，其后面的代码不执行。
 * @author  new1024kb
 * @since  2019-12-25
 */

class DestructFunction {

	/**
	 * [next 测试方法]
	 * @return string
	 */
	public function next() {
		echo 'After destructor execution';
	}

	/**
	 * [__destruct 析构函数]
	 */
	public function __destruct() {
		echo 'Destructor executed successfully';
		exit(); //中断，后面的代码不执行
		$this->next();  
	}
}

//输出：Destructor executed successfully.
new DestructFunction();  