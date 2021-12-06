<?php

namespace App\Http\Controllers;

use App\Models\ArusBarangMasuk;
use App\Models\Barang;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController
{
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

        if (!$messageData->save()) {
            return response()->json([
                'code' => '300',
                'message' => 'Data Tidak Berhasil Disimpan',
            ]);
        }
    }

    public function showAll($user_id)
    {
        // tambahin last message dan is read
        $messageData = Message::where('user_id', $user_id)->groupBy('to_user_id');

        return response()->json([
            'code' => '200',
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $messageData,
        ]);
    }

    public function show($user_id, $to_user_id)
    {
        $messageData = Message::where('user_id', $user_id)->where('to_user_id', $to_user_id);

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
            'message_id' => 'required',
            'message' => 'required',
        ]);

        $messageData = new MessageReplay();
        $messageData->user_id = $request->get('user_id');
        $messageData->to_user_id = $request->get('to_user_id');
        $messageData->message_id = $request->get('message_id');
        $messageData->message = $request->get('message');

        if (!$messageData->save()) {
            return response()->json([
                'code' => '300',
                'message' => 'Data Tidak Berhasil Disimpan',
            ]);
        }
    }
}
