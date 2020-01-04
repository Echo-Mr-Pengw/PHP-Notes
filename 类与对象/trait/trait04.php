<?php 
/**
 * PHP7 trait
 * trait as引入方法别名，不影响其方法
 * @link https://github.com/Echo-Mr-Pengw/PHP-Notes
 * @author  new1024kb
 * @since  2020-01-03
 */

trait Demo1 {
	public function say() {
		echo 'Demo1 say()';
	}
}

class Trait04 {
	use Demo1 {
		Demo1::say as aliasSay;	  //给Demo1中的say方法，取aliasSay作为其别名
	}
}

$t = new Trait04();
$t->say();       //输出：Demo1 say()
$t->aliasSay();  //通过别名访问 输出：Demo1 say()