<?php

namespace App\Http\Livewire\Admin\Messages;

use App\Models\Conversation;
use App\Models\Message;
use Livewire\Component;

class ListConversationAndMessages extends Component
{

    public $selectedConversation;
    public $body;

    public function mount()
    {
        $this->selectedConversation = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->first();

    }

    public function viewMessage($conversationId)
    {
        $this->selectedConversation = Conversation::find($conversationId);


    }

    public function sendMessage()
    {
        Message::create([
            'conversation_id'   => $this->selectedConversation->id,
            'user_id'           => auth()->id(),
            'body'              => $this->body
        ]);

        $this->reset('body');
        $this->viewMessage($this->selectedConversation->id);
    }


    public function render()
    {
        $conversations = Conversation::query()
            ->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->get();

        return view('livewire.admin.messages.list-conversation-and-messages', [
            'conversations' => $conversations
        ]);
    }
}
