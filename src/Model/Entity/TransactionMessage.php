<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TransactionMessage Entity
 *
 * @property int $id
 * @property int $transaction_id
 * @property int $vendor_id
 * @property string $user_id
 * @property string $messages
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Transaction $transaction
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\User $user
 */class TransactionMessage extends Entity
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
