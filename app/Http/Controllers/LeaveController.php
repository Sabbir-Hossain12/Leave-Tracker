<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = LeaveRequest::get();

        return view('employee-history', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leave-request');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'leaveType' => 'required',
                'startDate' => 'required|after:today',
                'endDate' => 'required|after:startDate',
                'reason' => 'required'
            ]
        );

        LeaveRequest::create([
            'leave_type' => $request->leaveType,
            'start_date' => $request->startDate,
            'end_date' => $request->endDate,
            'reason' => $request->reason,
            'employee_id' => auth()->user()->id
        ]);

        return redirect()->route('leaves.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function adminDashboard(Request $request)
    {
        $pending_leaves = LeaveRequest::where('status', 'Pending')->count();
        $pending_employees = User::where('is_approved', 0)->count();
        $approved_leaves = LeaveRequest::where('status', 'Approved')->count();
        $total_leaves = LeaveRequest::count();
        $rejected_leaves = LeaveRequest::where('status', 'Rejected')->count();

        return view('admin-dashboard', [
            'pending_leaves' => $pending_leaves, 'pending_employees' => $pending_employees,
            'approved_leaves' => $approved_leaves, 'total_leaves' => $total_leaves,
            'rejected_leaves' => $rejected_leaves
        ]);
    }


}
