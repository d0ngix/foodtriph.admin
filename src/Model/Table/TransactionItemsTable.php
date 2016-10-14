<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TransactionItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Transactions
 * @property \Cake\ORM\Association\BelongsTo $Menus
 *
 * @method \App\Model\Entity\TransactionItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\TransactionItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TransactionItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TransactionItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TransactionItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TransactionItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TransactionItem findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */class TransactionItemsTable extends Table
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

        $this->table('transaction_items');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Transactions', [
            'foreignKey' => 'transaction_id'
        ]);
        $this->belongsTo('Menus', [
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
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->allowEmpty('ref');
        $validator
            ->allowEmpty('menu_name');
        $validator
            ->integer('qty')            ->allowEmpty('qty');
        $validator
            ->decimal('price')            ->allowEmpty('price');
        $validator
            ->decimal('discount')            ->allowEmpty('discount');
        $validator
            ->decimal('total_amount')            ->allowEmpty('total_amount');
        $validator
            ->allowEmpty('add_ons');
        $validator
            ->allowEmpty('remarks');
        $validator
            ->allowEmpty('status');
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
        $rules->add($rules->existsIn(['transaction_id'], 'Transactions'));
        $rules->add($rules->existsIn(['menu_id'], 'Menus'));

        return $rules;
    }
}
