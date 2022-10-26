
    @if($conversations->isNotEmpty())
        <div class="_dashboard_content bg-white rounded mb-4" wire:poll>
            <div class="_dashboard_content_body">
                <!-- Convershion -->
                <div class="messages-container margin-top-0">
                    <div class="messages-headline">
                        <h4>
                            @if(auth()->id() ===  $this->selectedConversation->receiver_id  )

                            {{  $selectedConversation->sender->fullName() }}

                            @else

                                {{  $selectedConversation->receiver->fullName() }}
                            @endif

                        </h4>
                        <a href="#" class="message-action"><i class="ti-trash"></i> Delete Conversation</a>
                    </div>

                    <div class="messages-container-inner">

                        <!-- Messages -->
                        <div class="dash-msg-inbox">
                            <ul>
                                @foreach($conversations as $conversation)
                                    @if(auth()->id() == $conversation->receiver_id)

                                        @if($conversation->messages->count() > 0)
                                            <li class="{{ $conversation->id === $selectedConversation->id ? 'active-message':'' }}">
                                                <a href="#" wire:click.prevent="viewMessage({{ $conversation->id }})">
                                                    <div class="dash-msg-avatar"><img src="{{ Gravatar::get($conversation->receiver->email) }}" alt=""><span class="_user_status online"></span></div>

                                                    <div class="message-by">
                                                        <div class="message-by-headline">
                                                            @if($conversation->sender_id === auth()->id())

                                                                <h5>{{ $conversation->receiver->fullName() }}</h5>

                                                            @else

                                                                <h5>{{ $conversation->sender->fullName() }}</h5>

                                                            @endif

                                                            <span> {{ $conversation->messages->last()?->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <p>{!! $conversation->messages->last()?->body !!} </p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endif

                                    @else

                                        <li class="{{ $conversation->id === $selectedConversation->id ? 'active-message':'' }}">
                                                <a href="#" wire:click.prevent="viewMessage({{ $conversation->id }})">
                                                    <div class="dash-msg-avatar"><img src="{{ Gravatar::get($conversation->receiver->email) }}" alt=""><span class="_user_status online"></span></div>

                                                    <div class="message-by">
                                                        <div class="message-by-headline">
                                                            @if($conversation->sender_id === auth()->id())

                                                                <h5>{{ $conversation->receiver->fullName() }}</h5>

                                                            @else

                                                                <h5>{{ $conversation->sender->fullName() }}</h5>

                                                            @endif

                                                            <span> {{ $conversation->messages->last()?->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <p>{!! $conversation->messages->last()?->body !!} </p>
                                                    </div>
                                                </a>
                                            </li>

                                    @endif

                                @endforeach
                            </ul>
                        </div>
                        <!-- Messages / End -->

                        <!-- Message Content -->
                        <div class="dash-msg-content">

                            @foreach($selectedConversation->messages as $message)
                            <div class="message-plunch {{ $message->user_id == auth()->id() ?' me':'' }}">
                                <div class="dash-msg-avatar"><img src="{{ Gravatar::get($message->user->email) }}" alt=""></div>
                                <div class="dash-msg-text"><p>{{ $message->body }}</p></div>
                            </div>
                            @endforeach


                            <!-- Reply Area -->
                            <div class="clearfix"></div>
                            <div class="message-reply">
                                <form wire:submit.prevent="sendMessage" action="#">
                                    <textarea wire:model.defer="body" cols="40" rows="3" class="form-control with-light" placeholder="Your Message"></textarea>
                                    <button type="submit" class="btn theme-bg text-white">Send Message</button>
                                </form>

                            </div>

                        </div>
                        <!-- Message Content -->

                    </div>

                </div>
            </div>
        </div>

    @else
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="text-center"> <i class="fa fa-10x fa-envelope-open" aria-hidden="true"></i>
                    <h3><strong>You do not have any messages yet.</strong></h3>
                    <h4>Click the button below to select the users to chat with</h4> <a href="/admin/users" class="btn btn-primary m-3">Go to Users</a>
                </div>
            </div>
        </div>
    @endif

