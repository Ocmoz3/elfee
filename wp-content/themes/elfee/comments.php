<?php 
use Elfee\CommentsWalker;
?>
<?php
$count = absint(get_comments_number());
?>

<?php wp_list_comments([
    'style' => 'div',
    'walker' => new CommentsWalker()
]) ?>

<div class="div_comment_form">
    <?php if(comments_open()): ?>
    <?php comment_form([
        'title_reply' => 'Laissez votre commentaire',
    ]) ?>
    <?php endif; ?>
</div>
