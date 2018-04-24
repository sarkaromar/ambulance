<div class="user-sec">
    <div class="avater">
        <a href="#">
            <img width="199" height="199" src="{{ asset(Auth::user()->cre_photo != "" ? 'img/vendor_photo/'.Auth::user()->cre_photo : 'img/male.jpg') }}" alt="">
        </a>
        <div class="venue-user">
            <h3>ID: #{{ Auth::user()->id }}</h3>
            <h4>{{ Auth::user()->cre_full_name }}</h4>
            <h4>{{ Auth::user()->cre_email }}</h4>
        </div>
        <div class="user-menu">
            <ul>
                <li><a href="{{url('vendors-panel')}}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{url('vendors-profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="{{url('vendors-photos-upload')}}"><i class="fa fa-building"></i> Portfolio</a></li>
                <!-- <li><a href="{{url('vendors-venue')}}"><i class="fa fa-building"></i> Venue</a></li> -->
                <!-- <li><a href="{{url('vendors-vendors')}}"><i class="fa fa-th-list"></i> Vendors</a></li> -->
                <li><a href="{{url('vendors-booking-manager')}}"><i class="fa fa-inbox"></i> Vendor Manager</a></li>
                <li><a href="{{url('vendors-inbox')}}"><i class="fa fa-inbox"></i> Inbox</a></li>

                <li><a href="{{url('vendors-settings')}}"><i class="fa fa-cogs"></i> Account Settings</a></li>
            </ul>
        </div>
        <div class="offers">
            <br>
            <br>
        </div>
    </div>
</div>

                    