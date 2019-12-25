<?php 
/**
 * PHP7 抽象类
 * 抽象类不能被实例化
 * @author  new1024kb
 * @since  2019-12-25
 */

//定义一个空的抽象类
abstract class abstractClass {

}

/**
 * 实例化
 * Fatal error: Uncaught Error: Cannot instantiate abstract class abstractClass in 
 * xx\PHP-Notes\类与对象\抽象类\abstractClass01.php:19
 */
new abstractClass();