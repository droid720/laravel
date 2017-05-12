<?php

namespace App\Http\Controllers;

use App\Helper\Common;
use App\Models\Customer;
use App\Validators\CustomerValidator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class CustomerController extends BaseController
{
    public function getCustomers(){
        $data = Customer::paginate(50);
        return view('backend.modules.customer.customers')->with("customers",$data);
    }

    public function getCreateCustomer(Request $request){
        $messages = Common::getMessage($request);
        return view('backend.modules.customer.add',compact('messages'));
    }

    public function postCreateCustomer(Request $request){
        try {
            $_validate = new CustomerValidator();
            $validator = $this->checkValidator($request->all(), $_validate->validate());

            if ($validator->fails()) {
                Common::setMessage($request, MESSAGE_STATUS_ERROR, $validator->getMessageBag());
                return redirect(route('customer.getCreate', [$request->id]))->withInput();
            }

            $customer = new Customer();
            $customer->fill($request->input())->save();
            Common::setMessage($request, MESSAGE_STATUS_SUCCESS, [trans('messages.customer.add_success')]);
            return redirect(route('customer.getCustomers'));
        } catch (\Exception $e) {
            Common::setMessage($request, MESSAGE_STATUS_ERROR, [trans('messages.customer.add_failed')]);
            return redirect(route('customer.getCreate', [$request->id]))->withInput();
        }
    }

    public function getDetail(){

    }

    public function getEdit(Request $request, $id){
        $customer = Customer::find($id);

        if (!$customer) {
            Common::setMessage($request, MESSAGE_STATUS_ERROR, [trans('messages.common.user_not_found')]);
            return redirect(route('customer.getCustomers'));
        }

        $messages = Common::getMessage($request);

        return view('backend.modules.customer.edit', compact('customer','messages'));
    }

    public function postEdit(Request $request){
        try {
            $_validate = new CustomerValidator();
            $validator = $this->checkValidator($request->all(), $_validate->validate());

            if ($validator->fails()) {
                Common::setMessage($request, MESSAGE_STATUS_ERROR, $validator->getMessageBag());
                return redirect(route('customer.getEdit', [$request->id]))->withInput();
            }

            $customer = Customer::find($request->id);
            $customer->fill($request->input())->save();
            Common::setMessage($request, MESSAGE_STATUS_SUCCESS, [trans('messages.customer.edit_success')]);
            return redirect(route('customer.getCustomers'));
        } catch (\Exception $e) {
            Common::setMessage($request, MESSAGE_STATUS_ERROR, [trans('messages.customer.edit_failed')]);
            return redirect(route('customer.getEdit', [$request->id]))->withInput();
        }
    }

    public function getAjaxData(){
        $data =  Customer::where('id', '<', 1000)->take(100)->get();
//        dd($data);
//        $data = Customer::all();
        return Datatables::of($data)->make(true);
    }
}
