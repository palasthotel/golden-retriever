Wuff!

Da hat doch wer bestellt:
<?=$invoice_salutation?> <?=$invoice_name?>

<?=$invoice_street?>

<?=$invoice_zip?> <?=$invoice_city?>

<?=$invoice_country?>


und hier soll hingeliefert werden:
<?=$delivery_salutation?> <?=$delivery_name?>

<?=$delivery_street?>

<?=$delivery_zip?> <?=$delivery_city?>

<?=$invoice_country?>


und das wurde bestellt:
<?php
$sum=0;
foreach($content as $entry)
{
?>
<?=$entry['amount']?> * <?=$entry['title']?> zu <?=$entry['price']?> pro Stück = <?=$entry['sumprice']?>

<?
$sum+=$entry['sumprice'];
}
?>
Insgesamt sind das: <?=$sum?>.
Zuzüglich Versand.

So. Ich bin fertig.

Liebe Grüße
Golden Retriever

