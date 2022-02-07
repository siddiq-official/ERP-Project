<?php
 
namespace App\Http\Controllers;
use App\Contact;
use App\EmployeInfo;
use App\project;
use App\client;
use App\payment;
use App\peopleinfo;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function login()
    {
        return view('login');
    }
    public function dashbord()
    {
        return view('dashbord');
    }
    public function profile()
    {
        return view('profile');
    }
    public function allpage()
    {
        return view('allpage');
    }
    public function contacts()
    {
        $a = Contact::all();
        return view('contacts', compact('a'));

    }
    public function contactstore(Request $req)
    {
        return $req;
    }
    public function client_list()
    {
        return view('client_list');
    }
    public function merchant_list()
    {
        $a = peopleinfo::all();
        return view('merchant_list', compact('a'));
    }
    public function addmerchant()
    {
        return view('addmerchant');
    }
    /*public function updates()
    {
        return view('updates');
    }
    public function project_statous()
    {
        return view('project_statous');
    }*/
    public function employe_status()
    {
        $employe = EmployeInfo::all();
        return view('employe_status', compact('employe'));
    }
    public function add_employe()
    {
        $employe = EmployeInfo::all();
        return view('add_employe', compact('employe'));
    }
    public function add_employeinfo(Request $req)
    {
        return $req;
    }
    public function invoice()
    {
        return view('invoice');
    }
    public function bill()
    {
        return view('bill');
    }
    public function money_receipt()
    {
        return view('money_receipt');
    }
    public function transaction()
    {
        return view('transaction');
    }
    public function general_expenses()
    {
        return view('general_expenses');
    }
    public function stock_sheet()
    {
        return view('stock_sheet');
    }
    public function purchase()
    {
        return view('purchase');
    }
    public function add_client()
    {
        return view('add_client');
    }
    public function add_project()
    {
        return view('add_project');
    }
    public function edit_project($id)
    {
        $dt = project::find($id);
        return view('edit_project', compact('dt'));
    }
    public function project_list()
    {
        $a = project::all();
        return view('project_list', compact('a'));
    }
    public function edit_Client_info()
    {
        return view('edit_Client_info');
    }
    public function client_document_upload()
    {
        return view('client_document_upload');
    }
    public function payment()
    {
        return view('payment');
    }
    



    
    public function index()
    {
        return view('form');
    }
    
     public function myreg()
    {
        return view('reg');
    }
    
}
