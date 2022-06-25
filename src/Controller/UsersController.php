<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{

    public function index(){

        // $users = $this->Users->find('all');
        // $users = $this->paginate($this->Users);
        $users = $this->paginate($this->Users, ['limit'=> '3']);
         $this->set('users', $users);
    }

    public function view($nombre){

        echo 'Detalles de usuarios: '  . $nombre;
        exit();


    }

    public function add(){
         $user = $this->Users->newEntity();
         
         if ($this->request->is('post')){
            //  debug($this->request->data );
            $user = $this->Users->patchEntity($user,  $this->request->data );
            if ($this->Users->save($user)){
                $this->Flash->success('El usuario fue creado exitosamente');
                return $this->redirect(['controler'=> 'Users','action' => 'index']);                
            }else{
                $this->Flash->error('hubo un error  usuario no fue creado.');
            }

         }


         $this->set(compact('user'));                
    }

}
