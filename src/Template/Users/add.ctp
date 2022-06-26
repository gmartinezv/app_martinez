<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Crear Usuario ') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('correo');
            echo $this->Form->control('clave');
            echo $this->Form->input('role', ['options' => ['admin'=>'Administrador', 'user' =>'usuario']  ]);
            echo $this->Form->control('activo');
            echo $this->Form->control('creado', ['empty' => false]);
            echo $this->Form->control('modificado', ['empty' => false]);
             
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
