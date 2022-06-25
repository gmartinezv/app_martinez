<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {

        $table = $this->table("users");
        $table->addColumn("nombre", 'string', array('limit'=>100))
              ->addColumn("apellido", 'string', array('limit'=>100))
              ->addColumn("correo", 'string', array('limit'=>100))
              ->addColumn("clave", 'string')
              ->addColumn("role", 'enum', array('values'=>'admin,user'))
              ->addColumn("activo", 'boolean')
              ->addColumn("creado", 'datetime')
              ->addColumn("modificado", 'datetime')
              ->create();



    }
}
