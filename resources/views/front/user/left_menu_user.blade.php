<div class="user-sec">
    <div class="avater">
        <a href="#">
            <img width="199" height="199" src="{{ asset(Auth::user()->cre_photo != "" ? 'img/user_photo/'.Auth::user()->cre_photo : 'img/male.jpg') }}" alt="">
        </a>
        <div class="venue-user">
            <h3>ID: #{{ Auth::user()->id }}</h3>
            <h4>{{ Auth::user()->cre_full_name }}</h4>
            <h4>{{ Auth::user()->cre_email }}</h4>
        </div>
        <div class="user-menu">
            <ul>
                <li><a href="{{url('user-panel')}}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{url('user-profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="{{url('user-venue')}}"><i class="fa fa-building"></i> Venue</a></li>
                <li><a href="{{url('user-vendors')}}"><i class="fa fa-th-list"></i> Vendors</a></li>
                <li><a href="{{url('user-inbox')}}"><i class="fa fa-inbox"></i> Inbox</a></li>
                <li><a href="{{url('user-settings')}}"><i class="fa fa-cogs"></i> Account Settings</a></li>
            </ul>
        </div>
        <div class="offers">
            <br>
            <br>
        </div>
    </div>
</div>

                    