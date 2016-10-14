<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string $uuid
 * @property int $vendor_id
 * @property int $user_id
 * @property string $promo_code
 * @property float $sub_total
 * @property float $discount
 * @property float $delivery_cost
 * @property float $total_amount
 * @property int $address_id
 * @property int $delivery_man_id
 * @property string $remarks
 * @property string $payment_method
 * @property string $payment_ref
 * @property string $status
 * @property string $archived
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\DeliveryMan $delivery_man
 * @property \App\Model\Entity\TransactionItem[] $transaction_items
 * @property \App\Model\Entity\TransactionMessage[] $transaction_messages
 */class Transaction extends Entity
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
