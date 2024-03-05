<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Member;


class ShowController extends Controller
{
    public function show_details()
    {
        // $groups = Group::with('members')->get();
        // foreach ($groups as $group) {

        //     foreach ($group->members as $member) {
        //         echo '<pre>';
        //         echo $member->name;
        //     }
        // }
        $groups = DB::table('groups')->leftJoin('members', 'groups.groups_id', '=', 'members.members_id')->select('groups.*', 'members.name', 'members.members_id')->get();
        foreach ($groups as $key => $value) {
            echo '<pre>';
            echo $value->members_id;
        }
    }
}
