<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function all(Request $request){
        $connection = DB::table('addresses');

        $addresses = $connection->get();

        $this->addData('addresses',$addresses);
        $this->addMessage('success','All your Address.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function id(Request $request, int $id){
        $address = DB::table('addresses')
            ->where('id','=',$id);

        $count = $address->count();

        if($count === 1){
            $this->addData('address',$address->first());
        }
        else{
            $this->addMessage('success','Address doesnt exists.');
        }

        return $this->getResponse();
    }
}
