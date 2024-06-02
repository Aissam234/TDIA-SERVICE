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
            <a href={{ route('index') }} class="ml-4">
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
                        <a href={{ route('index') }} class="custom-btn3">
                            <span class="micon bi bi-house" style="font-size: 22px; width: 22px; height: 22px;"></span>
                            <span class="mtext"><span id="animate"></span></span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-people"></span>
                            <span class="mtext">Staff</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('our.profs') }}>Professors</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-table"></span>
                            <span class="mtext">Grades Tables</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('form') }}>View My Grades</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-book"></span>
                            <span class="mtext">Courses</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('cours-student') }}">View My Courses</a></li>
                            <li><a href="{{ route('archive-student') }}">Archived Courses</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-bar-chart"></span>
                            <span class="mtext">Evaluation</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href={{ route('student.evaluation') }}>See Evaluation Cards</a></li>
                            <li><a href={{ route('student.evaluation.create') }}>Create One</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-earmark-text"></span>
                            <span class="mtext">Reports</span>
                            <span class="submenu-indicator bi bi-chevron-down"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('reports.upload.form')}}"></i>Send Reports</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href={{ route('student.profile') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person"></span>
                            <span class="mtext">Profile</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href={{ route('form') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-journal"></span>
                            <span class="mtext">Your Grades</span>
                        </a>
                    </li>
                    <li>
                        <a href={{ route('user.calendar') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar4-week"></span>
                            <span class="mtext">Calendar</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href={{ route('annonce') }} class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-megaphone"></span>
                            <span class="mtext">Announcements</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href={{ route('student.video') }} class="dropdown-toggle no-arrow">
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
