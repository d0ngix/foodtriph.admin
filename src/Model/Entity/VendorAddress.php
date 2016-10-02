<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VendorAddress Entity
 *
 * @property int $id
 * @property int $vendor_id
 * @property string $address_name
 * @property float $latitude
 * @property float $longitude
 * @property string $address1
 * @property string $address2
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $post_code
 * @property string $landmarks
 * @property string $operating_hours
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Vendor $vendor
 */
class VendorAddress extends Entity
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
