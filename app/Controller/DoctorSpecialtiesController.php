<?php
App::uses('AppController', 'Controller');
/**
 * DoctorSpecialties Controller
 *
 * @property DoctorSpecialty $DoctorSpecialty
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DoctorSpecialtiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

}
