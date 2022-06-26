<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $clave
 * @property string $role
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $creado
 * @property \Cake\I18n\FrozenTime $modificado
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'apellido' => true,
        'correo' => true,
        'clave' => true,
        'role' => true,
        'activo' => true,
        'creado' => true,
        'modificado' => true,
    ];

    protected function _setClave($value)
    {
        if (!empty($value))
        {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
        else
        {
            $id_user = $this->_properties['id'];
            $user = TableRegistry::get('Users')->recoverPassword($id_user);
            return $user;
        } 
    }

}
