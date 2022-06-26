<h2>   Bienvenidos !!! CakePHP 3</h2>
<h3>Bienvenido <?= $this->Html->link($current_user['nombre'] . ' ' . $current_user['apellido'], ['controller' => 'Users', 'action' => 'view', $current_user['id']]) ?></h3>
