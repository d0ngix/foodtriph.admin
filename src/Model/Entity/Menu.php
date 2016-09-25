<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property int $id
 * @property string $ref
 * @property int $vendor_id
 * @property string $name
 * @property string $description_long
 * @property string $description_short
 * @property float $price
 * @property float $discount
 * @property string $add_ons
 * @property int $pax_min
 * @property int $pax_max
 * @property string $active
 * @property string $deleted
 * @property string $likes
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\MenuImage[] $menu_images
 * @property \App\Model\Entity\MenuRating[] $menu_ratings
 * @property \App\Model\Entity\TransactionItem[] $transaction_items
 * @property \App\Model\Entity\TransactionPromo[] $transaction_promos
 */
class Menu extends Entity
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
