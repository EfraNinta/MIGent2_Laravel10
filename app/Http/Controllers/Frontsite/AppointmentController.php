<?php
namespace App\Http\Controllers\Frontsite;
use App\Http\Controllers\Controller;
// use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
// use everything here
// use Gate;
use Auth;
// use model here
use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Specialist;
use GuzzleHttp\Psr7\Request;

    // thirdparty package
    class AppoitnmentController extends Controller
    {
    public function index()
    {
    return view('pages.frontsite.appointment.index');
    }
    public function create()
    {
    return abort(404);
    }
    public function store(Request $request)
    {
    return abort(404);
    }
    public function show($id)
    {
    return abort(404);
    }
    public function edit($id)
    {
    return abort(404);
    }
    public function update(Request $request, $id)
    {
    return abort(404);
    }
    public function destroy($id)
    {
    return abort(404);
    }
    // custom function here
    }