<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace Paper\Controller;

use App\Controller\AppController as StrangeController;

class AppController extends StrangeController
{

  /**
   * Initialize
   *
   * @return void
   */

  // public function initialize() {
  //     parent::initialize();
  // }

  /**
   * Before render callback.
   *
   * @param \Cake\Event\Event $event The beforeRender event.
   * @return \Cake\Http\Response|null|void
   */
   public function beforeFilter (\Cake\Event\Event $event) {

      // debug($this->Auth->user('role_id'));
      // if (!$this->Auth->user()) {
      // $this->Auth->config('authError', "Necesita Frosty!!!");
      // debug($this->Auth->config('authError'));
      // debug($this->Auth->config());
      // }
   } // End beforeFilter



}
