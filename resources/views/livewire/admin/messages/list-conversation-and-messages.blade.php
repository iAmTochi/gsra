
    @if($conversations->isNotEmpty())
        <div class="_dashboard_content bg-white rounded mb-4" wire:poll.visible>
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
        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="dash-widgets py-5 px-4 bg-info rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">46</h2>
                        <p class="p-0 m-0 text-light fs-md">Applied Jobs</p>
                        <i class="lni lni-empty-file"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="dash-widgets py-5 px-4 bg-dark rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">87</h2>
                        <p class="p-0 m-0 text-light fs-md">Notifications</p>
                        <i class="lni lni-users"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="dash-widgets py-5 px-4 bg-warning rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">312</h2>
                        <p class="p-0 m-0 text-light fs-md">Alert Jobs</p>
                        <i class="lni lni-bar-chart"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="dash-widgets py-5 px-4 bg-purple rounded">
                        <h2 class="ft-medium mb-1 fs-xl text-light">32</h2>
                        <p class="p-0 m-0 text-light fs-md">Bookmark jobs</p>
                        <i class="lni lni-heart"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-gravity-list with-icons">
                        <h4 class="mb-0 ft-medium">Recent Activities</h4>
                        <ul>
                            <li>
                                <i class="dash-icon-box ti-layers text-purple bg-light-purple"></i> Your job for <strong class="ft-medium text-dark"><a href="#">IOS Developer</a></strong> has been approved!
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>

                            <li>
                                <i class="dash-icon-box ti-star text-success bg-light-success"></i> Jodie Farrell left a review <div class="numerical-rating high" data-rating="5.0"></div> for<strong class="ft-medium text-dark"><a href="#"> Real Estate Logo</a></strong>
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>

                            <li>
                                <i class="dash-icon-box ti-heart text-warning bg-light-warning"></i> Someone bookmarked your <strong class="ft-medium text-dark"><a href="#">SEO Expert Job</a></strong> listing!
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>

                            <li>
                                <i class="dash-icon-box ti-star text-info bg-light-info"></i> Gracie Mahmood left a review <div class="numerical-rating mid" data-rating="3.8"></div> on <strong class="ft-medium text-dark"><a href="#">Product Design</a></strong>
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>

                            <li>
                                <i class="dash-icon-box ti-heart text-danger bg-light-danger"></i> Your Magento Developer job expire<strong class="ft-medium text-dark"><a href="#">Renew</a></strong> now it!
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>

                            <li>
                                <i class="dash-icon-box ti-star text-success bg-light-success"></i> Ethan Barrett left a review <div class="numerical-rating high" data-rating="4.7"></div> on <strong class="ft-medium text-dark"><a href="#">New Logo</a></strong>
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>

                            <li>
                                <i class="dash-icon-box ti-star text-purple bg-light-purple"></i> Your Magento Developer job expire <strong class="ft-medium text-dark"><a href="#">Renew</a></strong> now it.
                                <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-gravity-list invoices with-icons">
                        <h4 class="mb-0 ft-medium">Invoices</h4>
                        <ul>

                            <li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
                                <strong class="ft-medium text-dark">Starter Plan</strong>
                                <ul>
                                    <li class="unpaid">Unpaid</li>
                                    <li>Order: #20551</li>
                                    <li>Date: 01/08/2019</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
                                <strong class="ft-medium text-dark">Basic Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #20550</li>
                                    <li>Date: 01/07/2019</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="dash-icon-box ti-files text-danger bg-light-danger"></i>
                                <strong class="ft-medium text-dark">Extended Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #20549</li>
                                    <li>Date: 01/06/2019</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
                                <strong class="ft-medium text-dark">Platinum Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #20548</li>
                                    <li>Date: 01/05/2019</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
                                <strong class="ft-medium text-dark">Extended Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #20547</li>
                                    <li>Date: 01/04/2019</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="dash-icon-box ti-files text-info bg-light-info"></i>
                                <strong class="ft-medium text-dark">Platinum Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #20546</li>
                                    <li>Date: 01/03/2019</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    @endif
