<html lang="en" length="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php echo $title ?> - My Portfolio</title>
    <script src="javascript/master.js"></script>
</head>
<body id="top">
    <div id="page">
        <table height="100%">
            <tr style="padding:0;">
                <td style="width:15%" class="top-elements-col">
                    <img src="img/profile.jpg" alt="profile picture" id="profile">
                    <ul id="menu">
                        <li><a href="home.php" class="menu-item" id="HomeLink"><span class="menu-label"><i class="fa fa-home"></i> Home</span></a></li>
                        <li><a href="contact.php" class="menu-item" id="ContactLink"><span class="menu-label">&#9990; Contact</span></a></li>
                    </ul>
                </td>
                <td class="top-elements-col">
                    <div id="content">
                        <?php echo $content ?>
                    </div>
                    
                    <div id="footer">&copy; Sotiriou Sotiris</div>
                </td>
            </tr>

        </table>
        <span class="to-top-btn" id="scroll-to-top" onclick="topFunction();"><img src="img/to-top-page.png" alt="go to top of the page" width="20" height="20"></span>

    </div>
</body>
</html>

