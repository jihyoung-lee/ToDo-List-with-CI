
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no"/>
    <title>CodeIgniter</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div id="main">
    <header id="header" data-role = "header" data-position="fixed">
        <blockquote></blockquote>
        <p>코드이그나이터</p>
        </blockquote>
    </header>
    <nav id="gnb">
        <ul>
            <li><a rel="external" href="/todo/index.php/main/lists/">Todo List</a> </li>
        </ul>
    </nav>
    <article id="board area">
        <header>
            <h1>Todo 조회</h1>
        </header>
        <table cellspacing="0" cellpadding="0" class="table table-striped">
            <thead>
            <tr>
                <th scope="col"> <?php echo $views->id;?> 번 할일</th>
                <th scope="col">시작일 : <?php echo $views->created_on;?></th>
                <th scope="col">마감일 : <?php echo $views->due_date;?></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th colspan="3">
                    <?php echo $views->content;?>
                </th>

            </tr>
            </tbody>
            <tfoot>
            <th colspan="4"><a href="/ci/index.php/main/lists/" class="btn btn-primary" >목록</a>
            <a href="/ci/index.php/main/delete/<?php echo $this->uri->segment(3);?>" class="btn btn-danger">삭제</a>
            <a href="/ci/index.php/main/write" class="btn btn-success">쓰기</a> </th>
            </tfoot>
        </table>
    </article>
</div>
</body>
</html>
