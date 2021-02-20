<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title><?php echo $title ?> - My Portfolio</title>
    <script type="text/javascript">
        function setActive(selected){
            var menu = document.getElementById('menu');
            var menuItems = menu.getElementsByTagName('a');
            for(var i=0; i<menuItems.length; i++){
                menuItems[i].setAttribute('class', 'unselected');
            }

            selected.setAttribute('class', 'selected');
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            //Get the scroll button
            var scrollToTop = document.getElementById("scroll-to-top");
        
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTop.style.display = "block";
            } else {
                scrollToTop.style.display = "none";
            }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; //For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
</head>
<body>
    <div id="page">
        <div id="header">
            <span><img src="img/profile.jpg" alt="profile" id="profile" ></span>
            <br>
            <div id="menu">
                <a href="index.php" id='homeLink'>Home</a>
                <a href="contact.php" id='contactLink'>Contact</a>
            </div>
        </div>

        <div id="content">
            <?php echo $content ?>
        </div>
        <div id="footer"><span>&copy; Sotiris Sotiriou</span></div>
    </div>
    <span class="to-top-btn" id="scroll-to-top" onclick="topFunction();"><img src="img/to-top-page.png" alt="go to top of the page" width="20" height="20"></span>
</body>
</html>