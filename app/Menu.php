<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Menu extends Model
{
    function tree_menu_pure() {
        $nodeList = array();
        $tree = array();
        $rs = $this->select('id', 'name as text', 'route as value', 'classicon as icon', 'parent', 'params', DB::raw("'false' as opened"), DB::raw("'false' as selected"), DB::raw("'false' as disabled"), DB::raw("'false' as loading"))
                ->orderBy('parent')
                ->get()->toArray();        
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
