<?php 
	$items = $block->persons()->toPages();
	//print_r($items);
?>
<?php if($items): ?>
<hr>

<?php if($block->heading()): ?>
<h2><?= $block->heading(); ?></h2>
<?php endif; ?>

<ul>
	<?php foreach($items as $item): ?>
		<li>
			<?= $item->title(); ?>
		</li>
	<?php endforeach; ?>
</ul>

<hr>
<?php endif; ?>
