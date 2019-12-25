<?php 
/**
 * PHP7 范围解析操作符
 * 类外访问常量使用类名::常量名，类内访问常量使用self::常量名
 * @author  new1024kb
 * @since  2019-12-25
 */

class RangeResolutionOperator {

	/**
	 * 定义常量 
	 */
	const NAME = 'new1024kb';

	/**
	 * [getConstant 类内获取常量]
	 * @return [string]
	 */
	public function getConstant() {
		//类内访问常量 self::常量名
		echo self::NAME;
	}
}

echo RangeResolutionOperator::NAME;   //类外访问常量 类名::常量名  输出：new1024kb

$r = new RangeResolutionOperator();  //实例化

$r->getConstant();   //类内访问常量   输出：new1024kb


