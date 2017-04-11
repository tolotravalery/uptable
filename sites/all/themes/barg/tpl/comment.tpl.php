<?php
  $user = user_load($comment->uid); // Make sure the user object is fully loaded
  $display_name = field_get_items('user', $user, 'field_display_name');
?>

<div class="<?php if ($comment->pid == 0) {print 'answer';} else print 'reply';?>">
  <?php if($picture):?>
  <?php print strip_tags($picture,'<img>'); ?>
  <?php else: ?>
  <img src="<?php print base_path(); ?>sites/default/files/pictures/no_avt.png" class="img-comments" />
  <?php endif; ?>
  <div class="content-cmt">
    <span class="name-cmt"><?php if($display_name[0]['value'] != '') {print  $display_name[0]['value'] ;} else
        print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?></span>
    <span class="date-cmt"><?php print format_date($node->created, 'custom', 'F d, Y'); ?></span>
    <span><?php print strip_tags(render($content['links']),'<a>') ?></span>
    <p class="content-reply">
      <?php hide($content['links']); print render($content) ?>
    </p>
  </div>
</div>