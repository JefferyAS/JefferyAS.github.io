<div class="header_background">
    <?php
    $header_color = "white";
    include($mainPath . "header.php");
    ?>
    <div class="scroll_content" id="scroll_content"></div>
    <div class="project_title_holder title_holder">
        <div class="project_title_underline"></div>
        <h1 class="title">
            <?php
            if (empty($project_title)) $title = '';
            echo $project_title;
            ?>
        </h1>
        <div class="project_title_underline"></div>
    </div>
    <?php include($mainPath . "back_button.php") ?>
</div>
<script>
    $(document).ready(function() {
        var content = $('#scroll_content');
        var contentHeight = content.height();
        var contentInsideHeight = $('h2').height();

        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            content.height(contentHeight - scrollTop);
        });
    });
</script>