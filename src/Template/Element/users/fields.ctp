<?php
     echo $this->Form->control('nombre');
     echo $this->Form->control('apellido');
     echo $this->Form->control('correo');
     // echo $this->Form->control('clave');
     echo $this->Form->input('password', ['label' => 'Clave', 'value' => '', 'name'=>'clave']);
     echo $this->Form->input('role', ['options' => ['admin'=>'Administrador', 'user' =>'usuario']  ]);
     echo $this->Form->control('activo');
     echo $this->Form->control('creado', ['empty' => false]);
     echo $this->Form->control('modificado', ['empty' => false]);
?>