<h2>Name : <span class="ttl"><?=$nme;?></span></h2>
<h2>Leave to apply: <span class="ttl"><?=$leave;?></span></h2>
<h3>From : <span class="ttl"><?=$from;?></span> To : <span class="ttl"><?=$to;?></span></h3>
<h2 class="ttle">Reason</h2>
<div id="reason">
<?=$reason;?>
</div>
<a href="#accept" class="g-button green <?=($st!=1)?' "onClick="toccept('.$lrid.')"':'disabled"';?> id="id_accpt">Accept</a>