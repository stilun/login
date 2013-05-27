<h2>Exempel på en gästbok</h2>
<p>En exempel på en gästbok i Lydia. Nu med att spara i databasen.</p>
<form action="<?=$formAction?>" method='post'>
  <p>
    <label>Meddelande: <br/>
    <textarea name='newEntry' cols='80' rows='4'></textarea></label>
  </p>
  <p>
    <input type='submit' name='doAdd' value='Skicka meddelandet' />
    <input type='submit' name='doClear' value='Ta bort alla meddelandena' />
    <input type='submit' name='doCreate' value='Skapa en databastabell' />
  </p>
</form>

<h3>Aktuella meddelanden:</h3>

<?php foreach($entries as $val):?>
<div style='background-color:#f6f6f6;border:1px solid #ccc;margin-bottom:1em;padding:1em;'>
  <p>Tid: <?=$val['created']?></p>
  <p><?=htmlent($val['entry'])?></p>
</div>
<?php endforeach;?>
<ul>
	<li><a href='<?=create_url('index')?>'>Go to Index Controller</a>
</ul>
