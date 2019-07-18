<aside class="sidebar-l">
    <nav class="sidebar-wrapper">
        <ul class="sidebar-links">
            @auth
                <div class="sidebar-links-wrapper">
                    <a href="{{route('home')}}" class="sidebar-link-container ">
                        <li class="sidebar-link {{\Request::route()->getName() == 'home' || \Request::route()->getName() == 'welcome' ? 'is-active' : ''}}">
                            <img src="images/icons/home.svg" alt=""> <span class="sidebar-link-text"> {{__('Accueil')}} </span> 
                        </li>
                    </a>
                    <a href="{{route('profil')}}" class="sidebar-link-container ">
                        <li class="sidebar-link {{\Request::route()->getName() == 'profil' ? 'is-active' : ''}}">
                            <img src="images/users/profil.jpg" class="profile-img" alt=""> <span class="sidebar-link-text"> {{__('Mon profil')}} </span> 
                        </li>
                    </a>
                </div>
                <div class="sidebar-links-wrapper">
                    <a href="" class="sidebar-link-container {{\Request::route()->getName() == 'projects' ? 'is-active' : ''}}">
                        <li class="sidebar-link">
                            <img src="images/icons/portfolio-icon.svg" alt=""> <span class="sidebar-link-text"> {{__('Projets')}} </span> 
                        </li>
                    </a>
                    <a href="" class="sidebar-link-container {{\Request::route()->getName() == 'school' ? 'is-active' : ''}}">
                        <li class="sidebar-link">
                            <img src="images/icons/school-icon.svg" alt=""> <span class="sidebar-link-text"> {{__('Cours')}} </span> 
                        </li>
                    </a>
                    <a href="" class="sidebar-link-container {{\Request::route()->getName() == 'calendar' ? 'is-active' : ''}}">
                        <li class="sidebar-link">
                            <img src="images/icons/calendar-icon.svg" alt=""> <span class="sidebar-link-text"> {{__('Calendriers')}} </span> 
                        </li>
                    </a>
                </div>
            @else 
                <a href="{{route('welcome')}}" class="sidebar-link-container ">
                    <li class="sidebar-link {{\Request::route()->getName() == 'home' || \Request::route()->getName() == 'welcome' ? 'is-active' : ''}}">
                        <img src="images/icons/home.svg" alt=""> <span class="sidebar-link-text"> {{__('Accueil')}} </span> 
                    </li>
                </a>
                <a href="" class="sidebar-link-container {{\Request::route()->getName() == 'projects' ? 'is-active' : ''}}">
                    <li class="sidebar-link">
                        <img src="images/icons/portfolio-icon.svg" alt=""> <span class="sidebar-link-text"> {{__('Projets')}} </span> 
                    </li>
                </a>
                <a href="" class="sidebar-link-container {{\Request::route()->getName() == 'school' ? 'is-active' : ''}}">
                    <li class="sidebar-link">
                        <img src="images/icons/school-icon.svg" alt=""> <span class="sidebar-link-text"> {{__('Cours')}} </span> 
                    </li>
                </a>
                <a href="" class="sidebar-link-container {{\Request::route()->getName() == 'calendar' ? 'is-active' : ''}}">
                    <li class="sidebar-link">
                        <img src="images/icons/calendar-icon.svg" alt=""> <span class="sidebar-link-text"> {{__('Calendriers')}} </span> 
                    </li>
                </a>
            @endauth
        </ul>
    </nav>
</aside>