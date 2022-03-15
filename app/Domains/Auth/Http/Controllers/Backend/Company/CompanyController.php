<?php

namespace App\Domains\Auth\Http\Controllers\Backend\Company;
use Illuminate\Http\Request;

use App\Domains\Auth\Models\Company;

/**
 * Class RoleController.
 */
class CompanyController
{
    public function index(){
        return view('backend.auth.company.index');
    }
}
