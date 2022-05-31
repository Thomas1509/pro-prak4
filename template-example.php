<?php
/* 
 * Template Name: Example Template 
*/
$title = get_the_title();
$content = get_the_content();

?>

<body>
    <h1 class="title"><?php echo $title ?></h1>
    <div>
        <p><?php echo $content?></p>
    </div>
</body>