<?php if (empty($next_content_class)) {
    $next_content_class = '';
} ?>
<div class="next_content">
    <div class="next_content_box">
        <a href=<?php echo($next_content_class)?>>
            <p>
                <?php
                if (empty($next_content)) $next_content = 'View Next';
                echo $next_content;
                ?>
            </p>
            <div>
                <img src="/Icons/Arrow1.svg" class="arrow_icon">
                <img src="/Icons/Arrow1.svg" class="arrow_icon">
                <img src="/Icons/Arrow1.svg" class="arrow_icon">
            </div>
        </a>
    </div>
</div>