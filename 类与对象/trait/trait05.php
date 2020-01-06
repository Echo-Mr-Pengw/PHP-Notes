<?php
/**
 * PHP7 通过as修改方法的访问控制
 * @author  new1024kb
 * @since  2020-01-06
 */

trait Demo {
	public function say() {
		echo 'Demo say()';
	}
}


class Trait05 {
	//使用say方法默认的访问控制
	use Demo;
}

$t = new Trait05();
echo $t->say();  //输出：Demo say()


class PrivateTrait05 {
	//将say()方法的访问控制修改成private
	use Demo {
		say as private;
	}
}

$pt = new PrivateTrait05();
//PHP Fatal error:  Uncaught Error: Call to private method PrivateTrait05::say() from context '' in xxx\person-git\PHP-Notes\类与对象\trait\trait05.php:33
echo $pt->say();


