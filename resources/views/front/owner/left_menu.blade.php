<div class="user-sec">
    <div class="avater">
        <a href="#">
            <img width="199" height="199" src="{{ asset(Auth::user()->cre_photo != "" ? 'img/profile_photo/'.Auth::user()->cre_photo : 'img/male.jpg') }}" alt="">
        </a>
        <div class="venue-user">
            <h3>ID: #{{ Auth::user()->id }}</h3>
            <h4>{{ Auth::user()->cre_full_name }}</h4>
            <h4>{{ Auth::user()->cre_email }}</h4>
        </div>
        <div class="user-menu">
            <ul>
                <li><a href="{{url('venue-panel')}}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{url('my-profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="{{url('my-venue')}}"><i class="fa fa-building"></i> My venue</a></li>
                <li><a href="{{url('my-hall-list')}}"><i class="fa fa-th-list"></i> My hall</a></li>
                <li><a href="{{url('add-hall')}}"><i class="fa fa-plus"></i> ADD NEW Hall</a></li>
                <li><a href="{{url('user-list')}}"><i class="fa fa-users"></i> User list</a></li>
                <li><a href="{{url('inbox')}}"><i class="fa fa-inbox"></i> Inbox</a></li>
                <li><a href="{{url('booking-manager')}}"><i class="fa fa-calendar"></i> Bookign Manager</a></li>
                <li><a href="{{url('settings')}}"><i class="fa fa-cogs"></i> Account Settings</a></li>
            </ul>
        </div>
        <div class="offers">
            <br>
            <br>
        </div>
    </div>
</div>

                    