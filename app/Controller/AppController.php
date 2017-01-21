<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('RequestHandler', 'Acl',
    'Auth' => array(
        'authorize' => array(
            'Actions' => array('actionPath' => 'controllers')
        )
    ),
    'Session');
    public function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->loginAction = array(
          'controller' => 'users',
          'action' => 'login'
        );
        $this->Auth->logoutRedirect = array(
          'controller' => 'users',
          'action' => 'login'
        );
        $this->Auth->loginRedirect = array(
          'controller' => 'pages',
          'action' => 'home'
        );
        $this->set('current_user', $this->Auth->user());
        $this->Auth->allow('display');
    }

     public $uses = array('Post');
     public $theme = "CakeAdminLTE";

     public function backup($tables = '*') {

            $return = '';

            $modelName = $this->modelClass;

            $dataSource = $this->{$modelName}->getDataSource();
            $databaseName = $dataSource->getSchemaName();


            // Do a short header
            $return .= '-- Database: `' . $databaseName . '`' . "\n";
            $return .= '-- Generation time: ' . date('D jS M Y H:i:s') . "\n\n\n";


            if ($tables == '*') {
                $tables = array();
                $result = $this->{$modelName}->query('SHOW TABLES');
                foreach($result as $resultKey => $resultValue){
                    $tables[] = current($resultValue['TABLE_NAMES']);
                }
            } else {
                $tables = is_array($tables) ? $tables : explode(',', $tables);
            }

            // Run through all the tables
            foreach ($tables as $table) {
                $tableData = $this->{$modelName}->query('SELECT * FROM ' . $table);

                $return .= 'DROP TABLE IF EXISTS ' . $table . ';';
                $createTableResult = $this->{$modelName}->query('SHOW CREATE TABLE ' . $table);
                $createTableEntry = current(current($createTableResult));
                $return .= "\n\n" . $createTableEntry['Create Table'] . ";\n\n";

                // Output the table data
                foreach($tableData as $tableDataIndex => $tableDataDetails) {

                    $return .= 'INSERT INTO ' . $table . ' VALUES(';

                    foreach($tableDataDetails[$table] as $dataKey => $dataValue) {

                        if(is_null($dataValue)){
                            $escapedDataValue = 'NULL';
                        }
                        else {
                            // Convert the encoding
                            $escapedDataValue = mb_convert_encoding( $dataValue, "UTF-8", "ISO-8859-1" );

                            // Escape any apostrophes using the datasource of the model.
                            $escapedDataValue = $this->{$modelName}->getDataSource()->value($escapedDataValue);
                        }

                        $tableDataDetails[$table][$dataKey] = $escapedDataValue;
                    }
                    $return .= implode(',', $tableDataDetails[$table]);

                    $return .= ");\n";
                }

                $return .= "\n\n\n";
            }

            // Set the default file name
            $fileName = $databaseName . '-backup-' . date('Y-m-d_H-i-s') . '.sql';

            // Serve the file as a download
            $this->autoRender = false;
            $this->response->type('Content-Type: text/x-sql');
            $this->response->download($fileName);
            $this->response->body($return);
        }

}
