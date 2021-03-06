@extends('layouts.index')
<style>
    .container {
        max-width: 1170px;
        margin: auto;
    }

    img {
        max-width: 100%;
    }

    .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 25%;
        border-right: 1px solid #c4c4c4;
    }

    .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
    }

    .top_spac {
        margin: 20px 0 0;
    }


    .recent_heading {
        float: left;
        width: 25%;
    }

    .srch_bar {
        display: inline-block;
        text-align: right;
        width: 75%;
        padding:
    }

    .headind_srch {
        padding: 10px 29px 10px 20px;
        overflow: hidden;
        border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
        color: #f84a3e;
        font-size: 21px;
        margin: auto;
    }

    .srch_bar input {
        border: 1px solid #cdcdcd;
        border-width: 0 0 1px 0;
        width: 80%;
        padding: 2px 0 4px 6px;
        background: none;
    }

    .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
    }

    .srch_bar .input-group-addon {
        margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
        font-size: 15px;
        color: #464646;
        margin: 0 0 8px 0;
    }

    .chat_ib h5 span {
        font-size: 13px;
        float: right;
    }

    .chat_ib p {
        font-size: 14px;
        color: #989898;
        margin: auto
    }

    .chat_img {
        float: left;
        width: 11%;
    }

    .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
    }

    .chat_people {
        overflow: hidden;
        clear: both;
    }

    .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
        cursor: pointer;
    }

    .inbox_chat {
        height: 550px;
        overflow-y: scroll;
    }

    .active_chat {
        background: #ebebeb;
    }

    .incoming_msg_img {
        display: inline-block;
        width: 6%;
    }

    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
    }

    .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
    }

    .received_withd_msg {
        width: 57%;
    }

    .mesgs {
        float: left;
        padding: 30px 15px 0 25px;
        width: 75%;
    }

    .sent_msg p {
        background: #f84a3e none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0;
        color: #fff;
        padding: 5px 10px 5px 12px;
        width: 100%;
    }

    .outgoing_msg {
        overflow: hidden;
        margin: 26px 0 26px;
    }

    .sent_msg {
        float: right;
        width: 46%;
    }

    .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
    }

    .type_msg {
        border-top: 1px solid #c4c4c4;
        position: relative;
    }

    .msg_send_btn {
        background: #f84a3e none repeat scroll 0 0;
        border: medium none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        height: 33px;
        position: absolute;
        right: 0;
        top: 11px;
        width: 33px;
    }

    .messaging {
        padding: 0 0 50px 0;
    }

    .msg_history {
        height: 516px;
        overflow-y: auto;
    }
</style>
@section('content')
<!--inner Title Start -->
<div class="indx_title_main_wrapper">
    <div class="title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="indx_title_left_wrapper ms_cover">
                    {{-- <h2>{{$artistDetails->first_name.' '.$artistDetails->last_name}}</h2> --}}
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/profile/'.Request::segment(2)) }}">Profile</a></li>
                        <li class="breadcrumb-item">Message</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- inner Title End -->
<!-- contact_wrapper start -->
<div class="contact_section ms_cover">
    <div class="container">
        
        <div class="messaging">
            <div class="inbox_msg col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin: auto">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <input type="text" class="search-bar" placeholder="Search">
                                <span class="input-group-addon">
                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span> </div>
                        </div>
                    </div>
                    <div class="inbox_chat">
                        <div class="chat_list active_chat">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    @if (Request::segment(2))
                                    <h5>{{$artistDetails->first_name.' '.$artistDetails->last_name}} <span class="chat_date">...</span></h5>
                                    @endif
                                        
                                    <p></p>
                                </div>
                            </div>
                        </div>                                               
                    </div>
                </div>
                <div class="mesgs">
                    <div class="msg_history">
                        @if (Request::segment(2))
                        @foreach ($messages as $message)
                            @if ($message->sender === 'artist')
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>{{$message->message}}</p>
                                            <span class="time_date"> {{date('h:i A | M d Y', strtotime($message->created_at))}}</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>{{$message->message}}</p>
                                        <span class="time_date"> {{date('h:i A | M d Y', strtotime($message->created_at))}}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @endif
                        
                                                
                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <form method="POST" id="messageForm">
                            <input type="text" name="message" class="write_msg" placeholder="Type a message" required />
                            
                            <input type="hidden" id="artist_id" name="artist_id" value="{{Request::segment(2)}}">
                          
                            <input type="hidden" id="panel_member_id" name="panel_member_id" value="{{Session()->get('userId')}}">
                            <input type="hidden" id="sender" name="sender" value="panel">
                          
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <button class="msg_send_btn" type="submit" ><i class="fa fa-paper-plane"
                                    aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
<!-- contact_wrapper end -->
@endsection
<script>
    window.setInterval(function(){
        getMessage();
        getChatList();
    }, 3000);
    function getMessage() {
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
        var artist_id = $("#artist_id").val();
        var panel_member_id = $("#panel_member_id").val();
        var sender = $("#sender").val(); 
        var token = "{{ csrf_token() }}";       
        $.ajax({
        type: "POST",
        url: baseUrl+"getMessage",
        data: {artist_id:artist_id, panel_member_id:panel_member_id, sender:sender, _token:token},
        success: function (data) {            
            $(".msg_history").html(data);
            document.querySelector(".msg_history").scrollTo(0, document.querySelector(".msg_history").scrollHeight);
        },
        error: function (err) {
            //alert(JSON.stringify(err))
        }
        });
    }
    function changePanelChat(id) {
        $("#artist_id").val(id);
    }
    function getChatList() {
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
        var panel_member_id = $("#panel_member_id").val();
        var token = "{{ csrf_token() }}";
        $.ajax({
        type: "POST",
        url: baseUrl+"getChatListPanel",        
        data: {panel_member_id:panel_member_id, _token:token},
        success: function (data) {            
            $(".inbox_chat").html(data);            
        }
        });
    }
</script>