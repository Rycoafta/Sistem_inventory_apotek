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
        $fppModel = new FPPModel();
        $fpbModel = new FPBModel();
        $history1 = $fppModel->find($id);
        $history2 = $fpbModel->find($id);

        if (!$history1 || !$history2) {
            return redirect()->back()->with('error', 'history not found.');
        }

        return view('admin/history/show', compact('history1', 'history2'));
    }

}
