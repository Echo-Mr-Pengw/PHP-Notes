<?php
/**
 * PHP7 属性的访问控制符
 * @author  new1024kb
 * @since  2019-12-23
 */

class AttrAccessControl {
	/**
	 * 姓名
	 * @var $name string
	 */
	public $name = 'new1024kb';
	
	/**
	 * 年龄
	 * @var $age integer
	 */
	protected $age = 20;
	
	/**
	 * 性别
	 * @var $sex string
	 */
	private $sex = 'man';
}

$a = new AttrAccessControl();

echo 'name: ' . $a->name;  //输出 name: new1024kb
echo 'age: ' . $a->age;    //报错：Fatal error: Uncaught Error: Cannot access protected property AttrAccessControl::$age 
echo 'sex: ' . $a->sex;    //报错：Fatal error: Uncaught Error: Cannot access private property AttrAccessControl::$sex


