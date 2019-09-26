<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{

    public function index()
    {
        $payments = Payment::with('user')->paginate(25);

        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $users = User::pluck('name','id')->all();

        return view('payments.create', compact('users'));
    }

    /**
     * Store a new payment in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
            $data = $this->getData($request);

            $dt = Carbon::now();

            $payment  = Payment::whereUserId(Auth::id())
                ->where('valid_till','>', Carbon::now())->latest()->first();

            if($payment == null){

                $data['valid_till'] = $dt->addMonths($data['month']);

                Payment::create($data);

                return $this->makePremium();
            }else{
                $month = $payment->month + $data['month'];
                $date = $payment->created_at;
                $valid_till = $date->addMonths($month);
                $payment->update([
                    'valid_till'    =>  $valid_till,
                    'month'         =>  $payment->month + $data['month'],
                    'amount'        =>  $payment->amount + $data['amount'],
                    'rrr'           =>  $data['rrr']
                ]);
                return $this->makePremium();
            }


//            return redirect()->route('payments.payment.index')
//                             ->with('success_message', 'Payment was successfully added!');

    }

    /**
     * Display the specified payment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $payment = Payment::with('user')->findOrFail($id);

        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified payment.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        $users = User::pluck('name','id')->all();

        return view('payments.edit', compact('payment','users'));
    }

    /**
     * Update the specified payment in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $payment = Payment::findOrFail($id);
            $payment->update($data);

            return redirect()->route('payments.payment.index')
                             ->with('success_message', 'Payment was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified payment from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $payment = Payment::findOrFail($id);
            $payment->delete();

            return redirect()->route('payments.payment.index')
                             ->with('success_message', 'Payment was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'valid_till' => 'nullable',
            'amount' => 'string|min:1|required',
            'rrr' => 'string|min:1|required',
            'month' => 'integer',
        ];

        $data = $request->validate($rules);
        return $data;
    }

}
