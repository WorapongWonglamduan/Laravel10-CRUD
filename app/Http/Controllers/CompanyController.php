<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $data['companies'] = Company::orderBy('id', 'desc')/* ->paginate(1) */;
        return view('companies.index', $data);
    }

    public function create()
    {
        return view('companies.create');
    }
}
