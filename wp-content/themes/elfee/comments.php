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


<?php //if($count > 0): ?>
<!-- <h2><? //echo $count ?> Commentaire<? //echo $count > 1 ? 's': ''?></h2> -->
<?php //else: ?>
<div class="div_comment_form">
    <?php //endif; ?>

    <?php if(comments_open()): ?>
    <?php comment_form([
        'title_reply' => 'Laissez votre commentaire',
        // $fields['author'] => '<div class="mb-3" style="border: 2px solid red;"><label for="author">Auteur</label>
        // <input id="author" name="author" class="form-control" type="text" value="" size="30"/>'.
        // '<p id="d1" class="text-danger"></p></div>',
    ]) ?>
    <?php endif; ?>
</div>
<?php
// $comments_arg = array(
// 		'form'	=> array(
// 			'class' => 'form-horizontal'
// 			),
// 		'fields' => apply_filters( 'comment_form_default_fields', array(
// 				'autor' 				=> '<div class="mb-3">' . '<label for="author">' . __( 'Name', 'wp_babobski' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
// 										'<input id="author" name="author" class="form-control" type="text" value="" size="30"' . $aria_req . ' />'.
// 										'<p id="d1" class="text-danger"></p>' . '</div>')),
// 				'email'					=> '<div class="mb-3">' .'<label for="email">' . __( 'Email', 'wp_babobski' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
// 										'<input id="email" name="email" class="form-control" type="text" value="" size="30"' . $aria_req . ' />'.
// 										'<p id="d2" class="text-danger"></p>' . '</div>',
// 				'url'					=> '',
			// 	'comment_field'			=> '<div class="mb-3">' . '<label for="comment">' . __( 'Comment', 'wp_babobski' ) . '</label><span>*</span>' .
			// 						'<textarea id="comment" class="form-control" name="comment" rows="3" aria-required="true"></textarea><p id="d3" class="text-danger"></p>' . '</div>',
			// 	'comment_notes_after' 	=> '',
			// 'class_submit'			=> 'btn btn-primary'
			// ); ?>
	<!-- <?php //comment_form($comments_arg);
// echo str_replace('class="comment-form"','class="comment-form" name="commentForm" onsubmit="return validateForm();"',ob_get_clean());
?> -->
<!-- <script>jQuey('#email').removeAttr('required');​​​​​</script> -->
