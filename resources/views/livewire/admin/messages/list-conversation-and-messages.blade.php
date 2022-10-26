{{--<div class="container">--}}
{{--    <div class="pt-2 row">--}}
{{--        <div class="col-md-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Contacts</h3>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <ul class="contacts-list">--}}
{{--                        <li class="bg-warning">--}}
{{--                            <a href="#">--}}
{{--                                <img class="contacts-list-img" src="http://localhost:8000/noimage.png" alt="User Avatar">--}}
{{--                                <div class="contacts-list-info">--}}
{{--                                    <span class="contacts-list-name text-dark">--}}
{{--                                        Rossie Hoeger--}}
{{--                                        <small class="float-right contacts-list-date text-muted">16/11/2021</small>--}}
{{--                                    </span>--}}
{{--                                    <span class="contacts-list-msg text-secondary">Hi</span>--}}
{{--                                </div>--}}
{{--                                <!-- /.contacts-list-info -->--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <a href="#">--}}
{{--                                <img class="contacts-list-img" src="http://localhost:8000/noimage.png" alt="User Avatar">--}}

{{--                                <div class="contacts-list-info">--}}
{{--                                    <span class="contacts-list-name text-dark">--}}
{{--                                        Ashleigh Carter--}}
{{--                                        <small class="float-right contacts-list-date text-muted">30/11/2021</small>--}}
{{--                                    </span>--}}
{{--                                    <span class="contacts-list-msg text-secondary">Hi</span>--}}
{{--                                </div>--}}
{{--                                <!-- /.contacts-list-info -->--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <!-- End Contact Item -->--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card direct-chat direct-chat-primary">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Chat with--}}
{{--                        <span>--}}
{{--                            Rossie Hoeger--}}
{{--                        </span>--}}
{{--                    </h3>--}}
{{--                </div>--}}
{{--                <!-- /.card-header -->--}}
{{--                <div class="card-body">--}}
{{--                    <!-- Conversations are loaded here -->--}}
{{--                    <div class="direct-chat-messages" id="conversation">--}}
{{--                        <!-- Message. Default to the left -->--}}
{{--                        <div class="direct-chat-msg right">--}}
{{--                            <div class="clearfix direct-chat-infos">--}}
{{--                                <span class="float-left direct-chat-name">You</span>--}}
{{--                                <span class="float-right direct-chat-timestamp">16 Nov 11:52 pm</span>--}}
{{--                            </div>--}}
{{--                            <!-- /.direct-chat-infos -->--}}
{{--                            <img class="direct-chat-img" src="http://localhost:8000/storage/avatars/24HCF7MiZIgETjLJ1PUddPPseAWDSJEW9jVRRiy1.png" alt="message user image">--}}
{{--                            <!-- /.direct-chat-img -->--}}
{{--                            <div class="direct-chat-text">--}}
{{--                                Hi--}}
{{--                            </div>--}}
{{--                            <!-- /.direct-chat-text -->--}}
{{--                        </div>--}}
{{--                        <!-- /.direct-chat-msg -->--}}
{{--                    </div>--}}
{{--                    <!--/.direct-chat-messages-->--}}
{{--                </div>--}}
{{--                <!-- /.card-body -->--}}
{{--                <div class="card-footer">--}}
{{--                    <form action="#">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">--}}
{{--                            <span class="input-group-append">--}}
{{--                                <button type="button" class="btn btn-primary">Send</button>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <!-- /.card-footer-->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="_dashboard_content bg-white rounded mb-4">

    <div class="_dashboard_content_body">
        <!-- Convershion -->
        <div class="messages-container margin-top-0">
            <div class="messages-headline">
                <h4>Connor Griffin</h4>
                <a href="#" class="message-action"><i class="ti-trash"></i> Delete Conversation</a>
            </div>

            <div class="messages-container-inner">

                <!-- Messages -->
                <div class="dash-msg-inbox">
                    <ul>
                        @foreach($conversations as $conversation)
                        <li>
                            <a href="#">
                                <div class="dash-msg-avatar"><img src="assets/img/team-1.jpg" alt=""><span class="_user_status online"></span></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>{{ $conversation->receiver->fullName() }}</h5>

                                        <span> {{ $conversation->messages->last()?->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p>{{ $conversation->messages->last()?->body }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach

                        <li class="active-message">
                            <a href="#">
                                <div class="dash-msg-avatar"><img src="assets/img/team-2.jpg" alt=""><span class="_user_status offline"></span></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>George Howarth</h5>
                                        <span>2 hours ago</span>
                                    </div>
                                    <p>Hello, I am a web designer with 5 year..</p>
                                </div>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- Messages / End -->

                <!-- Message Content -->
                <div class="dash-msg-content">

                    <div class="message-plunch">
                        <div class="dash-msg-avatar"><img src="../../../image.flaticon.com/icons/png/512/145/145849.html" alt=""></div>
                        <div class="dash-msg-text"><p>Hello, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p></div>
                    </div>

                    <div class="message-plunch me">
                        <div class="dash-msg-avatar"><img src="../../../via.placeholder.com/400x400.png" alt=""></div>
                        <div class="dash-msg-text"><p>looked up one of the more obscure Latin words, consectetur, from a Lorem</p></div>
                    </div>

                    <div class="message-plunch">
                        <div class="dash-msg-avatar"><img src="../../../image.flaticon.com/icons/png/512/145/145849.html" alt=""></div>
                        <div class="dash-msg-text"><p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p></div>
                    </div>

                    <div class="message-plunch me">
                        <div class="dash-msg-avatar"><img src="../../../via.placeholder.com/400x400.png" alt=""></div>
                        <div class="dash-msg-text"><p>please consider donating a small sum to help pay for the hosting and bandwidth bill.</p></div>
                    </div>

                    <div class="message-plunch">
                        <div class="dash-msg-avatar"><img src="../../../image.flaticon.com/icons/png/512/145/145849.html" alt=""></div>
                        <div class="dash-msg-text"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p></div>
                    </div>

                    <div class="message-plunch me">
                        <div class="dash-msg-avatar"><img src="../../../via.placeholder.com/400x400.png" alt=""></div>
                        <div class="dash-msg-text"><p>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></div>
                    </div>

                    <div class="message-plunch">
                        <div class="dash-msg-avatar"><img src="../../../image.flaticon.com/icons/png/512/145/145849.html" alt=""></div>
                        <div class="dash-msg-text"><p>But I must explain to you how all this mistaken idea of denouncing pleasure</p></div>
                    </div>

                    <!-- Reply Area -->
                    <div class="clearfix"></div>
                    <div class="message-reply">
                        <textarea cols="40" rows="3" class="form-control with-light" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn theme-bg text-white">Send Message</button>
                    </div>

                </div>
                <!-- Message Content -->

            </div>

        </div>
    </div>
</div>
