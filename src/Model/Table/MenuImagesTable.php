<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MenuImages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Menus
 *
 * @method \App\Model\Entity\MenuImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\MenuImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MenuImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MenuImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MenuImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MenuImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MenuImage findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MenuImagesTable extends Table
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

        $this->table('menu_images');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Menus', [
            'foreignKey' => 'menu_id',
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
            ->requirePresence('path', 'create')
            ->notEmpty('path');

        $validator
            ->integer('is_primary')
            ->allowEmpty('is_primary');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('extension');

        $validator
            ->allowEmpty('mime');

        $validator
            ->allowEmpty('size');

        $validator
            ->allowEmpty('md5');

        $validator
            ->allowEmpty('dimensions');

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
        $rules->add($rules->existsIn(['menu_id'], 'Menus'));

        return $rules;
    }
}
