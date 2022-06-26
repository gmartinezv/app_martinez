<div class="well">
<h2><?= $user->nombre . ' ' . $user->apellido ?></h2>
    <br>
    <dl>
        <dt>Nombre</dt>
        <dd>
            <?= $user->nombre ?>
            &nbsp;
        </dd>
        <br>

        <dt>Apellidos</dt>
        <dd>
            <?= $user->apellido ?>
            &nbsp;
        </dd>
        <br>

        <dt>Correo electrónico</dt>
        <dd>
            <?= $user->correo ?>
            &nbsp;
        </dd>
        <br>

        <dt>Habilitado</dt>
        <dd>
            <?= $user->activo ? 'SI' : 'NO' ?>
            &nbsp;
        </dd>
        <br>

        <dt>Creado</dt>
        <dd>
            <?= $user->creado->nice() ?>
            &nbsp;
        </dd>
        <br>

        <dt>Modificado</dt>
        <dd>
            <?= $user->modificado->nice() ?>
            &nbsp;
        </dd>
    </dl>
</div>