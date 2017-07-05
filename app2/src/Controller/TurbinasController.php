<?php
/*TurbinasController
 */
namespace App\Controller;

class TurbinasController extends AppController
{

//Theme Plugin test?
// public function beforeRender(\Cake\Event\Event $event)
//    {
//        $this->viewBuilder()->theme('Test');
//    }

public $components = ['Flash'];

    public function index()
    {
	$this->set('turbinas', $this->Turbinas->find('all'));
    }

    public function view($id)
    {
        $turbinas = $this->Turbinas->get($id);
        $this->set(compact('turbinas'));
    }

    public function add()
    {
        $turbina = $this->Turbinas->newEntity();
	
        if ($this->request->is('post')) {
            $turbina = $this->Turbinas->patchEntity($turbina, $this->request->getData());
            if ($this->Turbinas->save($turbina)) {
                $this->Flash->success(__('Su Turbina a sido agregada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo agregar su turbina.'));
        }
        $this->set('turbinas', $turbina);
    }
	public function edit($id = null)
		{
    		$turbina = $this->Turbinas->get($id);
		
	    	if ($this->request->is(['post', 'put'])) {
	     		$this->Turbinas->patchEntity($turbina, $this->request->getData());
	        	if ($this->Turbinas->save($turbina)) {
	            		$this->Flash->success(__('Tu turbina ha sido editada.'));
	            	return $this->redirect(['action' => 'index']);
	        	}
        	$this->Flash->error(__('Tu turbina no se ha podido actualizar.'));
	    }	

	    $this->set('turbinas', $turbina);
	}
	public function delete($id)
	{
	    $this->request->allowMethod(['post', 'delete']);

	    $turbina = $this->Turbinas->get($id);
	    if ($this->Turbinas->delete($turbina)) {
	        $this->Flash->success(__('La turbina con id: {0} ha sido eliminado.', h($id)));
	    return $this->redirect(['action' => 'index']);
    }
}

}