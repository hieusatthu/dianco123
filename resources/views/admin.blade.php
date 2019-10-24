<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homeservice 2</title>
    <!-- bootstrapt -->
    <script type="text/javascript" src="{{ asset('vendor/bootstrap.js') }}"></script>
    <link href="{{ asset('vendor/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome.css') }}" rel="stylesheet">
    <!-- font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('vendor/slick/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/css/slick-theme.css') }}">
    <!-- link main css -->
    <link href="{{ asset('mycss/main.css') }}" rel="stylesheet">
    <link href="{{ asset('mycss/responesive.css') }}" rel="stylesheet">

    <!--metronic css -->
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

{{--@include('message.error')--}}

{{--@include('message.flash_message')--}}

{{--@yield('content')--}}
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="../../index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="../../assets/demo/default/media/img/logo/logo_default_dark.png">
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block
					 ">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>

                    <!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">

                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="">
                                                    <!--
                                                    <span class="m-type m--bg-brand">
                                                        <span class="m--font-light">
                                                            S
                                                            <span>
                                                                <span>
                                                                    -->
																</span>
                                        <span class="m-topbar__username m--hide">
																	Nick
																</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(../../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="../../assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="">
                                                        <!--
                                                        <span class="m-type m-type--lg m--bg-danger">
                                                            <span class="m--font-light">
                                                                S
                                                                <span>
                                                                    <span>
                                                                        -->
                                                    </div>
                                                    <div class="m-card-user__details">
																								<span class="m-card-user__name m--font-weight-500">
																									Mark Andre
																								</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                            mark.andre@gmail.com
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
																									<span class="m-nav__section-text">
																										Section
																									</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
																											<span class="m-nav__link-wrap">
																												<span class="m-nav__link-text">
																													My Profile
																												</span>
																												<span class="m-nav__link-badge">
																													<span class="m-badge m-badge--success">
																														2
																													</span>
																												</span>
																											</span>
																										</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">
																											Activity
																										</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">
																											Messages
																										</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">
																											FAQ
																										</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="../../header/profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">
																											Support
																										</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">
                                                            <a href="../../snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                Logout
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-scroller ps ps--active-y" m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative; height: 324px; overflow: hidden;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="../../index.html" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                            <span class="m-menu__link-title">
																		<span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">
																				Dashboard
																			</span>
																			<span class="m-menu__link-badge">
																				<span class="m-badge m-badge--danger">
																					2
																				</span>
																			</span>
																		</span>
																	</span>
                        </a>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">
                            Components
                        </h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                    </li>
                    <li class="m-menu__item m-menu__item--submenu m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-layers"></i>
                            <span class="m-menu__link-text">
																		Base
																	</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu " m-hidden-height="920" style="display: none; overflow: hidden;">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
																			<span class="m-menu__link">
																				<span class="m-menu__link-text">
																					Base
																				</span>
																			</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true">
                                    <a href="../../components/base/state.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">
																					State Colors
																				</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 324px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 52px;"></div></div></div>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <div class="m-content">
                        <div class="m-portlet__body">
                            <!--begin: Search Form -->
                            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 order-2 order-xl-1">
                                        <div class="form-group m-form__group row align-items-center">
                                            <div class="col-md-4">
                                                <div class="d-md-none m--margin-bottom-10"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <a href="{{ route('deletevia') }}"class="btn btn-danger">
                                                    XÓA VIA
                                                </a>
                                                <a href="{{ route('getvia') }}"class=" btn btn-success" style="float: right;">
                                                    LẤY VIA
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search Form -->
                            <!--begin: Datatable -->
                            <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data"
                                 style="position: static; zoom: 1;">
                                <table class="m-datatable__table " style="display: block; min-height: 300px; overflow-x: auto;">
                                    <thead class="m-datatable__head">
                                    <tr class="m-datatable__row">

                                        <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Tài khoản </span></th>
                                        <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Mật khẩu</span></th>
                                    </tr>
                                    </thead>
                                    <tbody class="m-datatable__body" style="">

                                    @foreach($data as $val)

                                        <tr data-row="2" class="m-datatable__row" style="left: 0px;">

                                            <td data-field="OrderID" class="m-datatable__cell">
                                                <span style="width: 110px;">{{ $val->taikhoan }}</span>
                                            </td>
                                            <td data-field="OrderID" class="m-datatable__cell">
                                                <span style="width: 110px;">{{ $val->matkhau }}</span>
                                            </td>

                                            </span>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                {{ $data->links() }}
                            </div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
					2017 © Metronic theme by
					<a href="https://keenthemes.com" class="m-link">
						Keenthemes
					</a>
				</span>
                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								About
							</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								Privacy
							</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								T&amp;C
							</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								Purchase
							</span>
                            </a>
                        </li>
                        <li class="m-nav__item m-nav__item">
                            <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="" data-placement="left" data-original-title="Support Center">
                                <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
    <div class="m-quick-sidebar__content m--hide">
		<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
			<i class="la la-close"></i>
		</span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                    Messages
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                    Settings
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                    Logs
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                    <div class="m-messenger__messages m-scrollable">
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="../../assets/app/media/img//users/user3.jpg" alt="">
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Hi Bob. What time will be the meeting ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Hi Megan. It's at 2.30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="../../assets/app/media/img//users/user3.jpg" alt="">
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Will the development team be joining ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Yes sure. I invited them as well
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            2:30PM
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="../../assets/app/media/img//users/user3.jpg" alt="">
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Noted. For the Coca-Cola Mobile App project as well ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Yes, sure.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Please also prepare the quotation for the Loop CRM project as well.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            3:15PM
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-no-pic m--bg-fill-danger">
									<span>
										M
									</span>
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Noted. I will prepare it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Thanks Megan. I will see you later.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="../../assets/app/media/img//users/user3.jpg" alt="">
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Sure. See you in the meeting soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-messenger__seperator"></div>
                    <div class="m-messenger__form">
                        <div class="m-messenger__form-controls">
                            <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                        </div>
                        <div class="m-messenger__form-tools">
                            <a href="" class="m-messenger__form-attachment">
                                <i class="la la-paperclip"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                <div class="m-list-settings m-scrollable">
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            General Settings
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Email Notifications
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Site Tracking
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								SMS Alerts
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Backup Storage
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Audit Logs
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                    </div>
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            System Settings
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								System Logs
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Error Reporting
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Applications Logs
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Backup Servers
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                        <div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Audit Logs
							</span>
                            <span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                <div class="m-list-timeline m-scrollable">
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            System Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                    <span class="m-badge m-badge--warning m-badge--wide">
										important
									</span>
                                </a>
                                <span class="m-list-timeline__time">
									Just now
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
                                <span class="m-list-timeline__time">
									11 mins
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoice received
                                </a>
                                <span class="m-list-timeline__time">
									20 mins
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                    <span class="m-badge m-badge--success m-badge--wide">
										resolved
									</span>
                                </a>
                                <span class="m-list-timeline__time">
									1 hr
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                </a>
                                <span class="m-list-timeline__time">
									2 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                    <span class="m-badge m-badge--danger m-badge--wide">
										pending
									</span>
                                </a>
                                <span class="m-list-timeline__time">
									3 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
                                <span class="m-list-timeline__time">
									5 hrs
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Applications Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                    <span class="m-badge m-badge--info m-badge--wide">
										urgent
									</span>
                                </a>
                                <span class="m-list-timeline__time">
									7 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                </a>
                                <span class="m-list-timeline__time">
									Just now
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
                                <span class="m-list-timeline__time">
									11 mins
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoices received
                                </a>
                                <span class="m-list-timeline__time">
									20 mins
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                </a>
                                <span class="m-list-timeline__time">
									1 hr
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                    <span class="m-badge m-badge--info m-badge--wide">
										pending
									</span>
                                </a>
                                <span class="m-list-timeline__time">
									2 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                </a>
                                <span class="m-list-timeline__time">
									3 hrs
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Server Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
                                <span class="m-list-timeline__time">
									5 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                </a>
                                <span class="m-list-timeline__time">
									7 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                </a>
                                <span class="m-list-timeline__time">
									Just now
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
                                <span class="m-list-timeline__time">
									11 mins
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoice received
                                </a>
                                <span class="m-list-timeline__time">
									20 mins
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                </a>
                                <span class="m-list-timeline__time">
									1 hr
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                </a>
                                <span class="m-list-timeline__time">
									2 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                </a>
                                <span class="m-list-timeline__time">
									3 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
                                <span class="m-list-timeline__time">
									5 hrs
								</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                </a>
                                <span class="m-list-timeline__time">
									1117 hrs
								</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Sidebar -->





<script type="text/javascript" src="{{ asset('myscript/jquery-3.3.1.min.js') }}"></script>


<!--metronic js -->
<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>

</body>
</html>