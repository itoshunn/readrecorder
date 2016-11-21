<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MstShop Entity
 *
 * @property int $id
 * @property string $shop_name
 * @property string $store_name
 * @property int $sort_order
 * @property \Cake\I18n\Time $created
 * @property int $created_user
 * @property \Cake\I18n\Time $modified
 * @property int $modified_user
 */
class MstShop extends Entity
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
