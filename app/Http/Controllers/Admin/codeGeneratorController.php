<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VerificationCode;
use Carbon\Carbon;

class codeGeneratorController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('product_access'), 403);

        $codes = VerificationCode::whereDate('created_at', Carbon::today())->take(10000)->get();

        return view('admin.verificationCodes.index', compact('codes'));
    }

    public function codeList(Request $request)
    {
        // $db_data = VerificationCode::select('code')->get()->toArray();
        $nb = 2000;
        $chunks = intdiv($nb, 1000);
        

        if ($chunks > 0){
            for ($i = 0; $i < $chunks; $i++){
                $this->generateAndSaveCodes(1000);
            }

            $rest_i = $nb - ($chunks * 1000);
            if ($rest_i > 0){
                $this->generateAndSaveCodes($rest_i);
            }
           
        }else{
            $this->generateCode($nb);
            
        }
        // return view('admin.products.color.index', compact('colors'));
        return "success";
    }

     function generateAndSaveCodes($nb){
        $codesArray = [];
        $codes = $this->generateCode($nb);
        for ($i = 0; $i < $nb; $i++){
            $data = [
                'code' => $codes[$i],
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]; 
            array_push($codesArray, $data);
        }
        
        VerificationCode::insert($codesArray);
        return;
    }

    function generateCode($i)
    {
        $codeArray = [];
        $iteration = 0;

        do{
            $number1 = mt_rand(10000000, 99999999);
            $number2 = mt_rand(10000000, 99999999);
            $number3 = mt_rand(0, 4);
            $code = ($number1 . ($number2 + $number3));
            
            if (!in_array( $code, $codeArray )){
                array_push($codeArray, $code);
                $iteration++;
            }

        }while($iteration < $i);

        return $codeArray;
    }
}
