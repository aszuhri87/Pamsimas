<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sidenav-menu-heading">Core</div>
                            <a class="nav-link " href="dashboard">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                               
                                       Dashboard
                                  
                                    
                                <div class="sidenav-collapse-arrow"></i></div>
                            </a>
                            <!-- <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <a class="nav-link" href="index.html">
                                        Default
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="dashboard-2.html">
                                        Multipurpose
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="dashboard-3.html">
                                        Affiliate
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                </nav>
                            </div> -->
                            <?php if( $this->session->userdata('role_admin')=="true"){?>
                            <div class="sidenav-menu-heading">Master Data</div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePegawai" aria-expanded="false" aria-controls="collapsePegawai">
                                <div class="nav-link-icon"><i data-feather="user"></i></div>
                                Pegawai
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePegawai" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav" id="accordionSidenav">
                                    <a class="nav-link" href="data_pegawai">
                                        Data Pegawai
                                  
                                    </a>
                                    <a class="nav-link" href="data_akun">
                                        Data Akun
                                       
                                    </a>
        
                                </nav>
                            </div>
                            <?php }?>

                            <?php if( $this->session->userdata('role_pelanggan')=="true"){?>
                            <a class="nav-link " href="data_pelanggan">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                               
                                       Pelanggan
                                  
                                    
                                <div class="sidenav-collapse-arrow"></i></div>
                            </a>
                            <?php }?>
                            <a class="nav-link " href="data_pengumuman">
                                <div class="nav-link-icon"><i data-feather="info"></i></div>
                               
                                       Pengumuman
                                  
                                    
                                <div class="sidenav-collapse-arrow"></i></div>
                            </a>
                           
                            <div class="sidenav-menu-heading">Pembayaran</div>
                            <?php if( $this->session->userdata('role_tagihan')=="true"){?>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseTagihan" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="dollar-sign"></i></div>
                                Tagihan
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTagihan" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav" id="accordionSidenav">
                                <a class="nav-link " href="setting_tagihan">
                                
                                       Setting Tagihan
                                 
                                </a>
        
                                </nav>
                            </div>
                            <?php }?>
                            <a class="nav-link " href="pengajuan_rekening">
                                <div class="nav-link-icon"><i data-feather="credit-card"></i></div>
                               
                                      Pengajuan Rekening
                                  
                                    
                                <div class="sidenav-collapse-arrow"></i></div>
                            </a>
                            

                          
                            

                                    <!-- <div class="collapse" id="pagesCollapseKnowledgeBase" data-parent="#accordionSidenavPagesMenu"> -->
                            <!-- <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                        Account
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAccount" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="account-profile.html">
                                                Profile
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="account-billing.html">
                                                Billing
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="account-security.html">
                                                Security
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="account-notifications.html">
                                                Notifications
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                                Basic
                                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuthBasic" data-parent="#accordionSidenavPagesAuth">
                                                <nav class="sidenav-menu-nested nav">
                                                    <a class="nav-link" href="auth-login-basic.html">Login</a>
                                                    <a class="nav-link" href="auth-register-basic.html">Register</a>
                                                    <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                                Social
                                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuthSocial" data-parent="#accordionSidenavPagesAuth">
                                                <nav class="sidenav-menu-nested nav">
                                                    <a class="nav-link" href="auth-login-social.html">Login</a>
                                                    <a class="nav-link" href="auth-register-social.html">Register</a>
                                                    <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                                                </nav>
                                            </div>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="error-400.html">
                                                400 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-401.html">
                                                401 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-403.html">
                                                403 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-404-1.html">
                                                404 Error 1
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-404-2.html">
                                                404 Error 2
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-500.html">
                                                500 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-503.html">
                                                503 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-504.html">
                                                504 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseKnowledgeBase" aria-expanded="false" aria-controls="pagesCollapseKnowledgeBase">
                                        Knowledge Base
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="knowledge-base-home-1.html">
                                                Home 1
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="knowledge-base-home-2.html">
                                                Home 2
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="knowledge-base-category.html">
                                                Category
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="knowledge-base-article.html">
                                                Article
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="pricing.html">
                                        Pricing
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                    <a class="nav-link" href="invoice.html">
                                        Invoice
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                </nav>
                            </div> -->

                  
                            
                            <?php if( $this->session->userdata('role_laporan')=="true"){?>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                Histori Belanja
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <?php }?>
                            <!-- <div class="sidenav-menu-heading">Akun App</div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseAkun" aria-expanded="false" aria-controls="collapseAkun">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                Manajemen Akun
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAkun" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav" id="accordionSidenav">
                                    <a class="nav-link" href="tambah_akun">
                                        Tambah Akun
                                  
                                    </a>
                                    <a class="nav-link" href="akun/data_akun">
                                        Data Akun
                                       
                                    </a>
        
                                </nav>
                            </div> -->
                            <!-- <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                                    <a class="nav-link" href="wizard.html">
                                        Wizard
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                </nav>
                            </div>
                            <div class="sidenav-menu-heading">UI Toolkit</div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                Layout
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                                        Sidenav Variations
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutSidenavVariations" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                            <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                                            <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                                        Container Options
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutContainers" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="layout-boxed.html">
                                                Boxed Layout
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                                        Page Headers
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutsPageHeaders" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="header-simplified.html">Simplified</a>
                                            <a class="nav-link" href="header-compact.html">
                                                Compact
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                                            <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                                            <a class="nav-link" href="header-light.html">Light</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                                        Starter Layouts
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutsStarterTemplates" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="starter-default.html">Default</a>
                                            <a class="nav-link" href="starter-minimal.html">
                                                Minimal
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                                <div class="nav-link-icon"><i data-feather="package"></i></div>
                                Components
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="alerts.html">Alerts</a>
                                    <a class="nav-link" href="avatars.html">Avatars</a>
                                    <a class="nav-link" href="badges.html">Badges</a>
                                    <a class="nav-link" href="buttons.html">Buttons</a>
                                    <a class="nav-link" href="cards.html">
                                        Cards
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                                    <a class="nav-link" href="forms.html">
                                        Forms
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="modals.html">Modals</a>
                                    <a class="nav-link" href="navigation.html">
                                        Navigation
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="progress.html">Progress</a>
                                    <a class="nav-link" href="step.html">
                                        Step
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                    <a class="nav-link" href="timeline.html">
                                        Timeline
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                    <a class="nav-link" href="toasts.html">Toasts</a>
                                    <a class="nav-link" href="tooltips.html">Tooltips</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                                <div class="nav-link-icon"><i data-feather="tool"></i></div>
                                Utilities
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="animations.html">Animations</a>
                                    <a class="nav-link" href="background.html">Background</a>
                                    <a class="nav-link" href="borders.html">Borders</a>
                                    <a class="nav-link" href="lift.html">Lift</a>
                                    <a class="nav-link" href="shadows.html">Shadows</a>
                                    <a class="nav-link" href="typography.html">
                                        Typography
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                </nav>
                            </div>
                            <div class="sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                                Tables
                            </a>
                        </div>
                    </div> -->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Febri Nugroho</div>
                        </div>
                    </div>
                </nav>
            </div>