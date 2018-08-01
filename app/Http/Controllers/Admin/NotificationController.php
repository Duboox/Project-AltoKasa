<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\NotificationValidate;
use Inicia\Notifications\NotificationAgenda;
use Inicia\LocalNotification;
use Notification;
use Exception;
use Inicia\User;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = LocalNotification::orderBy('id', 'DESC')->paginate(10);
        
        return view('dashboard.modules.notification.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users_data = User::select(['name', 'email'])->get();

        return view('dashboard.modules.notification.create', compact('users_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotificationValidate $request)
    {   
        $data = $request->all();

        try {
            $notification = LocalNotification::create([
                'id_user' => id_user(),
                'result' => 'Notificación Enviada', 
                'subject' => $request->subject, 
                'email' => $request->email, 
                'message' => $request->message 
            ]);
        
            Notification::send($notification, new NotificationAgenda($data));

            return response_request($notification, 'notification', 'index', 0, 2);

        } catch (Exception $e) {
            $notification = LocalNotification::create([
                'id_user' => id_user(),
                'result' => 'Notificación No Enviada', 
                'subject' => $request->subject, 
                'email' => $request->email, 
                'message' => $request->message 
            ]);

            return redirect()->route('notification.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = LocalNotification::find($id);
        
        return view('dashboard.modules.notification.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NotificationValidate $request, $id)
    {
        $notification = LocalNotification::find($id);

        $notification->update($request->all());

        return response_request($notification, 'notification', 'index', 0, 2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = LocalNotification::find($id);
        
        $notification->delete();

        return response_request_back($notification, 0, 1);
    }
}
