<?php 
/**
 * Final 关键字修饰的类，不能被子类继承。
 * @link https://github.com/Echo-Mr-Pengw
 * @author  new1024kb
 * @since  2020-01-13
 */

final class Base {
}

/*
* 被Final修饰的类，不能被继承
* PHP Fatal error:  Class Child may not inherit from final class (Base) in xxx \PHP-Notes\类与对象\Final关键字\final02.php on 
* line 17
* */
class Child extends Base {

}

