<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" data-theme-mode="light">
<!--begin::Head-->

<head>
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular & Laravel by
        Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.') }}ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
    <style>
        .ngx-charts .grid-panel.odd rect {
            fill: #f5f8fa;
        }

        .ngx-charts .grid-panel.even rect {
            fill: #f5f8fa;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header">
                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                    id="kt_app_header_container">
                    <!--begin::Sidebar mobile toggle-->

                    <div class="d-flex align-items-center d-block" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                            id="kt_app_sidebar_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Sidebar mobile toggle-->
                    <!--begin::Mobile logo-->

                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="/metronic8/demo1/../demo1/index.html" class="d-block">
                            <img alt="" style="height:35px!important" src="assets/dunesfactory-logo.png"
                                class="h-30px" />
                        </a>

                    </div>


                    <div class="d-flex flex-column" style="margin-top:12px; margin-left:2px;">
                        <div class="fw-bolder d-flex align-items-center fs-5" style="color:#35C7FF;">Workspace Name
                            <span _ngcontent-dbw-c51=""
                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Free</span>
                        </div><a href="#" class="fw-bold text-muted fs-7">Workspace URL</a>
                    </div>





























                    <!--end::Mobile logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">
                        <!--begin::Menu wrapper-->
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                            data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                                id="kt_app_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->


                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::Search-->
                            <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                                <!--begin::Search-->
                                <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                    <!--begin::Search toggle-->
                                    <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                        id="kt_header_search_toggle">
                                        <div
                                            class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                                        width="8.15546" height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Search toggle-->
                                    <!--begin::Menu-->

                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Search-->
                            <!--begin::Activities-->

                            <!--end::Activities-->
                            <!--begin::Notifications-->
                            <div class="app-navbar-item ms-1 ms-md-3">
                                <!--begin::Menu- wrapper-->
                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                fill="currentColor" />
                                            <path
                                                d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--begin::Menu-->

                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::Chat-->

                            <!--end::Chat-->
                            <!--begin::My apps links-->

                            <!--end::My apps links-->
                            <!--begin::Theme mode-->

                            <!--end::Theme mode-->
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="" />
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo"
                                                    src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                                    <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>
                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo1/../demo1/account/overview.html"
                                            class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo1/../demo1/apps/projects/list.html"
                                            class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span
                                                    class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/referrals.html"
                                                    class="menu-link px-5">Referrals</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/billing.html"
                                                    class="menu-link px-5">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/statements.html"
                                                    class="menu-link px-5">Payments</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/statements.html"
                                                    class="menu-link d-flex flex-stack px-5">Statements
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title="View your statements"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <span
                                                            class="form-check-label text-muted fs-7">Notifications</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo1/../demo1/account/statements.html"
                                            class="menu-link px-5">My Statements</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">Language
                                                <span
                                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                    <img class="w-15px h-15px rounded-1 ms-2"
                                                        src="{{ asset('media/flags/united-states.svg') }}"
                                                        alt="" /></span></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/settings.html"
                                                    class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="{{ asset('media/flags/united-states.svg') }}"
                                                            alt="" />
                                                    </span>English</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/settings.html"
                                                    class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="{{ asset('media/flags/spain.svg') }}"
                                                            alt="" />
                                                    </span>Spanish</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/settings.html"
                                                    class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="{{ asset('media/flags/germany.svg') }}"
                                                            alt="" />
                                                    </span>German</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/settings.html"
                                                    class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="{{ asset('media/flags/japan.svg') }}"
                                                            alt="" />
                                                    </span>Japanese</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/account/settings.html"
                                                    class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="{{ asset('media/flags/france.svg') }}"
                                                            alt="" />
                                                    </span>French</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="/metronic8/demo1/../demo1/account/settings.html"
                                            class="menu-link px-5">Account Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo1/../demo1/authentication/layouts/corporate/sign-in.html"
                                            class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                            <!--begin::Header menu toggle-->
                            <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-35px h-md-35px"
                                    id="kt_app_header_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="/metronic8/demo1/../demo1/index.html">
                            <img alt="Logo" style="height: 61px!important;" src="assets/duneslogo.png"
                                class="h-25px app-sidebar-logo-default" />
                            <img alt="Logo" style="height: 61px!important;" src="assets/duneslogo.png"
                                class="h-20px app-sidebar-logo-minimize" />
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Sidebar toggle-->
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                            <span class="svg-icon svg-icon-2 rotate-180">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Sidebar toggle-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::sidebar menu-->
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                        <!--begin::Menu wrapper-->
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                            data-kt-scroll-save-state="true">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-sub-indention px-3"
                                id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="2" y="2" width="9"
                                                        height="9" rx="2" fill="currentColor" />
                                                    <rect opacity="0.3" x="13" y="2"
                                                        width="9" height="9" rx="2"
                                                        fill="currentColor" />
                                                    <rect opacity="0.3" x="13" y="13"
                                                        width="9" height="9" rx="2"
                                                        fill="currentColor" />
                                                    <rect opacity="0.3" x="2" y="13"
                                                        width="9" height="9" rx="2"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Dashboards</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->

                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <div style="color:#9899ac" data-kt-menu-trigger="click"
                                    class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-list-task fs-2 me-2">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Task</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span style="color:#9899ac" class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-shop fs-2 menu-icon ng-star-inserted">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style="color:#9899ac" class="menu-title">Orders</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>







                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span style="color:#9899ac" class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-pc-display-horizontal fs-2 menu-icon ng-star-inserted">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style="color:#9899ac" class="menu-title">Workspace</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>


                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span style="color:#9899ac" class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-person-lines-fill fs-2 me-2">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style="color:#9899ac" class="menu-title">Leads & Customers</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>



                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span style="color:#9899ac" class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-cash-coin fs-2 menu-icon ng-star-inserted">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style="color:#9899ac" class="menu-title">Lead Transaction</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>


                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span style="color:#9899ac" class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-receipt-cutoff fs-2 me-2">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style="color:#9899ac" class="menu-title">Invoice</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>


                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span style="color:#9899ac" class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="bi bi-pc-display-horizontal fs-2 menu-icon ng-star-inserted">

                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style="color:#9899ac" class="menu-title">Workspace Setting</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                </div>










                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::sidebar menu-->
                    <!--begin::Footer-->
                    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                        <a href="https://preview.keenthemes.com/html/metronic/docs"
                            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                            title="200+ in-house components and 3rd-party plugins">
                            <span class="btn-label">Docs & Components</span>
                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                            <span class="svg-icon btn-icon svg-icon-2 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                        fill="currentColor" />
                                    <rect x="7" y="17" width="6" height="2"
                                        rx="1" fill="currentColor" />
                                    <rect x="7" y="12" width="10" height="2"
                                        rx="1" fill="currentColor" />
                                    <rect x="7" y="7" width="6" height="2"
                                        rx="1" fill="currentColor" />
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Main-->

                <!--begin::Page title your wanted settings-->
                <!--   <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                 
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        Default</h1>
                                 
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                     
                                        <li class="breadcrumb-item text-muted">
                                            <a href="/metronic8/demo1/../demo1/index.html"
                                                class="text-muted text-hover-primary">Home</a>
                                        </li>
                                  
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                        </li>
                                       
                                        <li class="breadcrumb-item text-muted">Dashboards</li>
                                      
                                    </ul>
                                  
                                </div>
                            
                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                               
                                    <a href="#"
                                        class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                                   
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_new_target">Add Target</a>
                                    
                                </div>
                                
                            </div>
                        
                        </div>-->
                <!--end::Toolbar-->
                <!--begin::Content
                        <div id="kt_app_content" class="app-content flex-column-fluid" class="d-block  d-xl-block">
                           
                            <div id="kt_app_content_container"
                                style="background-color:white;"class="app-container container-fluid">
                                <div class="card-header pt-5">
                                    <h4 class="card-title d-flex align-items-start flex-column"><span
                                            class="card-label fw-bolder fw-bolder fs-2">Announcements</span>
                                        <span class="text-gray-400 mt-1 fw-bolder fs-7">4 lessons, 3 hours 45
                                            minutes</span>
                                    </h4>
                                </div>-->


                <!-- blue vali picture -->

                <div class id="kt_content_container" class="container-xxl my-8 content flex-column-fluid">
                    <div class="container-xxl my-8 content flex-column-fluid">

                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Announcements</span>
                                    <span class="text-muted mt-1 fw-semibold fs-7">4lesson 45hours 33minutes</span>
                                </h3>

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Calendar-->
                                <div class="col-xxl-12">
                                    <!--begin::Engage widget 8-->
                                    <div class="card border-0 h-md-100 h-lg-100" data-theme="light"
                                        style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Row-->
                                            <div class="row align-items-center h-100">
                                                <!--begin::Col-->
                                                <div class="col-7 ps-xl-13">
                                                    <!--begin::Title-->
                                                    <div class="text-white mb-6 pt-6">
                                                        <span
                                                            class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get
                                                            best offer</span>
                                                        <span class="fs-2qx fw-bold">Upgrade Your Plan</span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <span
                                                        class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Flat
                                                        cartoony and illustrations with vivid unblended purple hair
                                                        lady</span>
                                                    <!--end::Text-->
                                                    <!--begin::Items-->
                                                    <div
                                                        class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-5 ">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <span class="symbol-label"
                                                                    style="background: #35C7FF">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-white">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                                                fill="currentColor"></path>
                                                                            <path opacity="0.3"
                                                                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Info-->
                                                            <div class="text-white">
                                                                <span
                                                                    class="fw-semibold d-block fs-8 opacity-75">Projects</span>
                                                                <span class="fw-bold fs-7">Up to 500</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <span class="symbol-label"
                                                                    style="background: #35C7FF">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-white">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Info-->
                                                            <div class="text-white">
                                                                <span
                                                                    class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
                                                                <span class="fw-bold fs-7">Unlimited</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Items-->
                                                    <!--begin::Action-->
                                                    <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                                        <a href="#" class="btn btn-success flex-shrink-0 me-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_upgrade_plan">Upgrade
                                                            Plan</a>
                                                        <a href="#" class="btn btn-primary flex-shrink-0"
                                                            style="background: rgba(255, 255, 255, 0.2)"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_app">Read
                                                            Guides</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-5 pt-10">
                                                    <!--begin::Illustration-->
                                                    <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                                        style="background-image:url('assets/media/svg/illustrations/easy/5.svg">
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage widget 8-->
                                </div>
                                <!--end::Calendar-->
                            </div>
                            <!--end::Card body-->
                        </div>

                    </div>
                </div>


                <div class id="kt_content_container" class="container-xxl my-8 content flex-column-fluid">
                    <div class="container-xxl my-8 content flex-column-fluid">

                        <div class="col-12">
                            <div class="d-flex">
                                <div class="card w-50 me-5 me-xl-10">
                                    <div
                                        class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                                        <div class="d-flex flex-stack flex-wrap px-9 pt-5 pb-3">
                                            <div class="me-2"><a href="./dashboards/performance.html"
                                                    class="fw-bolder text-hover-muted text-dark d-block fs-2">Monthly
                                                    Total
                                                    Sales</a><span class="text-gray-400 fw-bold">Oct 8 -
                                                    Oct 26 22</span></div>
                                            <div class="fs-2x fw-bolder text-gray-800 me-2 lh-1 ls-n2">
                                                $15,300 </div>
                                        </div>
                                        <div>
                                            <div _ngcontent-igv-c91="">
                                                <ngx-charts-bar-vertical-2d _ngcontent-igv-c91=""
                                                    class="ng-tns-c89-0 ng-star-inserted">
                                                    <ngx-charts-chart class="ng-tns-c89-0">
                                                        <div class="ngx-charts-outer" style="width: 600px;"><svg
                                                                class="ngx-charts" width="500" height="200">
                                                                <g class="bar-chart chart"
                                                                    transform="translate(117 , 10)">
                                                                    <g ngx-charts-grid-panel-series=""
                                                                        class="ng-tns-c89-0">
                                                                        <g ngx-charts-grid-panel=""
                                                                            class="grid-panel odd ng-star-inserted">
                                                                            <rect stroke="none" class="gridpanel"
                                                                                style="background-color: white;"
                                                                                height="128"
                                                                                width="33.33333333333333"
                                                                                x="14.333333333333334" y="0">
                                                                            </rect>
                                                                        </g>
                                                                        <g ngx-charts-grid-panel=""
                                                                            class="grid-panel even ng-star-inserted">
                                                                            <rect stroke="none" class="gridpanel"
                                                                                height="128"
                                                                                width="33.33333333333333"
                                                                                x="75.33333333333333" y="0">
                                                                            </rect>
                                                                        </g>
                                                                        <g ngx-charts-grid-panel=""
                                                                            class="grid-panel odd ng-star-inserted">
                                                                            <rect stroke="none" class="gridpanel"
                                                                                height="128"
                                                                                width="33.33333333333333"
                                                                                x="136.33333333333334" y="0">
                                                                            </rect>
                                                                        </g>
                                                                        <g ngx-charts-grid-panel=""
                                                                            class="grid-panel even ng-star-inserted">
                                                                            <rect stroke="none" class="gridpanel"
                                                                                height="128"
                                                                                width="33.33333333333333"
                                                                                x="197.33333333333334" y="0">
                                                                            </rect>
                                                                        </g>
                                                                        <g ngx-charts-grid-panel=""
                                                                            class="grid-panel odd ng-star-inserted">
                                                                            <rect stroke="none" class="gridpanel"
                                                                                height="128"
                                                                                width="33.33333333333333"
                                                                                x="258.3333333333333" y="0">
                                                                            </rect>
                                                                        </g>
                                                                        <g ngx-charts-grid-panel=""
                                                                            class="grid-panel even ng-star-inserted">
                                                                            <rect stroke="none" class="gridpanel"
                                                                                height="128"
                                                                                width="33.33333333333333"
                                                                                x="319.3333333333333" y="0">
                                                                            </rect>
                                                                        </g>
                                                                        <!---->
                                                                    </g>
                                                                    <g ngx-charts-x-axis=""
                                                                        class="ng-tns-c89-0 ng-star-inserted">
                                                                        <g class="x axis"
                                                                            transform="translate(0,133)">
                                                                            <g ngx-charts-x-axis-ticks=""
                                                                                class="ng-star-inserted">
                                                                                <g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(31,20)">
                                                                                        <title>China</title><text
                                                                                            stroke-width="0.01"
                                                                                            text-anchor="middle"
                                                                                            transform=""
                                                                                            style="font-size: 12px;">
                                                                                            China </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(92,20)">
                                                                                        <title>USA</title><text
                                                                                            stroke-width="0.01"
                                                                                            text-anchor="middle"
                                                                                            transform=""
                                                                                            style="font-size: 12px;">
                                                                                            USA </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(153,20)">
                                                                                        <title>Norway</title><text
                                                                                            stroke-width="0.01"
                                                                                            text-anchor="middle"
                                                                                            transform=""
                                                                                            style="font-size: 12px;">
                                                                                            Norway </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(214,20)">
                                                                                        <title>Japan</title><text
                                                                                            stroke-width="0.01"
                                                                                            text-anchor="middle"
                                                                                            transform=""
                                                                                            style="font-size: 12px;">
                                                                                            Japan </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(275,20)">
                                                                                        <title>Germany</title><text
                                                                                            stroke-width="0.01"
                                                                                            text-anchor="middle"
                                                                                            transform=""
                                                                                            style="font-size: 12px;">
                                                                                            Germany </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(336,20)">
                                                                                        <title>France</title><text
                                                                                            stroke-width="0.01"
                                                                                            text-anchor="middle"
                                                                                            transform=""
                                                                                            style="font-size: 12px;">
                                                                                            France </text>
                                                                                    </g>
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(31,20)"
                                                                                    class="ng-star-inserted">
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(92,20)"
                                                                                    class="ng-star-inserted">
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(153,20)"
                                                                                    class="ng-star-inserted">
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(214,20)"
                                                                                    class="ng-star-inserted">
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(275,20)"
                                                                                    class="ng-star-inserted">
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(336,20)"
                                                                                    class="ng-star-inserted">
                                                                                    <!---->
                                                                                </g>
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <g ngx-charts-axis-label=""
                                                                                class="ng-star-inserted"><text
                                                                                    stroke-width="0.01" x="184"
                                                                                    y="47"
                                                                                    text-anchor="middle"
                                                                                    transform=""> Country </text></g>
                                                                            <!---->
                                                                        </g>
                                                                    </g>
                                                                    <!---->
                                                                    <g ngx-charts-y-axis=""
                                                                        class="ng-tns-c89-0 ng-star-inserted">
                                                                        <g class="y axis"
                                                                            transform="translate(-5 , 0)">
                                                                            <g ngx-charts-y-axis-ticks=""
                                                                                class="ng-star-inserted">
                                                                                <g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(0,128)">
                                                                                        <title>0</title><text
                                                                                            stroke-width="0.01"
                                                                                            dy=".32em"
                                                                                            x="-9"
                                                                                            text-anchor="end"
                                                                                            style="font-size: 12px;"> 0
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(0,70.95320558416809)">
                                                                                        <title>1,000,000</title><text
                                                                                            stroke-width="0.01"
                                                                                            dy=".32em"
                                                                                            x="-9"
                                                                                            text-anchor="end"
                                                                                            style="font-size: 12px;">
                                                                                            1,000,000 </text>
                                                                                    </g>
                                                                                    <g class="tick ng-star-inserted"
                                                                                        transform="translate(0,13.906411168336177)">
                                                                                        <title>2,000,000</title><text
                                                                                            stroke-width="0.01"
                                                                                            dy=".32em"
                                                                                            x="-9"
                                                                                            text-anchor="end"
                                                                                            style="font-size: 12px;">
                                                                                            2,000,000 </text>
                                                                                    </g>
                                                                                    <!---->
                                                                                </g>
                                                                                <!---->
                                                                                <g transform="translate(0,128)"
                                                                                    class="ng-star-inserted">
                                                                                    <g transform="translate(5,0)"
                                                                                        class="ng-star-inserted">
                                                                                        <line x1="0"
                                                                                            class="gridline-path gridline-path-horizontal ng-star-inserted"
                                                                                            x2="368"></line>
                                                                                        <!---->
                                                                                        <!---->
                                                                                    </g>
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(0,70.95320558416809)"
                                                                                    class="ng-star-inserted">
                                                                                    <g transform="translate(5,0)"
                                                                                        class="ng-star-inserted">
                                                                                        <line x1="0"
                                                                                            class="gridline-path gridline-path-horizontal ng-star-inserted"
                                                                                            x2="368"></line>
                                                                                        <!---->
                                                                                        <!---->
                                                                                    </g>
                                                                                    <!---->
                                                                                </g>
                                                                                <g transform="translate(0,13.906411168336177)"
                                                                                    class="ng-star-inserted">
                                                                                    <g transform="translate(5,0)"
                                                                                        class="ng-star-inserted">
                                                                                        <line x1="0"
                                                                                            class="gridline-path gridline-path-horizontal ng-star-inserted"
                                                                                            x2="368"></line>
                                                                                        <!---->
                                                                                        <!---->
                                                                                    </g>
                                                                                    <!---->
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <g ngx-charts-axis-label=""
                                                                                class="ng-star-inserted"><text
                                                                                    stroke-width="0.01" x="-64"
                                                                                    y="-87"
                                                                                    text-anchor="middle"
                                                                                    transform="rotate(270)"> Sales
                                                                                </text></g>
                                                                            <!---->
                                                                        </g>
                                                                    </g>
                                                                    <!---->
                                                                    <g class="ng-tns-c89-0 ng-star-inserted">
                                                                        <g ngx-charts-series-vertical=""
                                                                            class="ng-tns-c88-1 ng-tns-c89-0 ng-trigger ng-trigger-animationState ng-star-inserted"
                                                                            transform="translate(21, 0)">
                                                                            <g class="ng-tns-c88-1 ng-star-inserted"
                                                                                style="">
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-1 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradarjpm"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M3,0h0a3,3 0 0 1 3,3v122v3h-3h0h-3v-3v-122a3,3 0 0 1 3,-3z"
                                                                                        aria-label="China 2018 2,243,772"
                                                                                        fill="url(#gradarjpm)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-1 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="grada4jvc"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M17,57.95965722007405h0a3,3 0 0 1 3,3v64v3h-3h0h-3v-3v-64a3,3 0 0 1 3,-3z"
                                                                                        aria-label="China 2017 1,227,770"
                                                                                        fill="url(#grada4jvc)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </g>
                                                                        <g ngx-charts-series-vertical=""
                                                                            class="ng-tns-c88-2 ng-tns-c89-0 ng-trigger ng-trigger-animationState ng-star-inserted"
                                                                            transform="translate(82, 0)">
                                                                            <g class="ng-tns-c88-2 ng-star-inserted"
                                                                                style="">
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-2 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradan4py"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M3,63.765309487773266h0a3,3 0 0 1 3,3v58v3h-3h0h-3v-3v-58a3,3 0 0 1 3,-3z"
                                                                                        aria-label="USA 2018 1,126,000"
                                                                                        fill="url(#gradan4py)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-2 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradaizls"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M17,84.37825590122347h0a3,3 0 0 1 3,3v37v3h-3h0h-3v-3v-37a3,3 0 0 1 3,-3z"
                                                                                        aria-label="USA 2017 764,666"
                                                                                        fill="url(#gradaizls)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </g>
                                                                        <g ngx-charts-series-vertical=""
                                                                            class="ng-tns-c88-3 ng-tns-c89-0 ng-trigger ng-trigger-animationState ng-star-inserted"
                                                                            transform="translate(143, 0)">
                                                                            <g class="ng-tns-c88-3 ng-star-inserted"
                                                                                style="">
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-3 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradaenxi"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M3,111.10188379211435h0a3,3 0 0 1 3,3v10v3h-3h0h-3v-3v-10a3,3 0 0 1 3,-3z"
                                                                                        aria-label="Norway 2018 296,215"
                                                                                        fill="url(#gradaenxi)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-3 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradaugvx"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M17,116.0702602581724h0a3,3 0 0 1 3,3v5v3h-3h0h-3v-3v-5a3,3 0 0 1 3,-3z"
                                                                                        aria-label="Norway 2017 209,122"
                                                                                        fill="url(#gradaugvx)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </g>
                                                                        <g ngx-charts-series-vertical=""
                                                                            class="ng-tns-c88-4 ng-tns-c89-0 ng-trigger ng-trigger-animationState ng-star-inserted"
                                                                            transform="translate(204, 0)">
                                                                            <g class="ng-tns-c88-4 ng-star-inserted"
                                                                                style="">
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-4 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradaxg7v"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M3,113.31826584875824h0a3,3 0 0 1 3,3v8v3h-3h0h-3v-3v-8a3,3 0 0 1 3,-3z"
                                                                                        aria-label="Japan 2018 257,363"
                                                                                        fill="url(#gradaxg7v)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-4 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradamot0"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img" tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M17,116.28544076670892h0a3,3 0 0 1 3,3v5v3h-3h0h-3v-3v-5a3,3 0 0 1 3,-3z"
                                                                                        aria-label="Japan 2017 205,350"
                                                                                        fill="url(#gradamot0)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </g>
                                                                        <g ngx-charts-series-vertical=""
                                                                            class="ng-tns-c88-5 ng-tns-c89-0 ng-trigger ng-trigger-animationState ng-star-inserted"
                                                                            transform="translate(265, 0)">
                                                                            <g class="ng-tns-c88-5 ng-star-inserted"
                                                                                style="">
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-5 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradanw7i"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img"
                                                                                        tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M3,116.77604319868507h0a3,3 0 0 1 3,3v5v3h-3h0h-3v-3v-5a3,3 0 0 1 3,-3z"
                                                                                        aria-label="Germany 2018 196,750"
                                                                                        fill="url(#gradanw7i)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-5 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradamkud"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img"
                                                                                        tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M17,120.6269300089314h0a3,3 0 0 1 3,3v1v3h-3h0h-3v-3v-1a3,3 0 0 1 3,-3z"
                                                                                        aria-label="Germany 2017 129,246"
                                                                                        fill="url(#gradamkud)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </g>
                                                                        <g ngx-charts-series-vertical=""
                                                                            class="ng-tns-c88-6 ng-tns-c89-0 ng-trigger ng-trigger-animationState ng-star-inserted"
                                                                            transform="translate(326, 0)">
                                                                            <g class="ng-tns-c88-6 ng-star-inserted"
                                                                                style="">
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-6 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="grada86lk"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(147, 112, 219); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img"
                                                                                        tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M3,116.32725606701572h0a3,3 0 0 1 3,3v5v3h-3h0h-3v-3v-5a3,3 0 0 1 3,-3z"
                                                                                        aria-label="France 2018 204,617"
                                                                                        fill="url(#grada86lk)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <g ngx-charts-bar="" ngx-tooltip=""
                                                                                    class="ng-tns-c88-6 ng-trigger ng-trigger-animationState ng-star-inserted">
                                                                                    <defs class="ng-star-inserted"
                                                                                        style="">
                                                                                        <g
                                                                                            ngx-charts-svg-linear-gradient="">
                                                                                            <linearGradient
                                                                                                id="gradagi38"
                                                                                                x1="0%"
                                                                                                y1="100%"
                                                                                                x2="0%"
                                                                                                y2="0%">
                                                                                                <stop offset="0%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 0.2;">
                                                                                                </stop>
                                                                                                <stop offset="100%"
                                                                                                    class="ng-star-inserted"
                                                                                                    style="stop-color: rgb(135, 206, 250); stop-opacity: 1;">
                                                                                                </stop>
                                                                                                <!---->
                                                                                            </linearGradient>
                                                                                        </g>
                                                                                    </defs>
                                                                                    <!---->
                                                                                    <path stroke="none"
                                                                                        role="img"
                                                                                        tabIndex="-1"
                                                                                        class="bar"
                                                                                        d="M17,119.45456133689163h0a3,3 0 0 1 3,3v2v3h-3h0h-3v-3v-2a3,3 0 0 1 3,-3z"
                                                                                        aria-label="France 2017 149,797"
                                                                                        fill="url(#gradagi38)"></path>
                                                                                </g>
                                                                                <!---->
                                                                                <!---->
                                                                            </g>
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </g>
                                                                        <!---->
                                                                    </g>
                                                                    <!---->
                                                                </g>
                                                                <!---->
                                                            </svg>
                                                            <!---->
                                                            <ngx-charts-legend class="chart-legend ng-star-inserted">
                                                                <div style="width: 100px;">
                                                                    <header class="legend-title ng-star-inserted">
                                                                        <span class="legend-title-text">Legend</span>
                                                                    </header>
                                                                    <!---->
                                                                    <div class="legend-wrap">
                                                                        <ul class="legend-labels"
                                                                            style="max-height: 155px;">
                                                                            <li class="legend-label ng-star-inserted">
                                                                                <ngx-charts-legend-entry><span
                                                                                        tabindex="-1"
                                                                                        title="2018"><span
                                                                                            class="legend-label-color"
                                                                                            style="background-color: rgb(147, 112, 219);"></span><span
                                                                                            class="legend-label-text">
                                                                                            2018 </span></span>
                                                                                </ngx-charts-legend-entry>
                                                                            </li>
                                                                            <li class="legend-label ng-star-inserted">
                                                                                <ngx-charts-legend-entry><span
                                                                                        tabindex="-1"
                                                                                        title="2017"><span
                                                                                            class="legend-label-color"
                                                                                            style="background-color: rgb(135, 206, 250);"></span><span
                                                                                            class="legend-label-text">
                                                                                            2017 </span></span>
                                                                                </ngx-charts-legend-entry>
                                                                            </li>
                                                                            <!---->
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </ngx-charts-legend>
                                                            <!---->
                                                        </div>
                                                    </ngx-charts-chart>
                                                </ngx-charts-bar-vertical-2d>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush w-50">
                                    <div class="card-header pt-5">
                                        <div class="card-title d-flex flex-column float-right"><a
                                                href="./dashboards/performance.html"
                                                class="fs-2 fw-bolder text-hover-muted text-dark me-2">Today's
                                                Topper</a><span class="text-gray-400 pt-1 fw-bold">Gaurav</span></div>
                                        <div class="card-title d-flex flex-column"><span
                                                class="fs-2x fw-bolder text-gray-800 me-2 lh-1 ls-n2">7,000</span><span
                                                class="text-gray-400 pt-1 fw-bold fs-6">Today's
                                                sale</span></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="text-center me-6 mt-4">
                                                <div class="symbol symbol-100px symbol-circle"><img alt="Pic"
                                                        src="assets/media/avatars/300-9.jpg"></div>
                                                <p class="text-gray-400 pt-1 fw-bold fs-6 mb-0 mt-2">
                                                    Gaurav</p>
                                            </div>
                                            <div class="d-flex flex-column content-justify-center flex-grow-1">
                                                <div class="d-flex fs-6 fw-bold align-items-center my-1">
                                                    <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">This Month
                                                        Target
                                                    </div>
                                                    <div
                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                    </div>
                                                    <div class="ms-auto fw-boldest text-gray-700 text-end"> 1,00,000
                                                    </div>
                                                </div>
                                                <div class="d-flex fs-6 fw-bold align-items-center my-1">
                                                    <div class="bullet w-8px h-6px rounded-2 bg-success me-3"></div>
                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">This Month
                                                        Sale
                                                    </div>
                                                    <div
                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                    </div>
                                                    <div class="ms-auto fw-boldest text-gray-700 text-end"> 25,000
                                                    </div>
                                                </div>
                                                <div class="d-flex fs-6 fw-bold align-items-center my-1">
                                                    <div class="bullet w-8px h-6px rounded-2 bg-info me-3"></div>
                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0"> Yesterday
                                                        Sale
                                                    </div>
                                                    <div
                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                    </div>
                                                    <div class="ms-auto fw-boldest text-gray-700 text-end">4,000
                                                    </div>
                                                </div>
                                                <div class="d-flex fs-6 fw-bold align-items-center">
                                                    <div class="bullet w-8px h-6px rounded-2 me-3"
                                                        style="background-color: #E4E6EF;"></div>
                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">Last Month
                                                        Sale
                                                    </div>
                                                    <div
                                                        class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                    </div>
                                                    <div class="ms-auto fw-boldest text-gray-700 text-end"> 80,000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class id="kt_content_container" class="container-xxl my-8 content flex-column-fluid">
                    <div class="container-xxl my-8 content flex-column-fluid">

                        <div class="col-12">
                            <div class="card h-md-100">
                                <div class="card-header position-relative py-0 border-bottom-2"><a
                                        href="./dashboards/performance.html" class="card-title fw-bolder fs-2">Team
                                        Performance</a>
                                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4"
                                        role="tablist">
                                        <li class="nav-item p-0 ms-0" role="presentation"><a
                                                data-kt-timeline-widget-4="tab" data-bs-toggle="tab"
                                                href="#kt_timeline_widget_4_tab_day"
                                                class="nav-link btn btn-color-gray-400 flex-center px-3 active"
                                                aria-selected="true" role="tab"><span
                                                    class="nav-text fw-bold fs-4 mb-3">Day</span><span
                                                    class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span></a>
                                        </li>
                                        <li class="nav-item p-0 ms-0" role="presentation"><a
                                                data-kt-timeline-widget-4="tab" data-bs-toggle="tab"
                                                href="#kt_timeline_widget_4_tab_week"
                                                class="nav-link btn btn-color-gray-400 flex-center px-3"
                                                aria-selected="false" tabindex="-1" role="tab"><span
                                                    class="nav-text fw-bold fs-4 mb-3">Week</span><span
                                                    class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span></a>
                                        </li>
                                        <li class="nav-item p-0 ms-0" role="presentation"><a
                                                data-kt-timeline-widget-4="tab" data-bs-toggle="tab"
                                                href="#kt_timeline_widget_4_tab_month"
                                                class="nav-link btn btn-color-gray-400 flex-center px-3"
                                                aria-selected="false" tabindex="-1" role="tab"><span
                                                    class="nav-text fw-bold fs-4 mb-3">Month</span><span
                                                    class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="tab-content">


                                        <div class="table-responsive pb-10">
                                            <div id="kt_timeline_widget_4_4"
                                                data-kt-timeline-widget-4-image-root="assets/media/"
                                                class="vis-timeline-custom h-350px min-w-700px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class id="kt_content_container" class="container-xxl my-8 content flex-column-fluid">
                    <div class="container-xxl my-8 content flex-column-fluid">
                        <div class="row">

                            <div class="col-sm-4">
                                <!--begin::Lists Widget 19-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Heading-->
                                    <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                        style="background-image:url('/assets/top-green.png" data-theme="light">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column text-white pt-15">
                                            <span class="fw-bold fs-2x mb-3">My Tasks</span>
                                            <div class="fs-4 text-white">
                                                <span class="opacity-75">You have</span>
                                                <span class="position-relative d-inline-block">
                                                    <a href="/metronic8/demo1/../demo1/pages/user-profile/projects.html"
                                                        class="link-white opacity-75-hover fw-bold d-block mb-1">4
                                                        tasks</a>
                                                    <!--begin::Separator-->
                                                    <span
                                                        class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                                    <!--end::Separator-->
                                                </span>
                                                <span class="opacity-75">to comlete</span>
                                            </div>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar pt-5">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="10" y="10" width="4"
                                                            height="4" rx="2" fill="currentColor">
                                                        </rect>
                                                        <rect x="17" y="10" width="4"
                                                            height="4" rx="2" fill="currentColor">
                                                        </rect>
                                                        <rect x="3" y="10" width="4"
                                                            height="4" rx="2" fill="currentColor">
                                                        </rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member
                                                                Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4"
                                                            href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="card-body mt-n20">
                                        <!--begin::Stats-->
                                        <div class="mt-n20 position-relative">
                                            <!--begin::Row-->
                                            <div class="row g-3 g-lg-6">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Items-->
                                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-5 mb-8">
                                                            <span class="symbol-label">
                                                                <!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Stats-->
                                                        <div class="m-0">
                                                            <!--begin::Number-->
                                                            <span
                                                                class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                            <!--end::Number-->
                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Items-->
                                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-5 mb-8">
                                                            <span class="symbol-label">
                                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                                            fill="currentColor"></path>
                                                                        <path opacity="0.3"
                                                                            d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Stats-->
                                                        <div class="m-0">
                                                            <!--begin::Number-->
                                                            <span
                                                                class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                            <!--end::Number-->
                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Items-->
                                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-5 mb-8">
                                                            <span class="symbol-label">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M14 18V16H10V18L9 20H15L14 18Z"
                                                                            fill="currentColor"></path>
                                                                        <path opacity="0.3"
                                                                            d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Stats-->
                                                        <div class="m-0">
                                                            <!--begin::Number-->
                                                            <span
                                                                class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                            <!--end::Number-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-500 fw-semibold fs-6">Avg.
                                                                Score</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Items-->
                                                    <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-30px me-5 mb-8">
                                                            <span class="symbol-label">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Stats-->
                                                        <div class="m-0">
                                                            <!--begin::Number-->
                                                            <span
                                                                class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                            <!--end::Number-->
                                                            <!--begin::Desc-->
                                                            <span class="text-gray-500 fw-semibold fs-6">Hours
                                                                Learned</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Lists Widget 19-->
                            </div>



                            <div class="col-sm-4">
                                <div class="card card-flush h-xl-100">
                                    <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                        style="background-image: url('assets/media/svg/shapes/top-green.png');">
                                        <h3 class="card-title align-items-start flex-column text-white pt-15"><span
                                                class="fw-bolder fs-2x mb-3">FB Robot,1</span>
                                            <div class="fs-4 text-white"><span class="opacity-75">Send
                                                    Bulk</span><span class="position-relative d-inline-block"><a
                                                        href="../../demo1/pages/user-profile/projects.html"
                                                        class="link-white opacity-75-hover fw-bolder d-block mb-1">Emails</a><span
                                                        class="position-absolute opacity-50 bottom-0 start-0 border-2 border-white border-bottom w-100"></span></span><span
                                                    class="opacity-75">Without block a</span></div>
                                        </h3>
                                        <div class="card-toolbar pt-5"><button data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true"
                                                class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"><span
                                                    class="svg-icon svg-icon-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24px"
                                                        height="24px" viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5"
                                                                height="5" rx="1" fill="currentColor">
                                                            </rect>
                                                            <rect x="14" y="5" width="5"
                                                                height="5" rx="1" fill="currentColor"
                                                                opacity="0.3"></rect>
                                                            <rect x="5" y="14" width="5"
                                                                height="5" rx="1" fill="currentColor"
                                                                opacity="0.3"></rect>
                                                            <rect x="14" y="14" width="5"
                                                                height="5" rx="1" fill="currentColor"
                                                                opacity="0.3"></rect>
                                                        </g>
                                                    </svg></span></button>
                                            <div data-kt-menu="true"
                                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px">
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                        Links</div>
                                                </div>
                                                <div class="separator mb-3 opacity-75"></div>
                                                <div class="menu-item px-3"><a href="#"
                                                        class="menu-link px-3">Click to copy English video link</a>
                                                </div>
                                                <div class="menu-item px-3"><a href="#"
                                                        class="menu-link px-3">Click to copy Hindi video link</a>
                                                </div>
                                                <div class="menu-item px-3"><a href="#"
                                                        class="menu-link px-3">Click to download links</a></div>
                                                <div class="separator mt-3 opacity-75"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1"
                                        style="margin-top: -100px;">
                                        <div class="d-flex align-items-center mb-6">
                                            <div class="symbol symbol-45px w-40px me-5"><span
                                                    class="symbol-label bg-lighten"><span
                                                        class="svg-icon svg-icon-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                fill="currentColor"></path>
                                                        </svg></span></span></div>
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1"><a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bolder">Min.
                                                        Selling Price</a></div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bolder fs-2 text-gray-800 pe-1">37</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <div class="symbol symbol-45px w-40px me-5"><span
                                                    class="symbol-label bg-lighten"><span
                                                        class="svg-icon svg-icon-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect x="2" y="2" width="9"
                                                                height="9" rx="2" fill="currentColor">
                                                            </rect>
                                                            <rect opacity="0.3" x="13" y="2"
                                                                width="9" height="9" rx="2"
                                                                fill="currentColor"></rect>
                                                            <rect opacity="0.3" x="13" y="13"
                                                                width="9" height="9" rx="2"
                                                                fill="currentColor"></rect>
                                                            <rect opacity="0.3" x="2" y="13"
                                                                width="9" height="9" rx="2"
                                                                fill="currentColor"></rect>
                                                        </svg></span></span></div>
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1"><a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bolder">Selling
                                                        Price</a></div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bolder fs-2 text-gray-800 pe-1">6</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <div class="symbol symbol-45px w-40px me-5"><span
                                                    class="symbol-label bg-lighten"><span
                                                        class="svg-icon svg-icon-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z"
                                                                fill="currentColor"></path>
                                                        </svg></span></span></div>
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1"><a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bolder">Reseller
                                                        Selling Price</a></div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bolder fs-2 text-gray-800 pe-1">4</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px w-40px me-5"><span
                                                    class="symbol-label bg-lighten"><span
                                                        class="svg-icon svg-icon-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                                                fill="currentColor"></path>
                                                            <rect x="7" y="17" width="6"
                                                                height="2" rx="1" fill="currentColor">
                                                            </rect>
                                                            <rect x="7" y="12" width="10"
                                                                height="2" rx="1" fill="currentColor">
                                                            </rect>
                                                            <rect x="7" y="7" width="6"
                                                                height="2" rx="1" fill="currentColor">
                                                            </rect>
                                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                fill="currentColor"></path>
                                                        </svg></span></span></div>
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1"><a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bolder">Resller
                                                        Min. Selling Price</a></div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bolder fs-2 text-gray-800 pe-1">822</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




























































                    <!--end::App-->
                    <!--begin::App layout builder-->
                    <div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true"
                        data-kt-drawer-name="app-settings" data-kt-drawer-activate="true"
                        data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
                        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
                        data-kt-drawer-close="#kt_app_layout_builder_close">
                        <!--begin::Card-->
                        <div class="card border-0 shadow-none rounded-0 w-100">
                            <!--begin::Card header-->
                            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                                id="kt_app_layout_builder_header"
                                style="background-image:url('{{ asset('media/misc/layout/header-bg.') }}jpg')">
                                <!--begin::Card title-->
                                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">Metronic Builder
                                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">Get your product
                                        deeply
                                        customized</small>
                                </h3>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon bg-white bg-opacity-25 btn-color-white p-0 w-20px h-20px rounded-1"
                                        id="kt_app_layout_builder_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body position-relative" id="kt_app_layout_builder_body">
                                <!--begin::Content-->
                                <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5"
                                    data-kt-scroll="true" data-kt-scroll-height="auto"
                                    data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                                    data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                                    data-kt-scroll-offset="5px">
                                    <!--begin::Form-->
                                    <form class="form" method="POST" id="kt_app_layout_builder_form"
                                        action="/metronic8/demo1/index.php">
                                        <input type="hidden" id="kt_app_layout_builder_action"
                                            name="layout-builder[action]" />
                                        <!--begin::Card body-->
                                        <div class="card-body p-0">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <!--begin::Heading-->
                                                <div class="mb-6">
                                                    <h4 class="fw-bold text-dark">Theme Mode</h4>
                                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">Enjoy
                                                        Dark &
                                                        Light modes.
                                                        <a class="fw-semibold"
                                                            href="https://preview.keenthemes.com/html/metronic/docs/getting-started/dark-mode"
                                                            target="_blank">See docs</a>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Options-->
                                                <div class="row" data-kt-buttons="true"
                                                    data-kt-buttons-target=".form-check-image,.form-check-input">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Option-->
                                                        <label class="form-check-image form-check-success">
                                                            <!--begin::Image-->
                                                            <div class="form-check-wrapper">
                                                                <img src="{{ asset('assets/media/preview/demos/demo1/light-ltr.png') }}"
                                                                    class="mw-100" alt="" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Check-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                                <input class="form-check-input" type="radio"
                                                                    value="light" name="theme_mode"
                                                                    id="kt_layout_builder_theme_mode_light" />
                                                                <!--begin::Label-->
                                                                <div class="form-check-label text-gray-700">Light
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Check-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Option-->
                                                        <label class="form-check-image form-check-success">
                                                            <!--begin::Image-->
                                                            <div class="form-check-wrapper">
                                                                <img src="{{ asset('assets/media/preview/demos/demo1/dark-ltr.png') }}"
                                                                    class="mw-100" alt="" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Check-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                                <input class="form-check-input" type="radio"
                                                                    value="dark" name="theme_mode"
                                                                    id="kt_layout_builder_theme_mode_dark" />
                                                                <!--begin::Label-->
                                                                <div class="form-check-label text-gray-700">Dark
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Check-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Separator-->
                                            <!--begin::Form group-->
                                            <div class="form-group d-flex flex-stack">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-column">
                                                    <h4 class="fw-bold text-dark">RTL Mode</h4>
                                                    <div class="fs-7 fw-semibold text-muted">Change Language
                                                        Direction.
                                                        <a class="fw-semibold"
                                                            href="https://preview.keenthemes.com/html/metronic/docs/getting-started/rtl"
                                                            target="_blank">See docs</a>
                                                    </div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Option-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Check-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                                        <input type="hidden" value="false"
                                                            name="layout-builder[layout][app][general][rtl]" />
                                                        <input class="form-check-input w-45px h-30px"
                                                            type="checkbox" value="true"
                                                            name="layout-builder[layout][app][general][rtl]"
                                                            id="kt_builder_rtl" />
                                                        <!--begin::Label-->
                                                        <label class="form-check-label"
                                                            for="kt_builder_rtl"></label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Check-->
                                                </div>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Separator-->
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-column mb-4">
                                                    <h4 class="fw-bold text-dark">Width Mode</h4>
                                                    <div class="fs-7 fw-semibold text-muted">Page width options
                                                    </div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Check-->
                                                    <div
                                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                                        <input class="form-check-input" type="radio"
                                                            checked="checked" value="default"
                                                            id="kt_builder_page_width_default"
                                                            name="layout-builder[layout][app][general][page-width]" />
                                                        <!--begin::Label-->
                                                        <label
                                                            class="form-check-label text-gray-700 fw-bold text-nowrap"
                                                            for="kt_builder_page_width_default">Default</label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Check-->
                                                    <!--begin::Check-->
                                                    <div
                                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="fluid" id="kt_builder_page_width_fluid"
                                                            name="layout-builder[layout][app][general][page-width]" />
                                                        <!--begin::Label-->
                                                        <label
                                                            class="form-check-label text-gray-700 fw-bold text-nowrap"
                                                            for="kt_builder_page_width_fluid">Fluid</label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Check-->
                                                    <!--begin::Check-->
                                                    <div
                                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="fixed" id="kt_builder_page_width_fixed"
                                                            name="layout-builder[layout][app][general][page-width]" />
                                                        <!--begin::Label-->
                                                        <label
                                                            class="form-check-label text-gray-700 fw-bold text-nowrap"
                                                            for="kt_builder_page_width_fixed">Fixed</label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Check-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Separator-->
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-column mb-4">
                                                    <h4 class="fw-bold text-dark">Menu Icon</h4>
                                                    <div class="fs-7 fw-semibold text-muted">Sidebar menu icon
                                                        options
                                                    </div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Check-->
                                                    <div
                                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                                        <input class="form-check-input" type="radio"
                                                            checked="checked" value="svg"
                                                            id="kt_builder_icon_svg"
                                                            name="layout-builder[layout][app][sidebar][default][menu][icon-type]" />
                                                        <!--begin::Label-->
                                                        <label
                                                            class="form-check-label text-gray-700 fw-bold text-nowrap"
                                                            for="kt_builder_icon_svg">SVG Duotone</label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Check-->
                                                    <!--begin::Check-->
                                                    <div
                                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                                        <input class="form-check-input" type="radio"
                                                            value="font" id="kt_builder_icon_font"
                                                            name="layout-builder[layout][app][sidebar][default][menu][icon-type]" />
                                                        <!--begin::Label-->
                                                        <label
                                                            class="form-check-label text-gray-700 fw-bold text-nowrap"
                                                            for="kt_builder_icon_font">Font Icons</label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Check-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Separator-->
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <!--begin::Heading-->
                                                <div class="mb-6">
                                                    <h4 class="fw-bold text-dark">Layouts</h4>
                                                    <span class="fw-semibold text-muted fs-7 lh-1">4 main
                                                        layouts.</span>
                                                    <a href="/metronic8/demo1/../demo1/layout-builder.html"
                                                        class="fw-semibold text-primary">More layout options</a>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Options-->
                                                <div class="row gy-3" data-kt-buttons="true"
                                                    data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="form-check-image form-check-success active active">
                                                            <!--begin::Image-->
                                                            <div class="form-check-wrapper">
                                                                <img src="{{ asset('media/misc/layout/dark-sidebar.png') }}"
                                                                    class="mw-100" alt="" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Check-->
                                                            <div
                                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    checked="checked" value="dark-sidebar"
                                                                    name="layout-builder[layout][app][general][layout]" />
                                                                <!--begin::Label-->
                                                                <div class="form-check-label text-gray-700">Dark
                                                                    Sidebar
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Check-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Option-->
                                                        <label class="form-check-image form-check-success">
                                                            <!--begin::Image-->
                                                            <div class="form-check-wrapper">
                                                                <img src="{{ asset('media/misc/layout/light-sidebar.png') }}"
                                                                    class="mw-100" alt="" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Check-->
                                                            <div
                                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    value="light-sidebar"
                                                                    name="layout-builder[layout][app][general][layout]" />
                                                                <!--begin::Label-->
                                                                <div class="form-check-label text-gray-700">Light
                                                                    Sidebar
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Check-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Option-->
                                                        <label class="form-check-image form-check-success">
                                                            <!--begin::Image-->
                                                            <div class="form-check-wrapper">
                                                                <img src="{{ asset('media/misc/layout/dark-header.png') }}"
                                                                    class="mw-100" alt="" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Check-->
                                                            <div
                                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    value="dark-header"
                                                                    name="layout-builder[layout][app][general][layout]" />
                                                                <!--begin::Label-->
                                                                <div class="form-check-label text-gray-700">Dark
                                                                    Header
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Check-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Option-->
                                                        <label class="form-check-image form-check-success">
                                                            <!--begin::Image-->
                                                            <div class="form-check-wrapper">
                                                                <img src="{{ asset('media/misc/layout/light-header.png') }}"
                                                                    class="mw-100" alt="" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Check-->
                                                            <div
                                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    value="light-header"
                                                                    name="layout-builder[layout][app][general][layout]" />
                                                                <!--begin::Label-->
                                                                <div class="form-check-label text-gray-700">Light
                                                                    Header
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Check-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Card body-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0"
                                id="kt_app_layout_builder_footer">
                                <button type="button" id="kt_app_layout_builder_preview"
                                    class="btn btn-primary flex-grow-1 fw-semibold">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Preview</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                                <button type="button" id="kt_app_layout_builder_reset"
                                    class="btn btn-light flex-grow-1 fw-semibold">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Reset</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::App layout builder-->

                    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
                        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
                        <!--begin::Messenger-->
                        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
                            <!--begin::Card header-->
                            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                                <!--begin::Title-->
                                <div class="card-title">
                                    <!--begin::User-->
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <a href="#"
                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                                            Cox</a>
                                        <!--begin::Info-->
                                        <div class="mb-0 lh-1">
                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                            <span class="fs-7 fw-semibold text-muted">Active</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <div class="me-2">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="bi bi-three-dots fs-3"></i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Contacts
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_users_search">Add Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a contact email to send an invitation"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Groups</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="tooltip" title="Coming soon">Create
                                                            Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="tooltip" title="Coming soon">Invite
                                                            Members</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="tooltip"
                                                            title="Coming soon">Settings</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-light-primary"
                                        id="kt_drawer_chat_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body" id="kt_drawer_chat_messenger_body">
                                <!--begin::Messages-->
                                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
                                    data-kt-scroll-offset="0px">
                                    <!--begin::Message(in)-->
                                    <div class="d-flex justify-content-start mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">How likely are you to recommend our
                                                company
                                                to your
                                                friends and family ?</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(in)-->
                                    <!--begin::Message(out)-->
                                    <div class="d-flex justify-content-end mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-end">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Details-->
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                data-kt-element="message-text">Hey there, we’re just writing to let
                                                you
                                                know that
                                                you’ve been subscribed to a repository on GitHub.</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(out)-->
                                    <!--begin::Message(in)-->
                                    <div class="d-flex justify-content-start mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">Ok, Understood!</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(in)-->
                                    <!--begin::Message(out)-->
                                    <div class="d-flex justify-content-end mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-end">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Details-->
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                data-kt-element="message-text">You’ll receive notifications for all
                                                issues,
                                                pull
                                                requests!</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(out)-->
                                    <!--begin::Message(in)-->
                                    <div class="d-flex justify-content-start mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">You can unwatch this repository
                                                immediately
                                                by clicking
                                                here:
                                                <a href="https://keenthemes.com">Keenthemes.com</a>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(in)-->
                                    <!--begin::Message(out)-->
                                    <div class="d-flex justify-content-end mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-end">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Details-->
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-1.') }}jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                data-kt-element="message-text">Most purchased Business courses
                                                during this
                                                sale!</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(out)-->
                                    <!--begin::Message(in)-->
                                    <div class="d-flex justify-content-start mb-10">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">Company BBQ to celebrate the last
                                                quater
                                                achievements
                                                and goals. Food and drinks provided</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(in)-->
                                    <!--begin::Message(template for out)-->
                                    <div class="d-flex justify-content-end mb-10 d-none"
                                        data-kt-element="template-out">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-end">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Details-->
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-1.') }}jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                data-kt-element="message-text"></div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(template for out)-->
                                    <!--begin::Message(template for in)-->
                                    <div class="d-flex justify-content-start mb-10 d-none"
                                        data-kt-element="template-in">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start">
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Text-->
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">Right before vacation season we
                                                have the
                                                next Big Deal
                                                for you.</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Message(template for in)-->
                                </div>
                                <!--end::Messages-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                                <!--begin::Input-->
                                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                                    placeholder="Type a message"></textarea>
                                <!--end::Input-->
                                <!--begin:Toolbar-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center me-2">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                            type="button" data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-paperclip fs-3"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1"
                                            type="button" data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-upload fs-3"></i>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Send-->
                                    <button class="btn btn-primary" type="button"
                                        data-kt-element="send">Send</button>
                                    <!--end::Send-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Messenger-->
                    </div>
                    <!--end::Chat drawer-->
                    <!--begin::Chat drawer-->
                    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
                        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
                        data-kt-drawer-close="#kt_drawer_shopping_cart_close">
                        <!--begin::Messenger-->
                        <div class="card card-flush w-100 rounded-0">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Title-->
                                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                                <!--end::Title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-light-primary"
                                        id="kt_drawer_shopping_cart_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body hover-scroll-overlay-y h-400px pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
                                            <span class="text-gray-400 fw-semibold d-block">The best kitchen
                                                gadget in
                                                2022</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-1.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
                                            <span class="text-gray-400 fw-semibold d-block">Smart tool for
                                                cooking</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-3.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
                                            <span class="text-gray-400 fw-semibold d-block">Professional camera
                                                for
                                                edge</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-8.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D
                                                Printer</a>
                                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique
                                                objekts</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-26.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                                            <span class="text-gray-400 fw-semibold d-block">Perfect animation
                                                tool</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-21.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline
                                                etc</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-34.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column me-3">
                                        <!--begin::Section-->
                                        <div class="mb-3">
                                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D
                                                Printer</a>
                                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique
                                                objekts</span>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                                            <span class="text-muted mx-2">for</span>
                                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Pic-->
                                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                                        <img src="{{ asset('media/stock/600x400/img-27.jpg') }}" alt="" />
                                    </div>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <span class="fw-bold text-gray-600">Total</span>
                                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <span class="fw-bold text-gray-600">Sub total</span>
                                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                                </div>
                                <!--end::Item-->
                                <!--end::Action-->
                                <div class="d-flex justify-content-end mt-9">
                                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace
                                        Order</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Messenger-->
                    </div>
                    <!--end::Chat drawer-->
                    <!--end::Drawers-->
                    <!--begin::Engage drawers-->
                    <!--begin::Demos drawer-->
                    <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true"
                        data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_engage_demos_toggle"
                        data-kt-drawer-close="#kt_engage_demos_close">
                        <!--begin::Card-->
                        <div class="card shadow-none rounded-0 w-100">
                            <!--begin::Header-->
                            <div class="card-header" id="kt_engage_demos_header">
                                <h3 class="card-title fw-bold text-gray-700">Demos</h3>
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                                        id="kt_engage_demos_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body" id="kt_engage_demos_body">
                                <!--begin::Content-->
                                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body"
                                    data-kt-scroll-dependencies="#kt_engage_demos_header"
                                    data-kt-scroll-offset="5px">
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Heading-->
                                        <div class="mb-7">
                                            <div class="d-flex flex-stack">
                                                <h3 class="mb-0">Metronic Licenses</h3>
                                                <a href="https://themeforest.net/licenses/standard"
                                                    class="fw-semibold" target="_blank">License FAQs</a>
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::License-->
                                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div
                                                            class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">
                                                            Regular
                                                            License</div>
                                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="popover"
                                                            data-bs-custom-class="popover-inverse"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
                                                    </div>
                                                    <div class="fs-7 text-muted">For single end product used by
                                                        you or one
                                                        client
                                                    </div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                                    <span class="text-dark fs-1 fw-bold">49</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::License-->
                                        <!--begin::License-->
                                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div
                                                            class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">
                                                            Extended
                                                            License</div>
                                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="popover"
                                                            data-bs-custom-class="popover-inverse"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                                    </div>
                                                    <div class="fs-7 text-muted">For single SaaS app with paying
                                                        users
                                                    </div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                                    <span class="text-dark fs-1 fw-bold">969</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::License-->
                                        <!--begin::License-->
                                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div
                                                            class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">
                                                            Custom
                                                            License</div>
                                                    </div>
                                                    <div class="fs-7 text-muted">Reach us for custom license
                                                        offers.</div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <a href="https://keenthemes.com/contact"
                                                        class="btn btn-sm btn-success" target="_blank">Contact
                                                        Us</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::License-->
                                        <!--begin::Purchase-->
                                        <a href="https://1.envato.market/EA4JP"
                                            class="btn btn-primary fw-bold mb-15 w-100">Buy
                                            Now</a>
                                        <!--end::Purchase-->
                                        <!--begin::Demos-->
                                        <div class="mb-0">
                                            <h3 class="fw-bold text-center mb-6">30 Metronic Demos</h3>
                                            <!--begin::Row-->
                                            <div class="row g-5">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo1/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                                class="btn btn-sm btn-success shadow">Metronic
                                                                Original</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo2/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                                class="btn btn-sm btn-success shadow">SaaS App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo6/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                                                class="btn btn-sm btn-success shadow">POS
                                                                System</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo3/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                                class="btn btn-sm btn-success shadow">New
                                                                Trend</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo8/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                                class="btn btn-sm btn-success shadow">Analytics
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo10/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                                                class="btn btn-sm btn-success shadow">Project
                                                                Grid</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo11/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo11/index.html"
                                                                class="btn btn-sm btn-success shadow">Finance
                                                                Planner</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo4/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                                class="btn btn-sm btn-success shadow">Jobs
                                                                Site</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo27/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo27/index.html"
                                                                class="btn btn-sm btn-success shadow">Databox
                                                                Dashboard</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo20/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                                class="btn btn-sm btn-success shadow">CRM
                                                                Software</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo25/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo25/index.html"
                                                                class="btn btn-sm btn-success shadow">User Guiding
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo30/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo30/index.html"
                                                                class="btn btn-sm btn-success shadow">Sales
                                                                Tracking
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo23/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo23/index.html"
                                                                class="btn btn-sm btn-success shadow">Member
                                                                Dashboard</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo29/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo29/index.html"
                                                                class="btn btn-sm btn-success shadow">Project
                                                                Workspace</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo14/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                                class="btn btn-sm btn-success shadow">Project
                                                                Workplace</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo24/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo24/index.html"
                                                                class="btn btn-sm btn-success shadow">Helpdesk
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo26/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo26/index.html"
                                                                class="btn btn-sm btn-success shadow">Planable
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo7/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo7/index.html"
                                                                class="btn btn-sm btn-success shadow">CRM
                                                                Dashboard</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo22/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                                                class="btn btn-sm btn-success shadow">Media
                                                                Publisher</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo28/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo28/index.html"
                                                                class="btn btn-sm btn-success shadow">eCommerce
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo19/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                                class="btn btn-sm btn-success shadow">Reports
                                                                Panel</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo9/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo9/index.html"
                                                                class="btn btn-sm btn-success shadow">Sales
                                                                Manager</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo13/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo13/index.html"
                                                                class="btn btn-sm btn-success shadow">Classic
                                                                Dashboard</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo16/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                                                class="btn btn-sm btn-success shadow">Podcast
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo18/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                                class="btn btn-sm btn-success shadow">Goal
                                                                Tracking</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo21/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                                class="btn btn-sm btn-success shadow">Monochrome
                                                                App</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo12/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                                                class="btn btn-sm btn-success shadow">Data
                                                                Analyzer</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo17/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                                                class="btn btn-sm btn-success shadow">Events
                                                                Scheduler</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo15/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                                                class="btn btn-sm btn-success shadow">Crypto
                                                                Planner</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Demo-->
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('assets/media/preview/demos/demo5/light-ltr.png') }}"
                                                                alt="demo" class="w-')}}100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                                class="btn btn-sm btn-success shadow">Support
                                                                Forum</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Demo-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Demos-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Demos drawer-->
                    <!--begin::Help drawer-->
                    <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help"
                        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
                        <!--begin::Card-->
                        <div class="card shadow-none rounded-0 w-100">
                            <!--begin::Header-->
                            <div class="card-header" id="kt_help_header">
                                <h5 class="card-title fw-semibold text-gray-600">Learn & Get Inspired</h5>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                        id="kt_help_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body" id="kt_help_body">
                                <!--begin::Content-->
                                <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                                    data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
                                    <!--begin::Support-->
                                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                                        <!--begin::Heading-->
                                        <h2 class="fw-bold mb-5">Support at
                                            <a href="https://devs.keenthemes.com"
                                                class="">devs.keenthemes.com</a>
                                        </h2>
                                        <!--end::Heading-->
                                        <!--begin::Description-->
                                        <div class="fs-5 fw-semibold mb-5">
                                            <span class="text-gray-500">Join our developers community to find
                                                answer to
                                                your question
                                                and help others.</span>
                                            <a class="explore-link d-none"
                                                href="https://keenthemes.com/licensing">FAQs</a>
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Link-->
                                        <a href="https://devs.keenthemes.com"
                                            class="btn btn-lg explore-btn-primary w-100">Get
                                            Support</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Support-->
                                    <!--begin::Link-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Icon-->
                                        <div
                                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column me-2 me-lg-5">
                                                <!--begin::Title-->
                                                <a href="https://preview.keenthemes.com/html/metronic/docs"
                                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation
                                                    &
                                                    Videos</a>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and
                                                    video
                                                    tutorials, to
                                                    live demos and code examples to get started.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Icon-->
                                        <div
                                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column me-2 me-lg-5">
                                                <!--begin::Title-->
                                                <a href="https://preview.keenthemes.com/html/metronic/docs//base/utilities"
                                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins
                                                    &
                                                    Components</a>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our
                                                    300+
                                                    in-house
                                                    components and customized 3rd-party plugins.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Icon-->
                                        <div
                                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                                            <span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column me-2 me-lg-5">
                                                <!--begin::Title-->
                                                <a href="/metronic8/demo1/../demo1/layout-builder.html"
                                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout
                                                    Builder</a>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Build your
                                                    layout,
                                                    preview it and
                                                    export the HTML for server side integration.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Icon-->
                                        <div
                                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                            <span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column me-2 me-lg-5">
                                                <!--begin::Title-->
                                                <a href="https://devs.keenthemes.com/metronic"
                                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic
                                                    Downloads</a>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Download your
                                                    prefered
                                                    framework and
                                                    demo with one click.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Icon-->
                                        <div
                                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                                            <span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column me-2 me-lg-5">
                                                <!--begin::Title-->
                                                <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                    class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's
                                                    New ?</a>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features
                                                    and
                                                    improvements
                                                    added with our users feedback in mind.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13"
                                                        width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Help drawer-->
                    <!--end::Engage drawers-->
                    <!--begin::Engage modals-->
                    <!--end::Engage modals-->
                    <!--begin::Engage toolbar-->
                    <div
                        class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
                        <!--begin::Demos drawer toggle-->
                        <button id="kt_engage_demos_toggle"
                            class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
                            title="Check out 30 more demos" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-dismiss="click" data-bs-trigger="hover">
                            <span id="kt_engage_demos_label">Demos</span>
                        </button>
                        <!--end::Demos drawer toggle-->
                        <!--begin::Help drawer toggle-->
                        <button id="kt_help_toggle"
                            class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
                            title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
                        <!--end::Help drawer toggle-->
                    </div>
                    <!--end::Engage toolbar-->
                    <!--begin::Scrolltop-->
                    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                        <span class="svg-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="13" y="6" width="13"
                                    height="2" rx="1" transform="rotate(90 13 6)"
                                    fill="currentColor" />
                                <path
                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Scrolltop-->
                    <!--begin::Modals-->
                    <!--begin::Modal - Upgrade plan-->
                    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-xl">
                            <!--begin::Modal content-->
                            <div class="modal-content rounded">
                                <!--begin::Modal header-->
                                <div class="modal-header justify-content-end border-0 pb-0">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                        data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <h1 class="mb-3">Upgrade a Plan</h1>
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please
                                            check
                                            <a href="#" class="link-primary fw-bold">Pricing
                                                Guidelines</a>.
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Plans-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Nav group-->
                                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                                            <button
                                                class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                                data-kt-plan="month">Monthly</button>
                                            <button
                                                class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                                data-kt-plan="annual">Annual</button>
                                        </div>
                                        <!--end::Nav group-->
                                        <!--begin::Row-->
                                        <div class="row mt-10">
                                            <!--begin::Col-->
                                            <div class="col-lg-6 mb-10 mb-lg-0">
                                                <!--begin::Tabs-->
                                                <div class="nav flex-column">
                                                    <!--begin::Tab link-->
                                                    <label
                                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                                        data-bs-toggle="tab"
                                                        data-bs-target="#kt_upgrade_plan_startup">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="plan" checked="checked"
                                                                    value="startup" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                    Startup
                                                                </div>
                                                                <div class="fw-semibold opacity-75">Best for
                                                                    startups
                                                                </div>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            <span class="mb-2">$</span>
                                                            <span class="fs-3x fw-bold"
                                                                data-kt-plan-price-month="39"
                                                                data-kt-plan-price-annual="399">39</span>
                                                            <span class="fs-7 opacity-50">/
                                                                <span data-kt-element="period">Mon</span></span>
                                                        </div>
                                                        <!--end::Price-->
                                                    </label>
                                                    <!--end::Tab link-->
                                                    <!--begin::Tab link-->
                                                    <label
                                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                        data-bs-toggle="tab"
                                                        data-bs-target="#kt_upgrade_plan_advanced">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="plan" value="advanced" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                    Advanced
                                                                </div>
                                                                <div class="fw-semibold opacity-75">Best for 100+
                                                                    team
                                                                    size</div>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            <span class="mb-2">$</span>
                                                            <span class="fs-3x fw-bold"
                                                                data-kt-plan-price-month="339"
                                                                data-kt-plan-price-annual="3399">339</span>
                                                            <span class="fs-7 opacity-50">/
                                                                <span data-kt-element="period">Mon</span></span>
                                                        </div>
                                                        <!--end::Price-->
                                                    </label>
                                                    <!--end::Tab link-->
                                                    <!--begin::Tab link-->
                                                    <label
                                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                        data-bs-toggle="tab"
                                                        data-bs-target="#kt_upgrade_plan_enterprise">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="plan" value="enterprise" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                    Enterprise
                                                                    <span
                                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                                </div>
                                                                <div class="fw-semibold opacity-75">Best value for
                                                                    1000+
                                                                    team</div>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            <span class="mb-2">$</span>
                                                            <span class="fs-3x fw-bold"
                                                                data-kt-plan-price-month="999"
                                                                data-kt-plan-price-annual="9999">999</span>
                                                            <span class="fs-7 opacity-50">/
                                                                <span data-kt-element="period">Mon</span></span>
                                                        </div>
                                                        <!--end::Price-->
                                                    </label>
                                                    <!--end::Tab link-->
                                                    <!--begin::Tab link-->
                                                    <label
                                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                        data-bs-toggle="tab"
                                                        data-bs-target="#kt_upgrade_plan_custom">
                                                        <!--end::Description-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Radio-->
                                                            <div
                                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                <input class="form-check-input" type="radio"
                                                                    name="plan" value="custom" />
                                                            </div>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                    Custom
                                                                </div>
                                                                <div class="fw-semibold opacity-75">Requet a
                                                                    custom
                                                                    license</div>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Description-->
                                                        <!--begin::Price-->
                                                        <div class="ms-5">
                                                            <a href="#" class="btn btn-sm btn-success">Contact
                                                                Us</a>
                                                        </div>
                                                        <!--end::Price-->
                                                    </label>
                                                    <!--end::Tab link-->
                                                </div>
                                                <!--end::Tabs-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <!--begin::Tab content-->
                                                <div class="tab-content rounded h-100 bg-light p-10">
                                                    <!--begin::Tab Pane-->
                                                    <div class="tab-pane fade show active"
                                                        id="kt_upgrade_plan_startup">
                                                        <!--begin::Heading-->
                                                        <div class="pb-5">
                                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?
                                                            </h2>
                                                            <div class="text-muted fw-semibold">Optimal for 10+
                                                                team size
                                                                and new
                                                                startup</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div class="pt-1">
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up
                                                                    to 10
                                                                    Active Users</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up
                                                                    to 30
                                                                    Project Integrations</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">Finance
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <rect x="7" y="15.3137"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7 15.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.41422" y="7"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 8.41422 7)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <rect x="7" y="15.3137"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7 15.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.41422" y="7"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 8.41422 7)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                                    Platform</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <rect x="7" y="15.3137"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7 15.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.41422" y="7"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 8.41422 7)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited
                                                                    Cloud
                                                                    Space</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <rect x="7" y="15.3137"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7 15.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.41422" y="7"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 8.41422 7)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Tab Pane-->
                                                    <!--begin::Tab Pane-->
                                                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                                        <!--begin::Heading-->
                                                        <div class="pb-5">
                                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?
                                                            </h2>
                                                            <div class="text-muted fw-semibold">Optimal for 100+
                                                                team size
                                                                and grown
                                                                company</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div class="pt-1">
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up
                                                                    to 10
                                                                    Active Users</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up
                                                                    to 30
                                                                    Project Integrations</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                                    Platform</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <rect x="7" y="15.3137"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7 15.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.41422" y="7"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 8.41422 7)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited
                                                                    Cloud
                                                                    Space</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <rect x="7" y="15.3137"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7 15.3137)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.41422" y="7"
                                                                            width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(45 8.41422 7)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Tab Pane-->
                                                    <!--begin::Tab Pane-->
                                                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                                        <!--begin::Heading-->
                                                        <div class="pb-5">
                                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?
                                                            </h2>
                                                            <div class="text-muted fw-semibold">Optimal for 1000+
                                                                team and
                                                                enterpise
                                                            </div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div class="pt-1">
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up
                                                                    to 10
                                                                    Active Users</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up
                                                                    to 30
                                                                    Project Integrations</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                                    Platform</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                                    Cloud Space</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Tab Pane-->
                                                    <!--begin::Tab Pane-->
                                                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                                        <!--begin::Heading-->
                                                        <div class="pb-5">
                                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?
                                                            </h2>
                                                            <div class="text-muted fw-semibold">Optimal for
                                                                corporations
                                                            </div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div class="pt-1">
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                                    Users</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                                    Project Integrations</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                                    Module</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-7">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                                    Platform</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                                    Cloud Space</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2"
                                                                            y="2" width="20"
                                                                            height="20" rx="10"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Tab Pane-->
                                                </div>
                                                <!--end::Tab content-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Plans-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center flex-row-fluid pt-12">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary"
                                            id="kt_modal_upgrade_plan_btn">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Upgrade Plan</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Upgrade plan-->
                    <!--begin::Modal - Create App-->
                    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-900px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2>Create App</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                        data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-lg-10 px-lg-10">
                                    <!--begin::Stepper-->
                                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                        id="kt_modal_create_app_stepper">
                                        <!--begin::Aside-->
                                        <div
                                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                            <!--begin::Nav-->
                                            <div class="stepper-nav ps-lg-10">
                                                <!--begin::Step 1-->
                                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                                    <!--begin::Wrapper-->
                                                    <div class="stepper-wrapper">
                                                        <!--begin::Icon-->
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">1</span>
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Label-->
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Details</h3>
                                                            <div class="stepper-desc">Name your App</div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Line-->
                                                    <div class="stepper-line h-40px"></div>
                                                    <!--end::Line-->
                                                </div>
                                                <!--end::Step 1-->
                                                <!--begin::Step 2-->
                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                    <!--begin::Wrapper-->
                                                    <div class="stepper-wrapper">
                                                        <!--begin::Icon-->
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">2</span>
                                                        </div>
                                                        <!--begin::Icon-->
                                                        <!--begin::Label-->
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Frameworks</h3>
                                                            <div class="stepper-desc">Define your app framework
                                                            </div>
                                                        </div>
                                                        <!--begin::Label-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Line-->
                                                    <div class="stepper-line h-40px"></div>
                                                    <!--end::Line-->
                                                </div>
                                                <!--end::Step 2-->
                                                <!--begin::Step 3-->
                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                    <!--begin::Wrapper-->
                                                    <div class="stepper-wrapper">
                                                        <!--begin::Icon-->
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">3</span>
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Label-->
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Database</h3>
                                                            <div class="stepper-desc">Select the app database type
                                                            </div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Line-->
                                                    <div class="stepper-line h-40px"></div>
                                                    <!--end::Line-->
                                                </div>
                                                <!--end::Step 3-->
                                                <!--begin::Step 4-->
                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                    <!--begin::Wrapper-->
                                                    <div class="stepper-wrapper">
                                                        <!--begin::Icon-->
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">4</span>
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Label-->
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Billing</h3>
                                                            <div class="stepper-desc">Provide payment details
                                                            </div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Line-->
                                                    <div class="stepper-line h-40px"></div>
                                                    <!--end::Line-->
                                                </div>
                                                <!--end::Step 4-->
                                                <!--begin::Step 5-->
                                                <div class="stepper-item mark-completed"
                                                    data-kt-stepper-element="nav">
                                                    <!--begin::Wrapper-->
                                                    <div class="stepper-wrapper">
                                                        <!--begin::Icon-->
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">5</span>
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Label-->
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Completed</h3>
                                                            <div class="stepper-desc">Review and Submit</div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Step 5-->
                                            </div>
                                            <!--end::Nav-->
                                        </div>
                                        <!--begin::Aside-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                                            <!--begin::Form-->
                                            <form class="form" novalidate="novalidate"
                                                id="kt_modal_create_app_form">
                                                <!--begin::Step 1-->
                                                <div class="current" data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">App Name</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Specify your unique app name"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                name="name" placeholder="" value="" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                                <span class="required">Category</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Select your app category"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin:Options-->
                                                            <div class="fv-row">
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span
                                                                                class="symbol-label bg-light-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-primary">
                                                                                    <svg width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3"
                                                                                            d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                            fill="currentColor" />
                                                                                        <path
                                                                                            d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </span>
                                                                        <!--end:Icon-->
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bold fs-6">Quick
                                                                                Online
                                                                                Courses</span>
                                                                            <span class="fs-7 text-muted">Creating
                                                                                a clear
                                                                                text
                                                                                structure is just one SEO</span>
                                                                        </span>
                                                                        <!--end:Info-->
                                                                    </span>
                                                                    <!--end:Label-->
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="radio" name="category"
                                                                            value="1" />
                                                                    </span>
                                                                    <!--end:Input-->
                                                                </label>
                                                                <!--end::Option-->
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span
                                                                                class="symbol-label bg-light-danger">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-danger">
                                                                                    <svg width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <rect x="2"
                                                                                            y="2"
                                                                                            width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="currentColor" />
                                                                                        <rect opacity="0.3"
                                                                                            x="13"
                                                                                            y="2"
                                                                                            width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="currentColor" />
                                                                                        <rect opacity="0.3"
                                                                                            x="13"
                                                                                            y="13"
                                                                                            width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="currentColor" />
                                                                                        <rect opacity="0.3"
                                                                                            x="2"
                                                                                            y="13"
                                                                                            width="9"
                                                                                            height="9"
                                                                                            rx="2"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </span>
                                                                        <!--end:Icon-->
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bold fs-6">Face to
                                                                                Face
                                                                                Discussions</span>
                                                                            <span class="fs-7 text-muted">Creating
                                                                                a clear
                                                                                text
                                                                                structure is just one aspect</span>
                                                                        </span>
                                                                        <!--end:Info-->
                                                                    </span>
                                                                    <!--end:Label-->
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="radio" name="category"
                                                                            value="2" />
                                                                    </span>
                                                                    <!--end:Input-->
                                                                </label>
                                                                <!--end::Option-->
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span
                                                                                class="symbol-label bg-light-success">
                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-1 svg-icon-success">
                                                                                    <svg width="24"
                                                                                        height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3"
                                                                                            d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                                            fill="currentColor" />
                                                                                        <path
                                                                                            d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                                            fill="currentColor" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </span>
                                                                        <!--end:Icon-->
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bold fs-6">Full Intro
                                                                                Training</span>
                                                                            <span class="fs-7 text-muted">Creating
                                                                                a clear
                                                                                text
                                                                                structure copywriting</span>
                                                                        </span>
                                                                        <!--end:Info-->
                                                                    </span>
                                                                    <!--end:Label-->
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input"
                                                                            type="radio" name="category"
                                                                            value="3" />
                                                                    </span>
                                                                    <!--end:Input-->
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end:Options-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                </div>
                                                <!--end::Step 1-->
                                                <!--begin::Step 2-->
                                                <div data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                                <span class="required">Select Framework</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Specify your apps framework"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                <!--begin:Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin:Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-warning">
                                                                            <i
                                                                                class="fab fa-html5 text-warning fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end:Icon-->
                                                                    <!--begin:Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">HTML5</span>
                                                                        <span class="fs-7 text-muted">Base Web
                                                                            Projec</span>
                                                                    </span>
                                                                    <!--end:Info-->
                                                                </span>
                                                                <!--end:Label-->
                                                                <!--begin:Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        checked="checked" name="framework"
                                                                        value="1" />
                                                                </span>
                                                                <!--end:Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                <!--begin:Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin:Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-success">
                                                                            <i
                                                                                class="fab fa-react text-success fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end:Icon-->
                                                                    <!--begin:Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">ReactJS</span>
                                                                        <span class="fs-7 text-muted">Robust and
                                                                            flexible
                                                                            app
                                                                            framework</span>
                                                                    </span>
                                                                    <!--end:Info-->
                                                                </span>
                                                                <!--end:Label-->
                                                                <!--begin:Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="framework" value="2" />
                                                                </span>
                                                                <!--end:Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                <!--begin:Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin:Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-danger">
                                                                            <i
                                                                                class="fab fa-angular text-danger fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end:Icon-->
                                                                    <!--begin:Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">Angular</span>
                                                                        <span class="fs-7 text-muted">Powerful
                                                                            data
                                                                            mangement</span>
                                                                    </span>
                                                                    <!--end:Info-->
                                                                </span>
                                                                <!--end:Label-->
                                                                <!--begin:Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="framework" value="3" />
                                                                </span>
                                                                <!--end:Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer">
                                                                <!--begin:Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin:Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-primary">
                                                                            <i
                                                                                class="fab fa-vuejs text-primary fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end:Icon-->
                                                                    <!--begin:Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">Vue</span>
                                                                        <span class="fs-7 text-muted">Lightweight
                                                                            and
                                                                            responsive
                                                                            framework</span>
                                                                    </span>
                                                                    <!--end:Info-->
                                                                </span>
                                                                <!--end:Label-->
                                                                <!--begin:Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="framework" value="4" />
                                                                </span>
                                                                <!--end:Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                </div>
                                                <!--end::Step 2-->
                                                <!--begin::Step 3-->
                                                <div data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="required fs-5 fw-semibold mb-2">Database
                                                                Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                name="dbname" placeholder="" value="master_db" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                                <span class="required">Select Database
                                                                    Engine</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Select your app database engine"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                <!--begin::Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin::Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-success">
                                                                            <i
                                                                                class="fas fa-database text-success fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">MySQL</span>
                                                                        <span class="fs-7 text-muted">Basic MySQL
                                                                            database</span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </span>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="dbengine" checked="checked"
                                                                        value="1" />
                                                                </span>
                                                                <!--end::Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                <!--begin::Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin::Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-danger">
                                                                            <i
                                                                                class="fab fa-google text-danger fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">Firebase</span>
                                                                        <span class="fs-7 text-muted">Google based
                                                                            app
                                                                            data
                                                                            management</span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </span>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="dbengine" value="2" />
                                                                </span>
                                                                <!--end::Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack cursor-pointer">
                                                                <!--begin::Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <!--begin::Icon-->
                                                                    <span class="symbol symbol-50px me-6">
                                                                        <span class="symbol-label bg-light-warning">
                                                                            <i
                                                                                class="fab fa-amazon text-warning fs-2x"></i>
                                                                        </span>
                                                                    </span>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bold fs-6">DynamoDB</span>
                                                                        <span class="fs-7 text-muted">Amazon Fast
                                                                            NoSQL
                                                                            Database</span>
                                                                    </span>
                                                                    <!--end::Info-->
                                                                </span>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <span
                                                                    class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="dbengine" value="3" />
                                                                </span>
                                                                <!--end::Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                </div>
                                                <!--end::Step 3-->
                                                <!--begin::Step 4-->
                                                <div data-kt-stepper-element="content">
                                                    <div class="w-100">
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                <span class="required">Name On Card</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Specify a card holder's name"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text"
                                                                class="form-control form-control-solid"
                                                                placeholder="" name="card_name" value="Max Doe" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-semibold form-label mb-2">Card
                                                                Number</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input wrapper-->
                                                            <div class="position-relative">
                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Enter card number"
                                                                    name="card_number"
                                                                    value="4111 1111 1111 1111" />
                                                                <!--end::Input-->
                                                                <!--begin::Card logos-->
                                                                <div
                                                                    class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                                    <img src="{{ asset('media/svg/card-logos/visa.svg') }}"
                                                                        alt="" class="h-')}}25px" />
                                                                    <img src="{{ asset('media/svg/card-logos/mastercard.svg') }}"
                                                                        alt="" class="h-')}}25px" />
                                                                    <img src="{{ asset('media/svg/card-logos/american-express.svg') }}"
                                                                        alt="" class="h-')}}25px" />
                                                                </div>
                                                                <!--end::Card logos-->
                                                            </div>
                                                            <!--end::Input wrapper-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="row mb-10">
                                                            <!--begin::Col-->
                                                            <div class="col-md-8 fv-row">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                                    Date</label>
                                                                <!--end::Label-->
                                                                <!--begin::Row-->
                                                                <div class="row fv-row">
                                                                    <!--begin::Col-->
                                                                    <div class="col-6">
                                                                        <select name="card_expiry_month"
                                                                            class="form-select form-select-solid"
                                                                            data-control="select2"
                                                                            data-hide-search="true"
                                                                            data-placeholder="Month">
                                                                            <option></option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-6">
                                                                        <select name="card_expiry_year"
                                                                            class="form-select form-select-solid"
                                                                            data-control="select2"
                                                                            data-hide-search="true"
                                                                            data-placeholder="Year">
                                                                            <option></option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2030">2030</option>
                                                                            <option value="2031">2031</option>
                                                                            <option value="2032">2032</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Row-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-md-4 fv-row">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                                    <span class="required">CVV</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Enter a card CVV code"></i>
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input wrapper-->
                                                                <div class="position-relative">
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        minlength="3" maxlength="4"
                                                                        placeholder="CVV" name="card_cvv" />
                                                                    <!--end::Input-->
                                                                    <!--begin::CVV icon-->
                                                                    <div
                                                                        class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                                        <span class="svg-icon svg-icon-2hx">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M22 7H2V11H22V7Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.3"
                                                                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::CVV icon-->
                                                                </div>
                                                                <!--end::Input wrapper-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-stack">
                                                            <!--begin::Label-->
                                                            <div class="me-5">
                                                                <label class="fs-6 fw-semibold form-label">Save
                                                                    Card for
                                                                    further
                                                                    billing?</label>
                                                                <div class="fs-7 fw-semibold text-muted">If you
                                                                    need more
                                                                    info, please
                                                                    check budget planning</div>
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" checked="checked" />
                                                                <span
                                                                    class="form-check-label fw-semibold text-muted">Save
                                                                    Card</span>
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                </div>
                                                <!--end::Step 4-->
                                                <!--begin::Step 5-->
                                                <div data-kt-stepper-element="content">
                                                    <div class="w-100 text-center">
                                                        <!--begin::Heading-->
                                                        <h1 class="fw-bold text-dark mb-3">Release!</h1>
                                                        <!--end::Heading-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-3">Submit your app
                                                            to
                                                            kickstart your
                                                            project.</div>
                                                        <!--end::Description-->
                                                        <!--begin::Illustration-->
                                                        <div class="text-center px-4 py-15">
                                                            <img src="{{ asset('media/illustrations/sketchy-1/9.png') }}"
                                                                alt="" class="mw-100 mh-')}}300px" />
                                                        </div>
                                                        <!--end::Illustration-->
                                                    </div>
                                                </div>
                                                <!--end::Step 5-->
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-stack pt-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-2">
                                                        <button type="button"
                                                            class="btn btn-lg btn-light-primary me-3"
                                                            data-kt-stepper-action="previous">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                            <span class="svg-icon svg-icon-3 me-1">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="6"
                                                                        y="11" width="13"
                                                                        height="2" rx="1"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->Back
                                                        </button>
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Wrapper-->
                                                    <div>
                                                        <button type="button" class="btn btn-lg btn-primary"
                                                            data-kt-stepper-action="submit">
                                                            <span class="indicator-label">Submit
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="18"
                                                                            y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                        <button type="button" class="btn btn-lg btn-primary"
                                                            data-kt-stepper-action="next">Continue
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="18"
                                                                        y="13" width="13"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-180 18 13)"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Stepper-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Create App-->
                    <!--begin::Modal - New Target-->
                    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content rounded">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                        data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                    <!--begin:Form-->
                                    <form id="kt_modal_new_target_form" class="form" action="#">
                                        <!--begin::Heading-->
                                        <div class="mb-13 text-center">
                                            <!--begin::Title-->
                                            <h1 class="mb-3">Set First Target</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-5">If you need more info, please
                                                check
                                                <a href="#" class="fw-bold link-primary">Project
                                                    Guidelines</a>.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Target Title</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                    data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter Target Title" name="target_title" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-8">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Assign</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select a Team Member"
                                                    name="target_assign">
                                                    <option value="">Select user...</option>
                                                    <option value="1">Karina Clark</option>
                                                    <option value="2">Robert Doe</option>
                                                    <option value="3">Niel Owen</option>
                                                    <option value="4">Olivia Wild</option>
                                                    <option value="5">Sean Bean</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                                <!--begin::Input-->
                                                <div class="position-relative d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Datepicker-->
                                                    <input class="form-control form-control-solid ps-12"
                                                        placeholder="Select a date" name="due_date" />
                                                    <!--end::Datepicker-->
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-semibold mb-2">Target Details</label>
                                            <textarea class="form-control form-control-solid" rows="3" name="target_details"
                                                placeholder="Type Target Details"></textarea>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Tags</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                    data-bs-toggle="tooltip" title="Specify a target priorty"></i>
                                            </label>
                                            <!--end::Label-->
                                            <input class="form-control form-control-solid" value="Important, Urgent"
                                                name="tags" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-stack mb-8">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Adding Users by Team
                                                    Members</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info,
                                                    please
                                                    check budget
                                                    planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-15 fv-row">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="fw-semibold me-5">
                                                    <label class="fs-6">Notifications</label>
                                                    <div class="fs-7 text-muted">Allow Notifications by Phone or
                                                        Email
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Checkboxes-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input h-20px w-20px"
                                                            type="checkbox" name="communication[]" value="email"
                                                            checked="checked" />
                                                        <span class="form-check-label fw-semibold">Email</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input h-20px w-20px"
                                                            type="checkbox" name="communication[]"
                                                            value="phone" />
                                                        <span class="form-check-label fw-semibold">Phone</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Checkboxes-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="text-center">
                                            <button type="reset" id="kt_modal_new_target_cancel"
                                                class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" id="kt_modal_new_target_submit"
                                                class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end:Form-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - New Target-->
                    <!--begin::Modal - View Users-->
                    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                        data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-13">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Browse Users</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please
                                            check out
                                            our
                                            <a href="#" class="link-primary fw-bold">Users Directory</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Users-->
                                    <div class="mb-15">
                                        <!--begin::List-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-6.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma
                                                            Smith
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Art
                                                                Director</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody
                                                            Macy
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Marketing
                                                                Analytic</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">melody@altbox.com
                                                        </div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$50,500</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-1.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max
                                                            Smith
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Software
                                                                Enginer</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$75,900</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-5.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean
                                                            Bean
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Web
                                                                Developer</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$10,500</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian
                                                            Cox
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">UI/UX
                                                                Designer</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">brian@exchange.com
                                                        </div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$20,000</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela
                                                            Collins
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Head
                                                                Of
                                                                Marketing</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$9,300</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-9.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis
                                                            Mitcham
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Software
                                                                Arcitect</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$15,000</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia
                                                            Wild
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">System
                                                                Admin</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">olivia@corpmail.com
                                                        </div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil
                                                            Owen
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Account
                                                                Manager</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com
                                                        </div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$45,800</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-23.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan
                                                            Wilson
                                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Web
                                                                Desinger</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">dam@consilting.com
                                                        </div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$90,500</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma
                                                            Bold
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Corporate
                                                                Finance</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$5,000</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-12.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana
                                                            Crown
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Customer
                                                                Relationship</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com
                                                        </div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$70,000</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack py-5">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert
                                                            Doe
                                                            <span
                                                                class="badge badge-light fs-8 fw-semibold ms-2">Marketing
                                                                Executive</span></a>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bold text-dark">$45,500</div>
                                                        <div class="fs-7 text-muted">Sales</div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Notice-->
                                    <div class="d-flex justify-content-between">
                                        <!--begin::Label-->
                                        <div class="fw-semibold">
                                            <label class="fs-6">Adding Users by Team Members</label>
                                            <div class="fs-7 text-muted">If you need more info, please check
                                                budget
                                                planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - View Users-->
                    <!--begin::Modal - Users Search-->
                    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                        data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                    <!--begin::Content-->
                                    <div class="text-center mb-13">
                                        <h1 class="mb-3">Search Users</h1>
                                        <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your
                                            Project
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Search-->
                                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                                        data-kt-search-min-length="2" data-kt-search-enter="enter"
                                        data-kt-search-layout="inline">
                                        <!--begin::Form-->
                                        <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                            autocomplete="off">
                                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                                            <input type="hidden" />
                                            <!--end::Hidden input-->
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span
                                                class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                                        width="8.15546" height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input type="text"
                                                class="form-control form-control-lg form-control-solid px-15"
                                                name="search" value=""
                                                placeholder="Search by username, full name or email..."
                                                data-kt-search-element="input" />
                                            <!--end::Input-->
                                            <!--begin::Spinner-->
                                            <span
                                                class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                                data-kt-search-element="spinner">
                                                <span
                                                    class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                            </span>
                                            <!--end::Spinner-->
                                            <!--begin::Reset-->
                                            <span
                                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                                data-kt-search-element="clear">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="6" y="17.3137"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16"
                                                            height="2" rx="1"
                                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Reset-->
                                        </form>
                                        <!--end::Form-->
                                        <!--begin::Wrapper-->
                                        <div class="py-5">
                                            <!--begin::Suggestions-->
                                            <div data-kt-search-element="suggestions">
                                                <!--begin::Heading-->
                                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                                <!--end::Heading-->
                                                <!--begin::Users-->
                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                    <!--begin::User-->
                                                    <a href="#"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic"
                                                                src="{{ asset('assets/media/avatars/300-6.') }}jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Emma
                                                                Smith</span>
                                                            <span class="badge badge-light">Art Director</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <a href="#"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Melody
                                                                Macy</span>
                                                            <span class="badge badge-light">Marketing
                                                                Analytic</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <a href="#"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic"
                                                                src="{{ asset('assets/media/avatars/300-1.') }}jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                            <span class="badge badge-light">Software
                                                                Enginer</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <a href="#"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic"
                                                                src="{{ asset('assets/media/avatars/300-5.') }}jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                            <span class="badge badge-light">Web Developer</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <a href="#"
                                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                            <img alt="Pic"
                                                                src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Info-->
                                                        <div class="fw-semibold">
                                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                            <span class="badge badge-light">UI/UX Designer</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                            </div>
                                            <!--end::Suggestions-->
                                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::Users-->
                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="0">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='0']"
                                                                    value="0" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-6.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                                    Smith</a>
                                                                <div class="fw-semibold text-muted">smith@kpmg.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2" selected="selected">Owner
                                                                </option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="1">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='1']"
                                                                    value="1" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                                    Macy</a>
                                                                <div class="fw-semibold text-muted">
                                                                    melody@altbox.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">Guest
                                                                </option>
                                                                <option value="2">Owner</option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="2">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='2']"
                                                                    value="2" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-1.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                                    Smith</a>
                                                                <div class="fw-semibold text-muted">max@kt.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="3">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='3']"
                                                                    value="3" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-5.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                                    Bean</a>
                                                                <div class="fw-semibold text-muted">
                                                                    sean@dellito.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2" selected="selected">Owner
                                                                </option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='4']"
                                                                    value="4" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                                    Cox</a>
                                                                <div class="fw-semibold text-muted">
                                                                    brian@exchange.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="5">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='5']"
                                                                    value="5" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                                    Collins</a>
                                                                <div class="fw-semibold text-muted">mik@pex.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2" selected="selected">Owner
                                                                </option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="6">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='6']"
                                                                    value="6" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-9.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                                    Mitcham</a>
                                                                <div class="fw-semibold text-muted">f.mit@kpmg.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="7">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='7']"
                                                                    value="7" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                                    Wild</a>
                                                                <div class="fw-semibold text-muted">
                                                                    olivia@corpmail.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2" selected="selected">Owner
                                                                </option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="8">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='8']"
                                                                    value="8" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                                    Owen</a>
                                                                <div class="fw-semibold text-muted">
                                                                    owen.neil@gmail.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">Guest
                                                                </option>
                                                                <option value="2">Owner</option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="9">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='9']"
                                                                    value="9" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-23.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                                    Wilson</a>
                                                                <div class="fw-semibold text-muted">
                                                                    dam@consilting.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="10">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='10']"
                                                                    value="10" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                                    Bold</a>
                                                                <div class="fw-semibold text-muted">
                                                                    emma@intenso.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2" selected="selected">Owner
                                                                </option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="11">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='11']"
                                                                    value="11" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-12.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                                    Crown</a>
                                                                <div class="fw-semibold text-muted">
                                                                    ana.cf@limtel.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">Guest
                                                                </option>
                                                                <option value="2">Owner</option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="12">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='12']"
                                                                    value="12" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                                    Doe</a>
                                                                <div class="fw-semibold text-muted">
                                                                    robert@benko.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="13">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='13']"
                                                                    value="13" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-13.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                                    Miller</a>
                                                                <div class="fw-semibold text-muted">
                                                                    miller@mapple.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="14">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='14']"
                                                                    value="14" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                                    Kunic</a>
                                                                <div class="fw-semibold text-muted">
                                                                    lucy.m@fentech.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2" selected="selected">Owner
                                                                </option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="15">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='15']"
                                                                    value="15" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic"
                                                                    src="{{ asset('assets/media/avatars/300-21.') }}jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                                    Wilder</a>
                                                                <div class="fw-semibold text-muted">
                                                                    ethan@loop.com.au
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1" selected="selected">Guest
                                                                </option>
                                                                <option value="2">Owner</option>
                                                                <option value="3">Can Edit</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Separator-->
                                                    <div class="border-bottom border-gray-300 border-bottom-dashed">
                                                    </div>
                                                    <!--end::Separator-->
                                                    <!--begin::User-->
                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                        data-user-id="16">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Checkbox-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="users" data-kt-check="true"
                                                                    data-kt-check-target="[data-user-id='16']"
                                                                    value="16" />
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span
                                                                    class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#"
                                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                                    Kunic</a>
                                                                <div class="fw-semibold text-muted">
                                                                    lucy.m@fentech.com
                                                                </div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Access menu-->
                                                        <div class="ms-2 w-100px">
                                                            <select
                                                                class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                                <option value="1">Guest</option>
                                                                <option value="2">Owner</option>
                                                                <option value="3" selected="selected">Can
                                                                    Edit
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Access menu-->
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-center mt-15">
                                                    <button type="reset" id="kt_modal_users_search_reset"
                                                        data-bs-dismiss="modal"
                                                        class="btn btn-active-light me-3">Cancel</button>
                                                    <button type="submit" id="kt_modal_users_search_submit"
                                                        class="btn btn-primary">Add Selected Users</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Results-->
                                            <!--begin::Empty-->
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Message-->
                                                <div class="fw-semibold py-10">
                                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                                    <div class="text-muted fs-6">Try to search by username, full
                                                        name or
                                                        email...
                                                    </div>
                                                </div>
                                                <!--end::Message-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-5">
                                                    <img src="{{ asset('media/illustrations/sketchy-1/1.png') }}"
                                                        alt="" class="w-100 h-200px h-sm-')}}325px" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Users Search-->
                    <!--begin::Modal - Invite Friends-->
                    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                        data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="17.3137"
                                                    width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16"
                                                    height="2" rx="1" transform="rotate(45 7.41422 6)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--begin::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-13">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Invite a Friend</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please
                                            check out
                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Google Contacts Invite-->
                                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                                        <img alt="Logo"
                                            src="{{ asset('media/svg/brand-logos/google-icon.svg') }}"
                                            class="h-20px me-3" />Invite Gmail Contacts')}}
                                    </div>
                                    <!--end::Google Contacts Invite-->
                                    <!--begin::Separator-->
                                    <div class="separator d-flex flex-center mb-8">
                                        <span
                                            class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                                    </div>
                                    <!--end::Separator-->
                                    <!--begin::Textarea-->
                                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                                    <!--end::Textarea-->
                                    <!--begin::Users-->
                                    <div class="mb-10">
                                        <!--begin::Heading-->
                                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                                        <!--end::Heading-->
                                        <!--begin::List-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-6.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                            Smith</a>
                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner
                                                        </option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                            Macy</a>
                                                        <div class="fw-semibold text-muted">melody@altbox.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1" selected="selected">Guest
                                                        </option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-1.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                            Smith</a>
                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-5.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner
                                                        </option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-25.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                            Cox</a>
                                                        <div class="fw-semibold text-muted">brian@exchange.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner
                                                        </option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-9.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                            Mitcham</a>
                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                            Wild</a>
                                                        <div class="fw-semibold text-muted">olivia@corpmail.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner
                                                        </option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                            Owen</a>
                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1" selected="selected">Guest
                                                        </option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-23.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                            Wilson</a>
                                                        <div class="fw-semibold text-muted">dam@consilting.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner
                                                        </option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-12.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                            Crown</a>
                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1" selected="selected">Guest
                                                        </option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                            Doe</a>
                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-13.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-semibold text-muted">miller@mapple.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-semibold text-muted">lucy.m@fentech.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner
                                                        </option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ asset('assets/media/avatars/300-21.') }}jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                            Wilder</a>
                                                        <div class="fw-semibold text-muted">ethan@loop.com.au
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1" selected="selected">Guest
                                                        </option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-semibold text-muted">lucy.m@fentech.com
                                                        </div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_modal_invite_friends"
                                                        data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Notice-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5 fw-semibold">
                                            <label class="fs-6">Adding Users by Team Members</label>
                                            <div class="fs-7 text-muted">If you need more info, please check
                                                budget
                                                planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Invite Friend-->
                    <!--end::Modals-->
                    <!--begin::Javascript-->
                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
                    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
                    <!--end::Global Javascript Bundle-->
                    <!--begin::Vendors Javascript(used for this page only)-->
                    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
                    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
                    <!--end::Vendors Javascript-->
                    <!--begin::Custom Javascript(used for this page only)-->
                    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
                    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
                    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
                    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
                    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
                    <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
                    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
                    <!--end::Custom Javascript-->
                    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
