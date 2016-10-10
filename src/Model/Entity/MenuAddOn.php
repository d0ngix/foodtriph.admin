<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MenuAddOn Entity
 *
 * @property int $id
 * @property int $vendor_id
 * @property int $parent_id
 * @property string $add_on_name
 * @property float $price
 * @property string $description
 * @property \Cake\I18n\Time $created
 * @property int $created_by
 * @property \Cake\I18n\Time $modified
 * @property int $modified_by
 *
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\ParentMenuAddOn $parent_menu_add_on
 * @property \App\Model\Entity\ChildMenuAddOn[] $child_menu_add_ons
 */
class MenuAddOn extends Entity
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
