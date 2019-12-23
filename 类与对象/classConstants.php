<?php
/**
 * PHP7类常量
 * @author new1024kb
 * @since  2019-12-23
 */

class Student {
	const NAME = 'new1024kb';
}

echo Student::NAME;   //输出：new2014kb


class Sunny extends Student {
	const NAME = 'sunny new1024kb';
}

echo Sunny::NAME;    //输出：sunny new1024kb