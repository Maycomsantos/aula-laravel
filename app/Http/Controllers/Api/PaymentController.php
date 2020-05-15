<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\PaymentRequest;
use App\Models\Payment;
use App\Http\Resources\PaymentResource;

class PaymentController extends Controller
{

    public function index()
    {
        return PaymentResource::collection(Payment::all());
    }

    public function store(PaymentRequest $request)
    {
        Payment::create($request->all());

        return new PaymentResource();
    }

    public function show($id)
    {
        return new PaymentResource(Payment::FindOrFail($id));
    }

    public function update(PaymentRequest $request, Payment $payment)
    {
        $payment->update($request->all());

        return $this->response(
            'Pagamento atualizado com sucesso!', new PaymentResource($payment)
        );

    }

    public function destroy(Payment $payment)
    {
        $payment->destroy();

        return $this->response('Pagamento deletado com sucesso');
    }
}
