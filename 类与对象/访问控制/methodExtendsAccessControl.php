<?php
/**
 * PHP7 类方法继承的访问控制
 * @author new1024kb
 * @since  2019-12-24
 */

//基类
class Base {

	/**
	 * 公有的 姓名
	 */
	public function basePublicName() {
		return 'new1024kb';
	}

	/**
	 * 受保护 年龄
	 */
	protected function baseProtectedAge() {
		return '20';
	}

	/**
	 * 私有的  年龄
	 */
	private function basePrivateSex() {
		return 'man';
	}
}

//子类
class Child extends Base {

	/**
	 * 在子类内访问父类中公有的方法
	 * @return [string]
	 */
	public function getChildName() {
		return $this->basePublicName();
	}

	/**
	 * 在子类内访问父类中受保护的方法
	 * @return [int]
	 */
	public function getChildAge() {
		return $this->baseProtectedAge();
	}

	/**
	 * 在子类内访问父类中私有的方法
	 * @return [string]
	 */
	public function getChildSex() {
		return $this->basePrivateSex();
	}
}

$c = new Child();

//通过子类的实例在类外访问父类中公有的basePublicName()，输出：new1024kb
echo $c->basePublicName();

//通过子类的实例在类外访问父类中受保护的baseProtectedAge()，Fatal error: Uncaught Error: Call to protected method Base::baseProtectedAge() from context '' in xxx\PHP-Notes\类与对象\methodExtendsAccessControl.php:67
echo $c->baseProtectedAge();

//通过子类的实例在类外访问父类中私有的basePrivateSex()，Fatal error: Uncaught Error: Call to private method Base::basePrivateSex() from context '' in xxx\PHP-Notes\类与对象\methodExtendsAccessControl.php:70
echo $c->basePrivateSex();

//在子类内访问父类中公有的basePublicName()，输出：new1024kb
echo $c->getChildName();

//在子类内访问父类中受保护的方法baseProtectedAge()，输出：new1024kb
echo $c->getChildAge();

//在子类内访问父类中私有的方法basePrivateSex()，Fatal error:  Uncaught Error: Call to private method Base::basePrivateSex() from context 'Child' in xxx\PHP-Notes\类与对象\methodExtendsAccessControl.php:57
echo $c->getChildSex();
