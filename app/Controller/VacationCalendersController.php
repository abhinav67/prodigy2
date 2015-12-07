<?php
App::uses('AppController', 'Controller');
/**
 * VacationCalenders Controller
 *
 * @property VacationCalender $VacationCalender
 * @property PaginatorComponent $Paginator
 */
class VacationCalendersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VacationCalender->recursive = 0;
		$this->set('vacationCalenders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VacationCalender->exists($id)) {
			throw new NotFoundException(__('Invalid vacation calender'));
		}
		$options = array('conditions' => array('VacationCalender.' . $this->VacationCalender->primaryKey => $id));
		$this->set('vacationCalender', $this->VacationCalender->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
				$this->VacationCalender->create();
				$this->loadModel('Employee');
	            $adios=$this->Employee->find('all',array('conditions'=>array('Employee.id'=>$this->request->data['VacationCalender']['employee_id'])));
	            $this->set('adios',$adios);

	            foreach($adios as $adi){
               $td=   $adi['Employee']['termination_date'];
           }
			$vf=$this->request->data['VacationCalender']['vacation_from'];
			$vt=$this->request->data['VacationCalender']['vacation_to'];
				
				if($vf > $vt)
				{
                  $this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				}
				else if($vf > $td){
				   $this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				} 
				else if($vt > $td){
				   $this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				}
				else if($this->VacationCalender->save($this->request->data)) {
                $this->Session->setFlash(__('The vacation calender has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
				 }else {
				$this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$employees = $this->VacationCalender->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function edit($id = null) {
		if (!$this->VacationCalender->exists($id)) {
			throw new NotFoundException(__('Invalid vacation calender'));
		}
		if ($this->request->is(array('post', 'put'))) {
		
			$this->VacationCalender->create();
				$this->loadModel('Employee');
	            $adios=$this->Employee->find('all',array('conditions'=>array('Employee.id'=>$this->request->data['VacationCalender']['employee_id'])));
	            $this->set('adios',$adios);

	            foreach($adios as $adi){
               $td=   $adi['Employee']['termination_date'];
           }
           //pr($td);
			$vf=$this->request->data['VacationCalender']['vacation_from'];
			if($vf >= $td)
				{
                  $this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				} else if($this->VacationCalender->save($this->request->data)) {
                $this->Session->setFlash(__('The vacation calender has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
				 }else {
				$this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('VacationCalender.' . $this->VacationCalender->primaryKey => $id));
			$this->request->data = $this->VacationCalender->find('first', $options);
		}
		$employees = $this->VacationCalender->Employee->find('list');
		$this->set(compact('employees'));
	}*/
	public function edit($id = null) {
		if (!$this->VacationCalender->exists($id)) {
			throw new NotFoundException(__('Invalid vacation calender'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->loadModel('Employee');
	            $adios=$this->Employee->find('all',array('conditions'=>array('Employee.id'=>$this->request->data['VacationCalender']['employee_id'])));
	            $this->set('adios',$adios);

	             foreach($adios as $adi){
               $td=   $adi['Employee']['termination_date'];
           }
            $vf=$this->request->data['VacationCalender']['vacation_from'];
			$vt=$this->request->data['VacationCalender']['vacation_to'];

			if($vf > $vt)
			{
				$this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
			else if($vf > $td)
			{
				$this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
			else if($vt > $td)
			{
				$this->Session->setFlash(__('The vacation calender could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));	
			}
			else if ($this->VacationCalender->save($this->request->data)) {
				$this->Session->setFlash(__('The vacation calender has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} 
		} else {
			$options = array('conditions' => array('VacationCalender.' . $this->VacationCalender->primaryKey => $id));
			$this->request->data = $this->VacationCalender->find('first', $options);
		}
		$employees = $this->VacationCalender->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->VacationCalender->id = $id;
		if (!$this->VacationCalender->exists()) {
			throw new NotFoundException(__('Invalid vacation calender'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VacationCalender->delete()) {
			$this->Session->setFlash(__('The vacation calender has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vacation calender could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}