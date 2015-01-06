<?php if(!r::ajax()) {snippet('header');} ?>
<div id="main-content" class="container main-content toggle-carousel">
		<button type="button" class="btn btn-default template pull-right"><?php echo l::get('ansicht'); ?></button>
			<h2><a href="<?php echo $page->parent()->url()?>"><span class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span></span></a><span><?php echo $page->title()->html(); ?></span></h2>
			<div class="container instructions">	
				<?php
					if(cookie::get('view') == 'carousel') { 
						snippet('carousel', array('images' => $images, 'count' => $count, 'instructions' => $instructions));
					}
					else {
						snippet('list');
					} ?>	
			</div>
		<a class="to-top" href="#main-content"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('totop'); ?></span></a>		
</div>
<?php snippet('footer'); ?>