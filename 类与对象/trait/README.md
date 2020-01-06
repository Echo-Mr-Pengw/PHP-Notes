## trait 使用总结如下:
trait 进一步解决了PHP类单继承问题，实现了代码复用。简单的来说，trait的引入让PHP实现了多继承

1. trait 不能被实例化。参考`trait01.php`
2. trait的优先级：当前类的成员覆盖trait，trait覆盖继承的父类。 参考`trait02.php`
3. 一个类可引入多个trait，引入的多个trait中如果含有相同的成员，则会出现冲突。通过`insteadof`解决。 参考`trait03.php`
4. 通过`as`，为某方法提供别名。 参考`trait04.php`
5. 通过`as`，修改方法的访问控制。参考`trait05.php`

