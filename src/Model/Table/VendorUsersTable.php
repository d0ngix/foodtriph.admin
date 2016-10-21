<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VendorUsers Model
 *
 * @method \App\Model\Entity\VendorUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\VendorUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VendorUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VendorUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VendorUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VendorUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VendorUser findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */class VendorUsersTable extends Table
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

        $this->table('vendor_users');
        $this->displayField('first_name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->allowEmpty('uuid')            ->add('uuid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
        $validator
            ->email('email')            ->requirePresence('email', 'create')            ->notEmpty('email')            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
        $validator
            ->requirePresence('password', 'create')            ->notEmpty('password');
        $validator
            ->requirePresence('hash', 'create')            ->notEmpty('hash');
        $validator
            ->allowEmpty('first_name');
        $validator
            ->allowEmpty('last_name');
        $validator
            ->allowEmpty('gender');
        $validator
            ->date('birth_date')            ->allowEmpty('birth_date');
        $validator
            ->allowEmpty('mobile');
        $validator
            ->allowEmpty('photo');
        $validator
            ->allowEmpty('social_media');
        $validator
            ->requirePresence('device_details', 'create')            ->notEmpty('device_details');
        $validator
            ->allowEmpty('verified');
        $validator
            ->allowEmpty('active');
        $validator
            ->allowEmpty('verification_details');
        
        $validator
	        ->notEmpty('email', 'A username is required')
	        ->notEmpty('password', 'A password is required');
//	        ->notEmpty('role', 'A role is required')
// 	        ->add('role', 'inList', [
//         		'rule' => ['inList', ['admin', 'author']],
//         		'message' => 'Please enter a valid role'
//        		]);
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
        $rules->add($rules->isUnique(['uuid']));

        return $rules;
    }
}
