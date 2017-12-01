<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends BaseAdminController
{
    public function index()
    {
        return view('admin.index');
    }

    public function address()
    {
        return view('admin.address');
    }

    public function bill()
    {
        return view('admin.bill');
    }

    public function billlist()
    {
        return view('admin.billlist');
    }

    public function bindphone()
    {
        return view('admin.bindphone');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function bonus()
    {
        return view('admin.bonus');
    }

    public function change()
    {
        return view('admin.change');
    }

    public function collection()
    {
        return view('admin.collection');
    }

    public function comment()
    {
        return view('admin.comment');
    }

    public function commentlist()
    {
        return view('admin.commentlist');
    }

    public function coupon()
    {
        return view('admin.coupon');
    }

    public function email()
    {
        return view('admin.email');
    }

    public function foot()
    {
        return view('admin.foot');
    }

    public function idcard()
    {
        return view('admin.idcard');
    }

    public function information()
    {
        return view('admin.information');
    }

    public function logistics()
    {
        return view('admin.logistics');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function order()
    {
        return view('admin.order');
    }

    public function orderinfo()
    {
        return view('admin.orderinfo');
    }

    public function password()
    {
        return view('admin.password');
    }

    public function question()
    {
        return view('admin.question');
    }

    public function record()
    {
        return view('admin.record');
    }

    public function refund()
    {
        return view('admin.refund');
    }

    public function safety()
    {
        return view('admin.safety');
    }

    public function setpay()
    {
        return view('admin.setpay');
    }
}
