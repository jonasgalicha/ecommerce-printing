<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuotationRequest;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('staff')) {
            // If the user has 'admin' or 'staff' role
            $quotations = Quotation::with('user')->get();
        } else {
            // If the user does not have 'admin' or 'staff' role
            $quotations = Quotation::with('user')->where('user_id', auth()->id())->get();
        }

        return view('staff.quotation.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.quotation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuotationRequest $request)
    {
        Quotation::create($request->except('image') + ['image' => $request->file('image')->store('quotations', 'public'), 'user_id' => auth()->id(), 'status' => 0]);

        alert()->success('Quotation has been submitted');
        return redirect()->route('quotation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotation $quotation)
    {
        $quotation->delete();

        alert()->success('Quotation has been deleted');
        return redirect()->route('quotation.index');
    }

    public function cancel(Quotation $quotation)
    {
        $quotation->update(['status' => 1]);

        alert()->success('Successfully changed to Cancelled');
        return redirect()->route('quotation.index');
    }

    public function complete(Quotation $quotation)
    {
        $quotation->update(['status' => 2]);

        alert()->success('Successfully changed to Completed');
        return redirect()->route('quotation.index');
    }

}
