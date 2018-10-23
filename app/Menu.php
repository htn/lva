<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    function tree_menu_pure() {
        $nodeList = array();
        $tree = array();
        $rs = $this->all()->toArray();        
        foreach ($rs as $row) {          
            $nodeList[$row['id']] = array_merge($row, array('children' => array()));
        }
        foreach ($nodeList as $nodeId => &$node) {
            if (!$node['parent'] || !array_key_exists($node['parent'], $nodeList)) {
                $tree[] = &$node;
            } else {
                $nodeList[$node['parent']]['children'][] = &$node;
            }
        }
        unset($node);
        unset($nodeList);
        return $tree;
    }
}
