<template>
    <div>
        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item"><Link class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></Link></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav align-items-center ms-auto">
                    <li class="nav-item dropdown dropdown-user"><Link class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"></span><span class="user-status">Club</span></div><span class="avatar"><img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                        </Link>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><Link class="dropdown-item" href="#"><i class="me-50" data-feather="user"></i> Profile</Link>
                        <div class="dropdown-divider"></div><Link class="dropdown-item" href="/club/logout"><i class="me-50" data-feather="power"></i> Logout</Link>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END: Header-->
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>