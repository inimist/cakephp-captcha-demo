<?php
namespace CaptchaDemo\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Demo Model
 *
 * @method \CaptchaDemo\Model\Entity\Demo get($primaryKey, $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo newEntity($data = null, array $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo[] newEntities(array $data, array $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo[] patchEntities($entities, array $data, array $options = [])
 * @method \CaptchaDemo\Model\Entity\Demo findOrCreate($search, callable $callback = null, $options = [])
 */
class DemoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('_inimist_captcha_demo');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

		$this->addBehavior('Captcha.Captcha', ['field'=>'Captcha', 'secret'=>'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
