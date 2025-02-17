<aside class="left-sidebar w-64 bg-gray-800 text-white min-h-screen">
    <div class="p-4">
        <!-- Logo and Sidebar Toggle -->
        <div class="brand-logo flex items-center justify-between">
            <a href="index.html" class="text-nowrap">
                <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ml-auto text-decoration-none text-xl block xl:hidden">
                <i class="ti ti-x"></i>
            </a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar-nav overflow-y-auto">
            <ul id="sidebarnav" class="space-y-4">
                <li class="nav-small-cap">
                    <i class="ti ti-dots text-xl"></i>
                    <span class="hidden md:inline">OTHER</span>
                </li>

                <!-- Menu Level -->
                <li class="sidebar-item">
                    <a class="sidebar-link cursor-pointer flex items-center gap-2" aria-expanded="false">
                        <i class="ti ti-box-multiple"></i>
                        <span class="hidden md:inline">Menu Level</span>
                    </a>
                    <ul class="pl-4 hidden">
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link flex items-center gap-2">
                                <div class="w-4 h-4 flex items-center justify-center rounded-full">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span>Level 1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link cursor-pointer flex items-center gap-2" aria-expanded="false">
                                <div class="w-4 h-4 flex items-center justify-center rounded-full">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span>Level 1.1</span>
                            </a>
                            <ul class="pl-6 hidden">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link flex items-center gap-2">
                                        <div class="w-4 h-4 flex items-center justify-center rounded-full">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span>Level 2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link cursor-pointer flex items-center gap-2" aria-expanded="false">
                                        <div class="w-4 h-4 flex items-center justify-center rounded-full">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span>Level 2.1</span>
                                    </a>
                                    <ul class="pl-8 hidden">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link flex items-center gap-2">
                                                <div class="w-4 h-4 flex items-center justify-center rounded-full">
                                                    <i class="ti ti-circle"></i>
                                                </div>
                                                <span>Level 3</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link flex items-center gap-2">
                                                <div class="w-4 h-4 flex items-center justify-center rounded-full">
                                                    <i class="ti ti-circle"></i>
                                                </div>
                                                <span>Level 3.1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- Disabled Item -->
                <li class="sidebar-item">
                    <a class="sidebar-link cursor-not-allowed flex items-center gap-2" aria-disabled="true">
                        <i class="ti ti-ban"></i>
                        <span>Disabled</span>
                    </a>
                </li>

                <!-- Other Items -->
                <li class="sidebar-item">
                    <a class="sidebar-link flex items-center gap-2" href="#sub">
                        <i class="ti ti-star"></i>
                        <div class="leading-tight">
                            <span>SubCaption</span>
                            <span class="text-xs">This is the subtitle</span>
                        </div>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link flex items-center justify-between" href="#chip">
                        <div class="flex items-center gap-2">
                            <i class="ti ti-award"></i>
                            <span>Chip</span>
                        </div>
                        <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs">9</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link flex items-center justify-between" href="#outlined">
                        <div class="flex items-center gap-2">
                            <i class="ti ti-mood-smile"></i>
                            <span>Outlined</span>
                        </div>
                        <span class="border border-blue-500 text-blue-500 rounded-full px-2 py-1 text-xs">Outline</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link flex items-center gap-2" href="https://google.com/" target="_blank">
                        <i class="ti ti-star"></i>
                        <span>External Link</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
