# 图书管理系统
>这个图书管理系统是我学完PHP时写的一个项目，参考了某位大神的图书管理系统。前端使用了一些基本的框架(毕竟我主攻后端开发方向)，后端大部分要用到的功能，基本没有用到第三方框架。总体来说还是比较简陋的，在某些地方可能存在缺陷或者漏洞。

### 基本功能
+ 用户
    + 查询图书状态(能够进行搜索)
    + 管理自己的账户，如：修改密码、挂失等
    + 对已借的图书进行续借操作
+ 管理员
    + 管理图书，增删改查
    + 管理用户，如修改密码、挂失、删除等
    + 借阅管理

### 特点
+ 数据库中的数据来自豆瓣图书Top250
+ 前端页面使用`jQuery`+`BootStrap`实现，勉强能看(前端能力实在有限)
+ 后端采用MVC的思想，参考`ThinkPHP`框架的结构和思路，自己实现并封装了一个简单的MVC框架(View层使用了Smarty模板引擎)
+ 后端使用的数据库工具类、验证码类、分页类均由自己实现并封装
+ 可通过配置文件(`Base/Conf.php`)对项目进行配置(数据库设置和默认路由设置)
+ 前端大部分数据通过Ajax与后端进行交互，页面跳转较少

### 部署注意事项
1. `index.php`为整个项目的入口文件
2. 确保你的PHP开启了`gd2`、`mysqli`扩展
3. 将项目中的book.sql中的数据导入到数据库
4. 默认管理员账号为`10086`，密码为`admin`
5. 默认一般用户的密码为`123456`，初始的账号有`10000`、`10001`、`10002`、`10010`，其中`10010`默认被挂失

