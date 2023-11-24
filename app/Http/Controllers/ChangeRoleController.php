<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplierRequest;
use App\Models\ChangeRole;
use App\Models\User;
use Illuminate\Http\Request;

class ChangeRoleController extends Controller
{
    public function index()
    {
        $changeRole = ChangeRole::where('user_id', auth()->user()->id)->first();

        return view('client.requestSupplier.index', compact('changeRole'));
    }

    public function store(StoreSupplierRequest $request)
    {
        ChangeRole::create($request->except('valid_id') + ['user_id' => auth()->id(), 'valid_id' => $request->file('valid_id')->store('supplier', 'public')]);

        alert()->success('Request has been successfully received by Admin ');
        return redirect()->route('supplier-request.index');
    }

    public function adminIndex()
    {
        $usersRequests = ChangeRole::with('user')->get();

        return view('admin.supplierRequest.index', compact('usersRequests'));
    }

    public function approve(ChangeRole $changeRole)
    {
        // Find the user
        $user = User::find($changeRole->user_id);

        if ($user && !$user->hasRole('supplier')) {
            // Assign the 'supplier' role to the user
            $user->syncRoles('supplier');
        }

        $changeRole->delete();
        alert()->success('User has been sucessfully change to Supplier');
        return redirect()->route('admin-supplier.index');
    }

}
