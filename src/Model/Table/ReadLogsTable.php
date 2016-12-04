<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReadLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Books
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ReadLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReadLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ReadLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReadLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReadLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReadLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReadLog findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReadLogsTable extends Table
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

        $this->table('read_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Books', [
            'foreignKey' => 'book_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmpty('start_date');

        $validator
            ->date('finish_date')
            ->requirePresence('finish_date', 'create')
            ->allowEmpty('finish_date');

        $validator
            ->boolean('read_flag')
            ->requirePresence('read_flag', 'create')
            ->notEmpty('read_flag');

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
        $rules->add($rules->existsIn(['book_id'], 'Books'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
    
    /**
     * beforeSave
     * @param type $event
     * @param type $entity
     * @param type $options
     */
    public function beforeSave($event, $entity ,$options)
    {
        if ($entity->book_title) {
            // TODO 書籍登録処理（未完成）
            //$entity->books = $this->_buildBooks($entity->book_title, $entity->author);
        }
    }

    /**
     * 記録追加時に、書籍に対しても追加登録を行う
     * @param type $title
     * @param type $author
     * @return type
     */
    protected function _buildBooks($title, $author)
    {
        $result = $this->Books->newEntity(['book_title' => $title, 'author' => $author]);
        return $result;
    }
}

