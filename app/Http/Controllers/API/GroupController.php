<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Menu;

class GroupController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $model = new Menu();
        $menu = $model->tree_menu_pure();
        //$trees = str_replace('"false"', 'false', json_encode($menu));
        return array('menu'=>$menu, 'list'=>Group::latest()->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'description' => 'required|string|min:6'
        ]);

        return Group::create([
                    'name' => $request['name'],
                    'params' => $request['params'],
                    'description' => $request['description']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $group = Group::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|string|max:191|unique:groups,name,' . $group->id,
            'description' => 'required|string|min:6'
        ]);
        $group->update($request->all());
        return ['message' => 'call update id' . $id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $group = Group::findOrFail($id);
        $group->delete();
        return ['message' => 'Group deleted'];
    }

}
