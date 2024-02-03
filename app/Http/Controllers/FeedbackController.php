<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    private $_request = null;
    private $_modal = null;
    private $_directory = '';
    private $_route = '';

    /**
     * Create a new controller instance.
     *
     * @return $reauest, $modal
     */
    public function __construct(Request $request,Feedback $modal)
    {
        $this->_request = $request;
        $this->_modal = $modal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] = $this->get_all($this->_modal);
        return view($this->_directory . '.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->_directory . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate($this->_request, [
            'name' => 'required',
        ]);

        $data = $this->_request->except('_token');
        $var = $this->add($this->_modal, $data);

        return redirect()->route($this->_route . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  $this->_modal  $modal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->get_by_id($this->_modal, $id);
        return view($this->_directory . 'show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $this->_modal  $modal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->get_by_id($this->_modal, $id);
        return view($this->_directory . '.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \{{ namespacedModel }}  $modal
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate($this->_request, [
            'name' => 'required',
        ]);

        $data = $this->_request->except('_token', '_method');
        $data = $this->get_by_id($this->_modal, $id)->update($data);

        return redirect()->route($this->_route . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \{{ namespacedModel }} $modal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->get_by_id($this->_modal, $id)->delete();
        return redirect()->route($this->_route . '.index');
    }
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {

     $data = [
        'feedback' => $request->input('description'),
    ];

    if (auth()->check()) {
        $user = auth()->user();
        $data['name'] = $user->name;
        $data['email'] = $user->email;
        $data['user_id'] = $user->id;
    } else {
        $data['name'] = $request->input('name');
        $data['last_name'] = $request->input('name');
        $data['email'] = $request->input('email');

        $existingUser = User::where('email', $data['email'])->first();

        if (!$existingUser) {
            User::create([
                'name' => $data['name'],
                'last_name' => $data['name'],
                'email' => $data['email'],
            ]);
        }
    }

    Feedback::create($data);

    return redirect()->back()->with('message', 'Feedback submitted successfully!');}
}
