<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MstBooks Model
 *
 * @method \App\Model\Entity\MstBook get($primaryKey, $options = [])
 * @method \App\Model\Entity\MstBook newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MstBook[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MstBook|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MstBook patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MstBook[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MstBook findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MstBooksTable extends Table
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

        $this->table('mst_books');
        $this->displayField('title');
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->allowEmpty('auther_name');

        $validator
            ->allowEmpty('isbn');

        $validator
            ->dateTime('buy_date')
            ->allowEmpty('buy_date');
        
        $validator
            ->integer('buy_user')
            ->allowEmpty('buy_user');

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
