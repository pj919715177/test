<html>
<head>
    <title>新闻管理</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        function deleteNews(id) {
            var xmlhttp;
            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    alert(xmlhttp.responseText);
                    window.location.reload(true);
                }
            }
            xmlhttp.open("POST", "<?php echo $this->createUrl('news/deleteNews') . '&id='?>" + id);
            xmlhttp.send();
        }
        function showHint(str) {
            var xmlhttp;
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "gethint.asp?q=" + str, true);
            xmlhttp.send();
        }
    </script>

</head>

<body>
<center><h2>新闻列表</h2></center>
<a href="<?php echo $this->createUrl('news/upload') ?>" class="btn">上传新闻</a>
<table class="table table-striped table-bordered table-hover table-condensed" style="margin-left: 5px;">
    <tr>
        <th>标题</th>
        <th>摘要</th>
        <th>上传时间</th>
        <th>操作</th>
    </tr>
    <?php foreach ($datas as $data) { ?>
        <tr>
            <td><?php echo $data->title ?></td>
            <td><?php echo $data->digest ?></td>
            <td><?php echo $data->uploadTime ?></td>
            <td>
                <a href="<?php echo $this->createUrl('site/detail', array('id' => $data->id)) ?>" class="btn">查看</a>
                <a href="<?php echo $this->createUrl('news/update', array('id' => $data->id)) ?>" class="btn">修改</a>
                <button onclick="deleteNews('<?php echo $data->id ?>')" class="btn">删除</button>
            </td>
        </tr>
    <?php } ?>
</table>
</body>