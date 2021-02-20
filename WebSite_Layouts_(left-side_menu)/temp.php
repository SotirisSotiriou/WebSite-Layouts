<div id="page">
    <table>
        <tr>
            <td colspan='2'>
                <div id="header">
                    <span><img src="img/profile.jpg" alt="profile" id="profile" ></span>
                    <br>
                    
                </div>
            </td>
        </tr>

        <tr>
            <td id="menu">
                <p style="text-align:center; border-bottom:rgb(79, 118, 177) solid 3px; margin:0; padding: 5px;">Menu</p>
                <p class="menuItem" onclick="window.location.href = 'index.php'">Home</p>
                <p class="menuItem" onclick="window.location.href = 'contact.php';">Contact</p>
            </td>
            <td>
                <div id="content"><?php echo $content ?></div>
            </td>
        </tr>

        <tr>
            <td colspan='2'>
                <footer><span>&copy; Sotiris Sotiriou</span></footer>
            </td>
        </tr>
    </table>
</div>