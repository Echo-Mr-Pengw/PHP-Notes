## trait 使用总结如下:
trait 进一步解决了PHP类单继承问题，实现了代码复用。简单的来说，trait的引入让PHP实现了多继承

1. trait 不能被实例化。参考`trait01.php`
2. trait的优先级：当前类的成员覆盖trait，trait覆盖继承的父类。 参考`trait02.php`