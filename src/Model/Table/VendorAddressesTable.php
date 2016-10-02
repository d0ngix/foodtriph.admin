<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VendorAddresses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Vendors
 *
 * @method \App\Model\Entity\VendorAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\VendorAddress newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VendorAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VendorAddress|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VendorAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VendorAddress[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VendorAddress findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VendorAddressesTable extends Table
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

        $this->table('vendor_addresses');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('address_name');

        $validator
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->allowEmpty('address1');

        $validator
            ->allowEmpty('address2');

        $validator
            ->allowEmpty('street');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('state');

        $validator
            ->allowEmpty('country');

        $validator
            ->allowEmpty('post_code');

        $validator
            ->allowEmpty('landmarks');

        $validator
            ->allowEmpty('operating_hours');

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
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));

        return $rules;
    }
}
