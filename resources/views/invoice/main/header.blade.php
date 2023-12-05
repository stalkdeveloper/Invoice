<div class="top-bar box-shadow-2 grid-four common-bar">
    <div class="daily-task">
        <ul class="task-ullist">
            <li>
                <div class="toggle-wrap">
                    <figure>
                        <img src="{{asset('invoice/assets/image/hamburger.png')}}">
                    </figure>
                </div>
            </li>
            <li>
                <a class="workdairy-btn" href="work-dairy.html"> <img class="sidebar-icon"
                        src="assets/image/calc.png">
                    <p class="mobile-hide">work dairy</p>
                </a>
            </li>
            <li>
                <div class="select-dropdown custom-select ">
                    <button href="#" role="button" data-value="" class="select-dropdown__button"><span>Select
                            Project
                        </span> <i class="zmdi zmdi-chevron-down"></i>
                    </button>
                    <ul class="select-dropdown__list">
                        <li data-value="1" class="select-dropdown__list-item">Back on rythm</li>
                        <li data-value="2" class="select-dropdown__list-item">CB - CRM</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="select-dropdown custom-select ">
                    <button href="#" role="button" data-value="" class="select-dropdown__button"><span>Master
                        </span> <i class="zmdi zmdi-chevron-down"></i>
                    </button>
                    <ul class="select-dropdown__list">
                        <li data-value="1" class="select-dropdown__list-item">Department</li>
                        <li data-value="2" class="select-dropdown__list-item">Qualification</li>
                        <li data-value="3" class="select-dropdown__list-item">Skill Set</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown mobile-dropdown">

                    <label for="filter-switch-89" class="dropdown__options-filter">
                        <ul class="dropdown__filter" role="listbox" tabindex="-1">
                            <li class="dropdown__filter-selected" aria-selected="true">
                                <i class="fas fa-ellipsis-v"></i>

                            </li>
                            <li>
                                <ul class="dropdown__select">
                                    <li class="dropdown__select-option" role="option">
                                        <div class="select-dropdown custom-select">
                                            <button href="#" role="button" data-value=""
                                                class="select-dropdown__button"><span>Select Project
                                                </span> <i class="zmdi zmdi-chevron-down"></i>
                                            </button>
                                            <ul class="select-dropdown__list">
                                                <li data-value="1" class="select-dropdown__list-item">Back on
                                                    rythm</li>
                                                <li data-value="2" class="select-dropdown__list-item">CB - CRM
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown__select-option" role="option">
                                        <div class="select-dropdown custom-select">
                                            <button href="#" role="button" data-value=""
                                                class="select-dropdown__button"><span>Master
                                                </span> <i class="zmdi zmdi-chevron-down"></i>
                                            </button>
                                            <ul class="select-dropdown__list">
                                                <li data-value="1" class="select-dropdown__list-item">Department
                                                </li>
                                                <li data-value="2" class="select-dropdown__list-item">
                                                    Qualification</li>
                                                <li data-value="3" class="select-dropdown__list-item">Skill Set
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="profile-wrap">
        <div class="notification">
            <a href="notification.html">
                <p>2</p>
                <!-- <img src="assets/image/bell-icon.png"> -->
                <i class="fas fa-bell"></i>
            </a>
        </div>
        <div class="profile-detail">
            <div class="dropdown">

                <label for="filter-switch-3" class="dropdown__options-filter">
                    <ul class="dropdown__filter" role="listbox" tabindex="-1">
                        <li class="dropdown__filter-selected" aria-selected="true">
                            <span class="profile-icon"><img src="{{asset('invoice/assets/image/admin-profile.png')}}"></span>
                            <p class="profile-name">John
                                Marks</p>
                        </li>
                        <li>
                            <ul class="dropdown__select">
                                <li class="dropdown__select-option" role="option">
                                    <a href="my-profile.html">My profile</a>
                                </li>
                                <li class="dropdown__select-option" role="option">
                                    <a href="setting.html">Setting</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </label>
            </div>
        </div>
    </div>
</div>