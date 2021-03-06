<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); } ?>
<div class="module recent posts microposts">
	<h3><a href="<?php echo URL::get( 'display_microposts' ); ?>" title="See more"><?php echo $content->title; ?></a></h3>
	<a class="info" href="<?php echo URL::get( 'display_microposts' ); ?>" title="See more"><?php echo _t( 'More microposts' ); ?></a>
	<a class="feed" href="<?php echo $content->feed; ?>" title="Atom feed of latest microposts"><?php echo _t( 'Feed' ); ?></a>
	<ol class="items posts">
	<?php
	foreach( $content->posts as $post): ?>
		<li class="item">
			<span class="content"><?php echo $post->content_out; ?></span>
			<a class="permalink" href="<?php echo $post->permalink; ?>" title="<?php printf(_t('Posted at %1$s'), $post->pubdate->get('g:i a \o\n F jS, Y')); ?>"><?php echo $post->pubdate->get('M j @ G:i'); ?></a>
		</li>
	<?php endforeach; ?>
	</ol>
</div>