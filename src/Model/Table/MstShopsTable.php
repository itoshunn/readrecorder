<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MstShops Model
 *
 * @method \App\Model\Entity\MstShop get($primaryKey, $options = [])
 * @method \App\Model\Entity\MstShop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MstShop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MstShop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstShop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MstShop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MstShop findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MstShopsTable extends Table
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

        $this->table('mst_shops');
        $this->displayField('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('shop_name', 'create')
            ->notEmpty('shop_name');

        $validator
            ->allowEmpty('store_name');

        $validator
            ->integer('sort_order')
            ->allowEmpty('sort_order');

        $validator
            ->integer('created_user')
            ->allowEmpty('created_user');

        $validator
            ->integer('modified_user')
            ->allowEmpty('modified_user');

        return $validator;
    }
}
