<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mode1.css">
    <script src="https://kit.fontawesome.com/2b41505858.js" crossorigin="anonymous"></script>
</head>
<body>
    <table class="page">
        <tr height="120px">
            <td colspan="2"></td>
        </tr>
        <tr>
            <td border="1" width="20%" valign="top">
                <div class="menu">
                    <table align="center"><tr><td><ul>.:: MENU ::.</ul></td></tr></table>
                    <li><i class="fa-solid fa-house-user"></i><a href="layout.php?file=home.php"><b>Home</b></a></li>
                    <li><i class="fa-regular fa-user"></i><a href="layout.php?file=profile.php"><b>Profile</b></a></li>
                    <li><b>Galeri</b></li>
                </div>
            </td>
            <td width="80%" valign="top" style="font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">
                <?php
                    if(!empty($_REQUEST['file'])){
                        include $_REQUEST['file'];
                    }else{

                        echo"ini adalah halaman utama";
                    }
                    if(!empty($_REQUEST['mode'])){
                        include $_REQUEST['mode'];
                    }
                ?>
            </td>
        </tr>
    </table>
    <li><a style="text-decoration: none;" href="layout.php?mode=mode1.css"><b>mode1</b></a></li>
</body>
</html>