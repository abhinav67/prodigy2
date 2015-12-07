<?php
App::uses('AppController', 'Controller');
/**
 * QualityReports Controller
 *
 * @property QualityReport $QualityReport
 * @property PaginatorComponent $Paginator
 */
class QualityReportsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); 
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->QualityReport->recursive = 0;
		$this->set('qualityReports', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QualityReport->exists($id)) {
			throw new NotFoundException(__('Invalid quality report'));
		}
		$options = array('conditions' => array('QualityReport.' . $this->QualityReport->primaryKey => $id));
		$this->set('qualityReport', $this->QualityReport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function email($id){
	
	App::uses('CakeEmail', 'Network/Email');

	$Email = new CakeEmail(); 
  	$name1=$this->QualityReport->findById($id);
  	     
   $Email->from(array( 'info@prodigynumbers.com'=>'info@prodigynumbers.com'))
    ->to($name1['QualityReport']['to'])
    ->subject($name1['QualityReport']['subject'])
 	->send($name1['QualityReport']['content']);
     $this->Session->setFlash(__('Email has been sent'));
		return $this->redirect(array('action' => 'index'));
   

		
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->QualityReport->create();
			if ($this->QualityReport->save($this->request->data)) {
				$this->Session->setFlash(__('The quality report has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quality report could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QualityReport->exists($id)) {
			throw new NotFoundException(__('Invalid quality report'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QualityReport->save($this->request->data)) {
				$this->Session->setFlash(__('The quality report has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quality report could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('QualityReport.' . $this->QualityReport->primaryKey => $id));
			$this->request->data = $this->QualityReport->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QualityReport->id = $id;
		if (!$this->QualityReport->exists()) {
			throw new NotFoundException(__('Invalid quality report'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->QualityReport->delete()) {
			$this->Session->setFlash(__('The quality report has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The quality report could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}