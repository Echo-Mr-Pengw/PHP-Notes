<?php
/**
 * PHP7 属性继承的访问控制
 * @author  new1024kb
 * @since  2019-12-24
 */

//基类
class Base {

	/**
	 * 姓名
	 * @var $name string
	 */
	public $name = 'new1024kb';

	/**
	 * 年龄
	 * @var $age int|integer
	 */
	protected $age = 20;

	/**
	 * 性别
	 * @var $sex string
	 */
	private $sex = 'man';
}

//子类
class Child extends Base {

	/**
	 * 在类里面访问父类中受保护的age属性
	 * @return [int]
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * 在类里面访问父类中私有的sex属性
	 * @return [string]
	 */
	public function getSex() {
		return $this->sex;
	}
}

$c = new Child();

//输出：new1024kb
echo $c->name;

//在类外面访问受保护的属性 报错：Fatal error: Uncaught Error: Cannot access protected property Child::$age in xxx \PHP-Notes\类与 对象\attrExtendsAccessControl.php:55
echo $c->age; 

//在类外面访问私有的属性 报错：Notice: Undefined property: Child::$sex in xxx\PHP-Notes\类与对象\attrExtendsAccessControl.php on line 59
echo $c->sex;  

//在子类里面访问父类受保护属性 输出：new1024kb
echo $c->getAge();

//在子类里面访问父类中私有的属性 Notice: Undefined property: Child::$sex in xxx\PHP-Notes\类与对象\attrExtendsAccessControl.php on line 65
echo $c->getSex();




