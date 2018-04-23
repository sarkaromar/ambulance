<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

    /**
     * this controller use for all comon action
     *
     * @author Mostafijur Rahman Rana
     */
class CommonController extends Controller {

    /**
     * send Area name and by division id
     *
     * @param  Request  $request
     * @return json encoded data
     * @author Mostafijur Rahman Rana
     */
    public function get_area(Request $request) {

        $divi_id = $request->input('division');
        
        $query = DB::table('areas')->where('area_divi_id', $divi_id)->get();

        $data = json_encode($query);

        echo $data;

    }

    /**
     * send Area name and by division slug
     *
     * @param  Request  $request
     * @return json encoded data
     * @author Mostafijur Rahman Rana
     */
    public function get_area_by_slug(Request $request) {

        $divi_slug = $request->input('DiviName');
        
        $query = DB::table('areas')
                ->select('areas.area_name','areas.area_slug')
                ->join('divisions', 'areas.area_divi_id', '=', 'divisions.id')
                ->where('divisions.divi_slug', $divi_slug)
                ->get();

        $data = json_encode($query);

        echo $data;

    }

    /**
     * This function to use for delete row with table name and id.
     * here if we want to delete multiple table then we send it with array 
     * and this function call from javascript function dodelete
     * here table can be array object to delet more table
     * @author Mostafijur rahman rana
     * @param type $table
     * @param type $id
     * @return boolean
     */
    function delete(Request $request) {

        $table = $request->input('table');
        $field = $request->input('field');
        $id = $request->input('id');

        if(DB::table($table)->where("$field", $id)->delete()){

            $data = json_encode(TRUE);

            echo $data;

        }  else {

            $data = json_encode(FALSE);

            echo $data;

        }
    
    }

    /**
     * this function used for delete a image with path and image name
     * @author Mostafijur rahman rana
     */
    public function image_delete($root, $path, $name) {

        $filename = $root . "/" . $path . "/" . $name;
        if (file_exists($filename)) {
            unlink($filename);
            return TRUE;
        } else {
            return FALSE;
        }
    }


    /**
     * This function use for change status
     * @param type $table
     * @param type $field
     * @param type $id
     * @param type $status
     * 
     */
    public function report_status(Request $request) {
        
        // get data
        $table = $request->input('table');
        $field = $request->input('field');
        $id = $request->input('id');
        $status_field = $request->input('status_field');
        $status = $request->input('status');

        // make array
        $value = [ "$status_field" => "$status" ];
        
        // db action and send response
        if(DB::table($table)->where("$field", $id)->update($value)){

            $data = json_encode(TRUE);

            echo $data;

        }  else {

            $data = json_encode(FALSE);

            echo $data;

        }


    }








}