<?php
    $title = "Home";
    $content = file_get_contents("Content Pages/index_text.php");
    include("master.php");
?>

<script type="text/javascript">
    setActive(document.getElementById('homeLink'));
</script>