<?php 
/**
 * PHP7 trait
 * trait insteadof 解决冲突
 * @link https://github.com/Echo-Mr-Pengw/PHP-Notes
 * @author  new1024kb
 * @since  2020-01-03
 */

trait Demo1 {
	public function say() {
		echo 'Demo1 say()';
	}
}

trait Demo2 {
	public function say() {
		echo 'Demo2 say()';
	}
}

/**
 * 下面的写法会产生冲突
 * PHP Fatal error:  Trait method say has not been applied, because there are collisions with other trait methods on 
 * Trait03 in xxx\PHP-Notes\类与对象\trait\trait03.php on line 26
 *
 * class Trait03 {
 *    use Demo1, Demo2;
 *  }
 */

class Trait03 {
	use Demo1, Demo2 {
		Demo1::say insteadof Demo2;   //使用Demo1中的say方法
	}
}

$t = new Trait03();
$t->say();  //Demo1 say()
