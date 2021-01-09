<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;
use App\Models\User;

class ChatController extends Controller
{
    public function rooms(Request $request){
       
        $chatRooms = ChatRoom::with('user')->get();
        
        return view('chat.index',compact('chatRooms'));
    }

    public function messages($roomId){
        $chatMessages =  ChatMessage::where('chat_room_id',$roomId)->with('user')->orderBy('created_at','DESC')->get();
        $user = User::where('id',$chatMessages[0]->user_id)->first();
        
        
        
        return view('chat.view',compact('chatMessages','user','roomId'));
    }

    public function newMessage(Request $request,$roomId){
        
        $newMessage = new ChatMessage();
        $newMessage->user_id = $request->user_id;
        $newMessage->chat_room_id = $roomId;
        $newMessage->message = $request->message;
        $newMessage->is_admin = 1;
        $newMessage->save();
        
        broadcast(new newChatMessage($newMessage))->toOthers();
        return $newMessage;
    }
}
