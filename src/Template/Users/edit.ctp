<div class="row">
    <div class="col-md-6 col-md-offset-3" style='margin-bottom:50px'>
    
  
    	<div class="page-header">
    		<h2>Editar usuario</h2>
    	</div>
        <?= $this->Form->create($user, ['novalidate']) ?>
        <fieldset>
			<?= $this->element('users/fields') ?>
        </fieldset>
        <?= $this->Form->button('Modificar',  ['class' => 'btn-primary']);     ?>
        <?= $this->Form->end() ?>

    </div>
</div>