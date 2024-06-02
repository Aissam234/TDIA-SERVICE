<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu with Icons</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .submenu-indicator {
            float: right;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href={{ route('index2') }} class="ml-4">
                <img src="{{ asset('vendors/images/TDIA-logo.png') }}" alt="" class="dark-logo" />
                <img src="{{ asset('vendors/images/TDIA-Dark-logo.png') }}" alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href={{ route('index2') }} class="custom-btn3">
                            <span class="micon bi bi-house" style="font-size: 22px; width: 22px; height: 22px;"></span>
                            <span class="mtext"><span id="animate1"></span></span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-people"></span>
                            <span class="mtext">Staff</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('profs') }}>Professors</a></li>
                            <li><a href={{ route('listeEtudiant') }}>Students</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-table"></span>
                            <span class="mtext">Grades Tables</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('datatable') }}>Add Grades</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-megaphone"></span>
                            <span class="mtext">Announcements</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('profs.annonce') }}>Add Announcement</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-person-x"></span>
                            <span class="mtext">Absences</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('absences.index') }}>Record Absences</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-book"></span>
                            <span class="mtext">Courses</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('cours-prof') }}">
                                    <i class="bi bi-book" aria-hidden="true"></i>
                                    Manage Courses
                                </a>
                                <a href="{{ route('archive-prof') }}">
                                    <i class="bi bi-book" aria-hidden="true"></i>
                                    Manage Archived courses
                                </a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-text"></span>
                            <span class="mtext">Report Management</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('reports.set.deadlines') }}">Set Deadlines</a></li>
                            <li><a href="{{ route('reports.index') }}">View Reports</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('profs.evaluation') }}" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-bar-chart"></span>
                            <span class="mtext">Evaluation</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href={{ route('profs.profile') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person"></span>
                            <span class="mtext">Profile</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href={{ route('profs.calendrie') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar4-week"></span>
                            <span class="mtext">Calendar</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href={{ route('video') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-play-circle"></span>
                            <span class="mtext">Video Ensah</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
