<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图书馆管理系统</title>
    <!--jquery-->
    <script src="./Resources/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="./Resources/bootstrap.min.css">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="./Resources/bootstrap.min.js"></script>
</head>
<?php for($i=0;$i<3;$i++){echo $i;}?>
<body style="background-image: url(./Resources/index9.jpg);background-size:100% 100%;">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav"
                    aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="JavaScript:void(0)">
                    <b>图书馆管理系统</b>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="nav">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="?p=Admin&c=Index&a=index">主页</a>
                    </li>
                    <li class="active">
                        <a href="?p=Admin&c=Book&a=index">图书管理</a>
                    </li>
                    <li>
                        <a href="?p=Admin&c=User&a=index">用户管理</a>
                    </li>
                    <li>
                        <a href="?p=Admin&c=Borrow&a=index">借阅管理</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="JavaScript:void(0)" style="cursor:default">{<$smarty.session.userId>}</a>
                    </li>
                    <li>
                        <a href="?p=Common&c=Login&a=logout">退出</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="h3 text-center">
        <b>图书详情</b>
    </div>
    <div class="form-horizontal text-center" style="width:500px;margin: 20px auto 0;">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">图书名：</div>
                <input type="text" class="form-control" readonly value="{<$book[0].name>}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">作者：</div>
                <input type="text" class="form-control" readonly value="{<$book[0].author>}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">出版社：</div>
                <input type="text" class="form-control" readonly value="{<$book[0].press>}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">出版时间：</div>
                <input type="" class="form-control" readonly value="{<$book[0].press_time>}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">价格：</div>
                <input type="text" class="form-control" readonly value="{<$book[0].price>}">
                <div class="input-group-addon">元</div>
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">数量：</div>
                <input type="" class="form-control" readonly value="{<$book[0].book_number>}">
                <div class="input-group-addon">本</div>				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">图书分类号：</div>
                <input type="" class="form-control" readonly value="{<$book[0].classifici_no>}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">ISBN：</div>
                <input type="text" class="form-control" readonly value="{<$book[0].ISBN>}">
            </div>
        </div>
        <div class="form-group">
            <label class="text-left" style="width: 100%">作品简介：</label>
            <textarea class="form-control" style="height: 150px;resize:none;" readonly>{<$book[0].introduce>}</textarea>
        </div>
        <?php for($i=0;$i<3;$i++){?>
        <div class="center-block" style="width:200px;">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">借出人</div>
                    <input type="text" class="form-control" readonly value="{<$book[1].user_name>}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">应还日期</div>
                    <input type="text" class="form-control" readonly value="{<$book.back_date>}">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>

</html>