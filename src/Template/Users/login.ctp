<?= $this->Html->css('login') ?>

<div class="container">

<div class="row justify-content-center">
<div class="col-md-9 col-lg-6">
               
<div class="panel panel-primary">
  <div class="panel-heading">Entrada al Sistema</div>
  <div class="panel-body bg-warning">


<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <?= $this->Flash->render('auth') ?>
		<?= $this->Form->create() ?>
			<fieldset>
				<h3>Ingrese sus datos </h3>
			 
				<div class="form-group">
                    <?= $this->Form->input('correo', ['class' => 'form-control input-lg', 'placeholder' => 'Correo', 'label' => false, 'required']) ?>
				</div>
				<div class="form-group">
                    <?= $this->Form->input('clave', ['class' => 'form-control input-lg', 'placeholder' => 'Clave', 'label' => false, 'required', 'name'=> 'clave', 'type' => 'password']) ?>
				</div>
				<div class="form-group">
                    <!-- ?= $this->Form->input('clave', ['class' => 'form-control input-lg', 'placeholder' => 'Clave', 'label' => false, 'required', 'name'=> 'clave']) ?>
					<!--   3453456464356   -->
				</div>

				 
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Form->button('Entrar', ['class' => 'btn btn-lg btn-success btn-block']) ?>
					</div>
					<!-- 
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-lg btn-primary btn-block']) ?>
					</div>
					--> 
				</div>
			</fieldset>
		<?= $this->Form->end() ?>
	</div>
</div>

</div>

</div>
</div>
 
</div>
</div>
 