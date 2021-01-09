<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use App\Events\NewChatMessage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    

    public function messages(){
        $user = Auth::user()->id;
        $room = ChatRoom::where('user_id',$user)->first();
        $chatMessages =  ChatMessage::where('chat_room_id',$room->id)->with('user')->orderBy('created_at','DESC')->get(); 
        return $chatMessages;
    }

    public function newMessage(Request $request){
        
        $newMessage = new ChatMessage();
       
        $user = Auth::user()->id;
        $room = ChatRoom::where('user_id',$user)->first();
        $newMessage->user_id = $request->user;
        $newMessage->chat_room_id = $room->id;
        $newMessage->message = $request->message;
        $newMessage->is_admin = 0;
        $newMessage->save();
        
        broadcast(new newChatMessage($newMessage))->toOthers();
        return $newMessage;
    }
}
