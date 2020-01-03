<?php 
/**
 * PHP7 trait
 * trait 不能被实例化
 * @link https://github.com/Echo-Mr-Pengw/PHP-Notes
 * @author  new1024kb
 * @since  2020-01-03
 */

trait Demo {

}

/**
 * trait实例化报错
 * PHP Fatal error:  Uncaught Error: Cannot instantiate trait Demo in 
 * xxx\person-git\PHP-Notes\类与对象\trait\trait01.php:18
 */
new Demo();