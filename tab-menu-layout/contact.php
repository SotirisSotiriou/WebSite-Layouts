<?php
    $title = "Contact";
    $content = file_get_contents("Content Pages/contact_text.php");
    include("master.php");
?>

<script type="text/javascript">
    setActive(document.getElementById('contactLink'));
</script>