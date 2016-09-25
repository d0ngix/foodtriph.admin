<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menus Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Vendors
 * @property \Cake\ORM\Association\HasMany $MenuImages
 * @property \Cake\ORM\Association\HasMany $MenuRatings
 * @property \Cake\ORM\Association\HasMany $TransactionItems
 * @property \Cake\ORM\Association\HasMany $TransactionPromos
 *
 * @method \App\Model\Entity\Menu get($primaryKey, $options = [])
 * @method \App\Model\Entity\Menu newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Menu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Menu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Menu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Menu[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Menu findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MenusTable extends Table
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

        $this->table('menus');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id'
        ]);
        $this->hasMany('MenuImages', [
            'foreignKey' => 'menu_id'
        ]);
        $this->hasMany('MenuRatings', [
            'foreignKey' => 'menu_id'
        ]);
        $this->hasMany('TransactionItems', [
            'foreignKey' => 'menu_id'
        ]);
        $this->hasMany('TransactionPromos', [
            'foreignKey' => 'menu_id'
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
            ->allowEmpty('ref');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('description_long');

        $validator
            ->allowEmpty('description_short');

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->decimal('discount')
            ->allowEmpty('discount');

        $validator
            ->allowEmpty('add_ons');

        $validator
            ->integer('pax_min')
            ->allowEmpty('pax_min');

        $validator
            ->integer('pax_max')
            ->allowEmpty('pax_max');

        $validator
            ->allowEmpty('active');

        $validator
            ->allowEmpty('deleted');

        $validator
            ->allowEmpty('likes');

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
