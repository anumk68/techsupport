<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequestForm;
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Validator;

class ServiceRequestFormController extends Controller
{
    //
    public function submitIssueForm(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'issue_id' => 'nullable|exists:issues,id',
            'model_name' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $submit = new ServiceRequestForm();
        $submit->brand_id = $request->brand_id;
        $submit->issue_id = $request->issue_id;
        $submit->model = $request->model_name;
        $submit->name = $request->name;
        $submit->email = $request->email;
        $submit->phone = $request->phone;
        $submit->description = $request->description;
        $submit->save();
      return redirect()->back()->with('form_success', true);
    }
public function submitIssueForm_ajax(Request $request)
{
    $validator = Validator::make($request->all(), [
        'brand_id' => 'required|exists:brands,id',
        'issue_id' => 'required|exists:issues,id',
        'model'    => 'required|string|max:255',
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|max:255',
        'phone'    => 'required|digits:10',
        'subject'  => 'required|string|max:500',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors()
        ], 422);
    }
    $submit = new ServiceRequestForm();
    $submit->brand_id = $request->brand_id;
    $submit->issue_id = $request->issue_id;
    $submit->model = $request->model;
    $submit->name = $request->name;
    $submit->email = $request->email;
    $submit->phone = $request->phone;
    $submit->description = $request->subject;
    $submit->save();

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully!'
    ]);
}


}
