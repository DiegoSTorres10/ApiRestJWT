<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use  Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Claims\Custom;

class CustomerController extends Controller
{
    protected $user;

    public function __construct(Request $request)
    {
        $token = $request->header('Authorization');
        if ($token != '')
            //En caso de que requiera autentifiación la ruta obtenemos el usuario y lo almacenamos en una variable, nosotros no lo utilizaremos.
            $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index()
    {
        //Listamos todos los customers
        return Customer::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validamos los datos
        $data = $request->only('FullName', 'Email', 'Phone', 'Address');
        $validator = Validator::make($data, [
            'FullName' => 'required|max:50|string',
            'Email' => 'required|max:50|string',
            'Phone' => 'required|string|max:15',
            'Address' => 'nullable|min:10',
        ]);
        //Si falla la validación
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 400);
        }

        $CustomerAll = Customer::all();
        if ($CustomerAll->count() > 15) {
            return response()->json(['error' => "Cannot add more customers"], 400);
        } else {

            //Creamos el customer en la BD
            $customer = Customer::create([
                'FullName' => $request->FullName,
                'Email' => $request->Email,
                'Phone' => $request->Phone,
                'Address' => $request->Address,
            ]);
            //Respuesta en caso de que todo vaya bien.
            return response()->json([
                'message' => 'Customer created',
                'data' => $customer
            ], Response::HTTP_OK);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Bucamos el customer
        $customer = Customer::find($id);
        //Si el customer no existe devolvemos error no encontrado
        if (!$customer) {
            return response()->json([
                'message' => 'Customer not found.'
            ], 404);
        }
        //Si hay customer lo devolvemos
        return $customer;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        //Validación de datos
        $data =  $request->only('FullName', 'Email', 'Phone', 'Address');
        $validator = Customer::create([
            'FullName' => $request->FullName,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'Address' => $request->Address,
        ]);
        //Si falla la validación error.
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 400);
        }
        //Buscamos el customer
        $customer = Customer::findOrfail($id);
        //Actualizamos el customer.
        $customer->update([
            'FullName' => $request->FullName,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'Address' => $request->Address,
        ]);

        //Devolvemos los datos actualizados.
        return response()->json([
            'message' => 'Customer updated successfully',
            'data' => $customer
        ], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //Buscamos el customer
        $customer = Customer::findOrfail($id);
        //Eliminamos el customer
        $customer->delete();
        //Devolvemos la respuesta
        return response()->json([
            'message' => 'Customer deleted successfully'
        ], Response::HTTP_OK);
    }
}
