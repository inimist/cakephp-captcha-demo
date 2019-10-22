<?php
namespace CaptchaDemo\Controller;

use CaptchaDemo\Controller\AppController;

/**
 * Demo Controller
 *
 *
 * @method \CaptchaDemo\Model\Entity\Demo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemoController extends AppController
{
    public function initialize()
    {
        parent::initialize();
		$this->loadComponent('Captcha.Captcha');
	}
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $demo = $this->paginate($this->Demo);

        $this->set(compact('demo'));
    }
    public function image()
    {
        $demo = $this->Demo->newEntity();
        if($this->request->is('post')) {
			$this->Demo->setCaptcha('Captcha', $this->Captcha->getCode('Captcha'));
			$demo = $this->Demo->newEntity($this->request->getData());
			if ($demo->getErrors()) {
				$this->Flash->error(__('Validation failed.'));
			}	else	{
				$this->Flash->success(__('Validation success.'));
			}
		}
        $this->set(compact('demo'));
    }
    public function recaptcha()
    {
        $demo = $this->Demo->newEntity();
        if($this->request->is('post')) {
			//$this->Demo->setCaptcha('Captcha', $this->Captcha->getCode('Captcha'));
			$demo = $this->Demo->newEntity($this->request->getData());
			if ($demo->getErrors()) {
				$this->Flash->error(__('Validation failed.'));
			}	else	{
				$this->Flash->success(__('Validation success.'));
			}
		}
        $this->set(compact('demo'));
    }
    public function math()
    {
		$demo = $this->Demo->newEntity();
		if($this->request->is('post')) {
			$this->Demo->setCaptcha('Captcha', $this->Captcha->getCode('Captcha'));
			$demo = $this->Demo->newEntity($this->request->getData());
			if ($demo->getErrors()) {
				$this->Flash->error(__('Validation failed.'));
			}	else	{
				$this->Flash->success(__('Validation success.'));
			}
		}
		$this->set(compact('demo'));
		$this->set('_serialize', ['demo']);
    }
}
