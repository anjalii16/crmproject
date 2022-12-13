@include('layout/theme')
<div id="kt_app_header" class="app-header">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->

                
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::sidebar mobile toggle-->
        <!--begin::Mobile logo-->

        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item here show menu-lg-down-accordion menu-here-bg me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">
                                <img src="assets/dunesblacklogo.png"
                                    style="margin-left:-4px;
								margin-top:5px; height:43px;
								">

                            </span>
                            <div class="d-flex flex-column" style="margin-left:20px">
                                <div class="fw-bolder d-flex align-items-center fs-5">Workspace
                                    Name <span
                                        class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Free</span>
                                </div><a href="#" class="fw-bold text-muted fs-7">Workspace
                                    URL</a>
                            </div>
                        </span>


                        <!--end:Menu link-->
                        <!--begin:Menu sub-->

                        <!--end:Menu sub-->
                    </div>

                </div>
                <!--end::Menu-->
            </div>
        </div>
    </div>
</div>
