<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TransactionItem Entity
 *
 * @property int $id
 * @property string $ref
 * @property int $transaction_id
 * @property int $menu_id
 * @property string $menu_name
 * @property int $qty
 * @property float $price
 * @property float $discount
 * @property float $total_amount
 * @property string $add_ons
 * @property string $remarks
 * @property string $status
 * @property string $created
 * @property string $modified
 *
 * @property \App\Model\Entity\Transaction $transaction
 * @property \App\Model\Entity\Menu $menu
 */class TransactionItem extends Entity
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
