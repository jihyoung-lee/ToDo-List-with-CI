
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
            <li><a rel="external" href="/ci/index.php/main/lists/">Todo List</a> </li>
        </ul>
    </nav>
    <article id="board_area">
        <header>
            <h1>Todo 입력하기</h1>
        </header>
<form class="form" method="post" action="" id="write_action">
    <!-- action의 주소가 비어있는 이유는 현재 뷰를 호출한 주소로 내용을 자동으로 전송해주기때문이다-->
    <fieldset>
        <div class="form-group">
            <label for="content">내용</label>
            <input type="text" class="form-control" id="input01" name="content" placeholder="내용을 입력하세요">
        </div>
        <div class="form-group">
            <label for="start-time">시작일</label>
            <input type="date" class="form-control" id="input02" name="created_on">
        </div>
        <div class="form-group">
            <label for="finish-time">종료일</label>
            <input type="date" class="form-control" id="input03" name="due_date">
        </div>

            <th colspan="4">
                <input type="submit" class="btn btn-success" value="작성">
                <a href="/ci/index.php/main/lists/" class="btn btn-primary" >목록</a></th>

    </fieldset>
</form>
    </article>
</div>
</body>
</html>