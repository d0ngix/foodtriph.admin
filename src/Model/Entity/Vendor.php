<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendor Entity
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property string $contact_num
 * @property string $photo
 * @property string $type
 * @property string $cuisine
 * @property string $description
 * @property string $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\MenuAddOn[] $menu_add_ons
 * @property \App\Model\Entity\MenuCategory[] $menu_categories
 * @property \App\Model\Entity\Menu[] $menus
 * @property \App\Model\Entity\TransactionMessage[] $transaction_messages
 * @property \App\Model\Entity\TransactionPromo[] $transaction_promos
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\VendorAddress[] $vendor_addresses
 */
class Vendor extends Entity
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
