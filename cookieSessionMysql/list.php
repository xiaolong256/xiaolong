<?php require_once 'autoload.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>列表页</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php
$link = new DB();
$conn = $link->conn();
$sql = "SELECT * FROM user;";
$result = mysqli_query($conn,$sql);
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 text-center">
<table class="table table-hover ">
    <thead>
    <tr>
        <th>用户id</th>
        <th>用户姓名</th>
        <th>用户性别</th>
    </tr>
    </thead>
    <tbody>
    <?php while($res = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>" . $res['id'] . "</td>
            <td>" . $res['username'] . "</td>
            <td>" . $res['sex'] . "</td>
        </tr>";

    }; ?>
    </tbody>
</table>
    </div>
</div>
<div class="col-lg-12 text-center">
<a href="logout.php" class="btn btn-danger">退出登录</a>
</div>
</body>
</html>