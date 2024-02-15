<template>

      <div class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
            id="sidenav-main">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0"
                    href=" "
                    target="_blank">
                    <img src="../../../src/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-1 font-weight-bold">Hotel Management</span>
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active"
                            aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                            <div
                                class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Dashboards</span>
                        </a>
                        <div class="collapse  show " id="dashboardsExamples">
                            <ul class="nav ms-4">

                                <Link aria-current="page" class="nav-link active" href="/hotel">Hotel
                            </Link>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mt-3">
                        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link "
                            aria-controls="applicationsExamples" role="button" aria-expanded="false">
                            <div
                                class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                                <i class="ni ni-ui-04 text-info text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Hotel Types</span>
                        </a>
                        <div class="collapse " id="applicationsExamples">
                            <ul class="nav ms-4">
                                <li class="nav-item ">
                                    <a class="nav-link " href="">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal"> Resorts </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="">
                                        <span class="sidenav-mini-icon"> </span>
                                        <span class="sidenav-normal"> Heritage hotels </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="">
                                        <span class="sidenav-mini-icon"></span>
                                        <span class="sidenav-normal"> Casino Hotels</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="">
                                        <span class="sidenav-mini-icon"></span>
                                        <span class="sidenav-normal"> Motels </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

</template>
<script>
import { Link } from '@inertiajs/vue3';

export default {
  components: {
    Link,
  },
}
</script>
