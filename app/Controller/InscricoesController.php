<?php 

class InscricoesController extends AppController{
	public $uses = array('Inscricao');
	#public $components = array('');
	#public $helpers = array('');
	#public $layout = array('');

	public function inscrever(){
		if($this->request->is('post') && !empty($this->request->data)){
			if($this->Inscricao->save($this->request->data)){
				$this->redirect(array('controller'=>'pages','action'=>'display','sucesso'));
			}else{

			}
		}
	}

}

?>