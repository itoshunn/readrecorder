<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Read Entity
 *
 * @property int $id
 * @property int $book_id
 * @property int $user_id
 * @property \Cake\I18n\Time $start_date
 * @property \Cake\I18n\Time $finish_date
 * @property bool $read_flag
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\User $user
 */
class Read extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
