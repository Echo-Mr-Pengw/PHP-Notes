<?php 
/**
 * PHP7 构造函数
 * 如果类中没有构造函数__construct，实例化对象的时候，自动寻找类中与类名相同的方法(方法名不区分大小写)，作为构造函数。注意：PHP7.0以后官方不推荐此做法
 * @author new1024kb
 * @since  2019-12-25
 */

class ConstructFunction {
	/**
	 * [ConstructFunction 被当成构造函数]
	 */
	public function ConstructFunction() {
		echo 'init';
	}
}

/**
 * Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP;   
 * ConstructFunction has a deprecated constructor in 
 * xxx\PHP-Notes\类与对象\构造函数和析构函数\constructFunction02.php on line 10
 * init
 */
new ConstructFunction();  