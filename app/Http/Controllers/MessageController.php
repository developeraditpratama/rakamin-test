<?php

namespace App\Http\Controllers;

use App\Models\ArusBarangMasuk;
use App\Models\Barang;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController
{
    public function index()
    {
        $message = Message::all();

        return response()->json([
            'code' => '200',
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $message,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'to_user_id' => 'required',
            'message' => 'required',
        ]);

        $messageData = new Message();
        $messageData->user_id = $request->get('user_id');
        $messageData->to_user_id = $request->get('to_user_id');
        $messageData->message = $request->get('message');
        $messageData->is_active = 1;
        $messageData->is_read = 0;

        if (!$messageData->save()) {
            return response()->json([
                'code' => '300',
                'message' => 'Data Tidak Berhasil Disimpan',
            ]);
        }

        return response()->json([
            'code' => '200',
            'message' => 'Data Berhasil Disimpan',
            'data' => $messageData,
        ]);
    }

    public function show($user_id, $to_user_id)
    {
        $messageData = Message::where('user_id', $user_id)->where('to_user_id', $to_user_id)->get();

        return response()->json([
            'code' => '200',
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $messageData,
        ]);
    }

    public function allMessage($user_id)
    {
        // tambahin last message dan is read
        $messageData = Message::select(['id', 'user_id', 'to_user_id', 'message', DB::raw('count(is_read) as message_not_read'), 'created_at'])->where('user_id', $user_id)->where('is_read', 0)->groupBy('to_user_id')->orderBy('created_at', 'desc')->get();

        return response()->json([
            'code' => '200',
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $messageData,
        ]);
    }

    public function storeReplay(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'to_user_id' => 'required',
            'reply_id' => 'required',
            'message' => 'required',
        ]);

        $messageData = new Message();
        $messageData->user_id = $request->get('user_id');
        $messageData->to_user_id = $request->get('to_user_id');
        $messageData->reply_id = $request->get('reply_id');
        $messageData->message = $request->get('message');
        $messageData->is_active = 1;
        $messageData->is_read = 0;

        if (!$messageData->save()) {
            return response()->json([
                'code' => '300',
                'message' => 'Data Tidak Berhasil Disimpan',
            ]);
        }

        return response()->json([
            'code' => '200',
            'message' => 'Data Berhasil Disimpan',
            'data' => $messageData,
        ]);
    }
}
