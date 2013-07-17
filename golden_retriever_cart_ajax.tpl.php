<ul>
<?php foreach($content as $entry) {?>

	<li><?php echo $entry['amount']." * \"".$entry['title']."\" a ".$entry['price']." = ".$entry['sumprice'].l('entfernen','node/'.$entry['node']->nid.'/remove_from_cart',array('query'=>array('destination'=>$destination))) ?> </li>
<?php } ?>
</ul>
<?php if($showLink) { ?>
<?=l('Zur Kasse','checkout')?>
<?php } ?>