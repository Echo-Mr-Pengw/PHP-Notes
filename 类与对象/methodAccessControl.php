<?php
/**
 * PHP7 方法的访问控制符
 * @author  new1024kb
 * @since  2019-12-23
 */

class MethodAccessControl {
	
	/**
	 * 姓名
	 * @param  string $name
	 * @return [string]
	 */
	public function name(string $name = '') {
		return $name;
	}

	/**
	 * 年龄
	 * @param  int|integer $age
	 * @return [int|integer]
	 */
	protected function age(int $age = 0) {
		return $age;
	}

	/**
	 * 性别
	 * @param  string $sex
	 * @return [strring]
	 */
	private function sex(string $sex = '') {
		return $sex;
	}
}

$m = new MethodAccessControl();

echo 'name: ' . $m->name('new1024kb');  //输出 name: new1024kb
echo 'age: ' . $m->age(20);     //报错：Fatal error: Uncaught Error: Call to protected method MethodAccessControl::age() 
echo 'sex: ' . $m->sex('man');    //报错：Fatal error: Uncaught Error: Call to protected method MethodAccessControl::age()


