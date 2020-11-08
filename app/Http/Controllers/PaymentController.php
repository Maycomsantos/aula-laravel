<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::search()
            ->orderBy('id', 'DESC')
            ->paginate(20);

            return view('payments.index',compact('payment'));
    }

    public function create()
    {
        return view('payments.form');
    }

    public function store(PaymentRequest $request)
    {
        Payment::create($request->all());

        return redirect('payment')
            ->withSuccess('Pagamento cadastrado com sucesso');
    }

    public function show(Payment $payment)
    {
        return view('payments.show' , compact('payment'));
    }

    public function edit(Payment $payment)
    {
        return view('payments.form' , compact('payment'));
    }

    public function update(PaymentRequest $payment, PaymenteRequest $request)
    {
        $payment->update($request->all());

        return redirect('payment')
            ->withSuccess('Pagamento atualizado com sucesso');
    }

    public function destroy(Payment $payment , PaymentRequest $request)
    {
        $payment->destroy($request->all());

        return redirect('payment')
            ->withSuccess('Pagamento deletado com sucesso');
    }
}
