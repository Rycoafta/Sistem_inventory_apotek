<?php

namespace App\Controllers;

use App\Models\FPBModel;
use App\Models\FPPModel;

class AdminHistoryController extends BaseController
{
    public function index()
    {
        $fppModel = new FPPModel();
        $fpbModel = new FPBModel();
        $historys1 = $fppModel->findAll();
        $historys2 = $fpbModel->findAll();

        return view('admin/history/index', ['historys1' => $historys1, 'historys2' => $historys2]);
    }
    public function show($id)
    {
        $fpbModel = new FPBModel();
        $history2 = $fpbModel->find($id);

        if ($history2) {
            return redirect()->back()->with('error', 'history not found.');
        }

        return view('admin/history/show', compact('history2'));
    }

    public function show2($id)
    {
        $fppModel = new FPPModel();
        $history1 = $fppModel->find($id);

        if (!$history1) {
            return redirect()->back()->with('error', 'history not found.');
        }

        return view('admin/history/show2', compact('history1'));
    }

}
