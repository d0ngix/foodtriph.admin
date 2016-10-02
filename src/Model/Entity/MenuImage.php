<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MenuImage Entity
 *
 * @property int $id
 * @property int $menu_id
 * @property string $path
 * @property int $is_primary
 * @property string $name
 * @property string $extension
 * @property string $mime
 * @property string $size
 * @property string $md5
 * @property string $dimensions
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Menu $menu
 */
class MenuImage extends Entity
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
