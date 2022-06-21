<head>

    <link rel="stylesheet" href="style/playerv2.css">
    <meta name="referrer" content="no-referrer">
</head>
<body>
<div class="head">
    <ul>
        <li style="font-size:9px"> AnimeHub</li>
    </ul>
</div>

<div class="player_top">
    <div class="bangumi_id">
        <?php
        @$bid = $_GET[bid];
        @$vid = $_GET[vid];
        @$name = $_GET[name];
        @$src = $_GET[imglinks];
        @$listname = $_GET[listname];
        echo "   <title>$name:$listname</title>\n";
            echo "<p class=\"video_class\">$vid</p>\n";
            echo "       <p class=\"bangumi_name\">$name:$listname</p>\n";

        ?>


    </div>

    <?php
    echo "<div class=\"player\"><video width=\"100%\"  src=\"$src\" controls> 您的浏览器不支持 video 标签。 </video></div>\n";
    ?>

    <div class="bangumi_pod">
        <p class="pod_flag">选集</p>
        <?php
        $bid = @$_GET[bid];
        $listsql = "SELECT*FROM videolist WHERE bid=$bid";
        $con = mysqli_connect('localhost','root','','bangumi','3306')or die('error');{
        $sql = "SELECT*FROM videolist WHERE bid=$bid";
        foreach (mysqli_query($con,$sql) as $row){

            echo "<a class=\"bangumi_podlist\" href=\"video.php?bid=$bid&vid={$row['vid']}&name=$name&imglinks={$row['imglinks']}&listname={$row['name']}\">{$row['name']}</a>\n";

        }
        }

        ?>
    </div>
</div>
</body>