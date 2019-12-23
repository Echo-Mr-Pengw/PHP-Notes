<?php
/**
 * PHP7 接口常量
 * @author  new1024kb
 * @since  2019-12-23
 */

interface Student {
	const NAME = 'new1024kb';
}

echo Student::NAME; //输出1024kb


//Sunny类实现Student接口
class Sunny implements Student {
	const NAME = 'sunny new1024kb';
}
/**
 * 输出：
 * Fatal error: Cannot inherit previously-inherited or override constant NAME from interface Student in 
 * xxx\PHP-Notes\类与对象\interfaceConstants.php on line 16
 */


//子接口Monitor继承父接口Student
interface Monitor extends Student {
	const NAME = 'monitor new1024kb';
}
/**
 * Fatal error: Cannot inherit previously-inherited or override constant NAME from interface Student in 
 * xxx\PHP-Notes\类与对象\interfaceConstants.php on line 27
 */