<?php 
/**
 * PHP7 析构函数
 * 析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行
 * @author  new1024kb
 * @since  2019-12-25
 */

class DestructFunction {

	/**
	 * [$name 姓名]
	 * @var [string]
	 */
	public $name;

	/**
	 * [__construct 构造函数]
	 * @param string $name [姓名]
	 */
	public function __construct(string $name) {
		$this->name = $name;
		echo 'Name initialized successfully.';
	}

	/**
	 * [__destruct 析构函数]
	 */
	public function __destruct() {
		echo 'Destructor executed successfully, ' . $this->name . ' deleted.';
	}
}

//输出：Name initialized successfully.Destructor executed successfully, new1024kb deleted.
new DestructFunction('new1024kb');  