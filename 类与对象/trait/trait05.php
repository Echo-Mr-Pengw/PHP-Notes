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
	use Demo {
		say as private;          //将say()方法的访问控制修改成private
		say as public pubsay;    //给say()方法起一个别名pubsay，其访问控制为public。不影响访问控制为private的say方法
	}
}

$pt = new PrivateTrait05();
//PHP Fatal error:  Uncaught Error: Call to private method PrivateTrait05::say() from context '' in xxx\person-git\PHP-Notes\类与对象\trait\trait05.php:33
echo $pt->say();

echo $pt->pubsay();  //输出：Demo say()

