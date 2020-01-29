<?php

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Please do not load this page directly. Thanks!');
}

if (post_password_required()) {
    ?>
<p><?php _e('This post is password protected. Enter the password to view comments.', 'clouding'); ?>
</p> <?php
    return;
}
    
if (comments_open()) : ?>
<div class="section respond">
  <?php

            $args = array(
                    'fields' => apply_filters(
                        'comment_form_default_fields',
                        array(
                                                                        'author' => '' .
                                                                                        // '<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />'.
                                                                                        //         '<label for="author">' . __('Your Name') . '</label> ' .
                                                                                        //         ($req ? '<span class="required">*</span>' : '')  .
                                                                                        // 				'</p>'.
                                                                                        '<div id="comment-author" class="form-input form-input--dark-background">' .
                                                                                        '  <img class="form-input__icon" src="' . get_template_directory_uri() . '/images/lock-icon.svg" alt="lock icon">' .
                                                                                        '  <input type="text" class="form-input__element" placeholder="Nombre y Apellidos*"' .
                                                                                        '    name="author" value="' . esc_attr($commenter['comment_author']) . '" />' .
                                                                                        '  <div class="form-input__right-padding"></div>' .
                                                                                        '  <div class="form-input__bottom-border"></div>' .
                                                                                        '</div>',

                                                                        'email'  => ''.
                                                                                // '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                                            // '" size="30"' . $aria_req . ' />'  .
                                            // '<label for="email">' . __('Your Email') . '</label> ' .
                                            // ($req ? '<span class="required">*</span>' : '') .
                                                                                        // '</p>',

                                                                                        '<div id="comment-email" class="form-input form-input--dark-background">' .
                                                                                        '  <img class="form-input__icon" src="' . get_template_directory_uri() . '/images/mail-icon.svg" alt="mail icon">' .
                                                                                        '  <input type="text" class="form-input__element" placeholder="Correo electrónico*"' .
                                                                                        '    name="author" value="' . esc_attr($commenter['comment_author_email']) . '" />' .
                                                                                        '  <div class="form-input__right-padding"></div>' .
                                                                                        '  <div class="form-input__bottom-border"></div>' .
                                                                                        '</div>'
                            )
                    ),
                    'comment_field' => ''.
                            '<div id="comment-textarea" class="form-textarea form-textarea--dark-background">'.
                            '  <textarea class="form-textarea__element" placeholder="Comentario*:" name="comment"></textarea>'.
                            '</div>',
                    'class_submit' => 'button button--orange',
                    'id_submit' => 'comment-submit-button',
                    'label_submit' => 'Evía tu consulta',
                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</h2>',
            );


         comment_form($args); ?>
</div>
<?php else : ?>
<?php if (is_singular(array( 'post' ))) : ?>
<p><?php _e('Comments are closed.', 'clouding'); ?>
</p>
<?php endif; ?>
<?php endif;

function theme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>

<div class="commentlist-item">
  <div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <div class="commentlist-holder">
      <p class="meta">
        <span class="author"><?php comment_author_link(); ?></span>
        <a class="date"
          href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
          <?php comment_date('F d, Y'); ?>
        </a>
      </p>
      <?php if ($comment->comment_approved == '0') : ?>
      <p><?php _e('Your comment is awaiting moderation.', 'clouding'); ?>
      </p>
      <?php else : ?>
      <div class="text"><?php comment_text(); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php
}
    
    function theme_comment_end() { ?>
</div>
<?php }
?>

<?php if (have_comments()) : ?>
<div class="section comments" id="comments">
  <h2><?php comments_number(__('No Responses', 'clouding'), __('One Response', 'clouding'), __('% Responses', 'clouding'));?>
  </h2>
  <div class="commentlist">
    <?php wp_list_comments(array(
                'callback'     => 'theme_comment',
                'end-callback' => 'theme_comment_end',
                'style'        => 'div',
            )); ?>
  </div>
  <div class="navigation">
    <div class="next"><?php previous_comments_link(__('&laquo; Older Comments', 'clouding')) ?>
    </div>
    <div class="prev"><?php next_comments_link(__('Newer Comments &raquo;', 'clouding')) ?>
    </div>
  </div>
</div>
<?php endif;
