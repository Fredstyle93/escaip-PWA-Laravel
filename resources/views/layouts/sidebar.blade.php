<aside class="sidebar-l">
    <nav class="sidebar-wrapper">
        <ul class="sidebar-links">
            <a href="" class="sidebar-link-container ">
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

            {{-- <a href="index.html" class="sidebar-menu-link">
                <li class="sidebar-menu-items sidebar-menu-items-selected">
                    <span class="sprite sprite-sidebar-home"></span> <span class="sidebar-menu-items-name">Accueil</span>
                </li>
            </a> --}}
        </ul>
    </nav>
</aside>