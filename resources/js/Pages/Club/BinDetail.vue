<template>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Ton Information</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-header mb-2">
                                <div class="profile-header-nav">
                                    <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <Link class="nav-link fw-bold active" :href="route('bin.detail',bin.id)">
                                                    <span class="d-none d-md-block">Ton</span>
                                                </Link>
                                            </li>
                                            <li class="nav-item">
                                                <Link class="nav-link fw-bold" :href="route('bin.history',bin.id)">
                                                    <span class="d-none d-md-block">History</span>
                                                </Link>
                                            </li>
                                            <li class="nav-item">
                                                <Link class="nav-link fw-bold" :href="route('bin.useraction',bin.id)">
                                                    <span class="d-none d-md-block">UserAction</span>
                                                </Link>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-3 col-12 order-2 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h3> About Ton</h3>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Name</h5>
                                            <p class="card-text">{{bin.name}}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Ton Id</h5>
                                            <p class="card-text">{{bin.device_id}}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">City</h5>
                                            <p class="card-text">{{bin.city}}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">State</h5>
                                            <p class="card-text">{{bin.street}}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">ZipCode</h5>
                                            <p class="card-text">{{bin.zip}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body profile-suggestion">
                                        <h3 class="mb-2">Ton Keepers</h3>
                                        <div class="d-flex justify-content-start align-items-center mb-1" v-for="tonkeeper in tonkeepers" v-bind:key="tonkeeper.id">
                                            <div class="avatar me-1">
                                                <img :src="tonkeeper.profile_image" height="40" width="40" />
                                            </div>
                                            <div class="profile-user-info">
                                                <h6 class="mb-0"> {{tonkeeper.name}}</h6>
                                            </div>
                                            <div class="profile-star ms-auto"></div>
                                            <Link class="nav-link fw-bold" :href="route('bin.tonkeeper',[tonkeeper.id,bin.id])">
                                                <Span class="dltbtn" style="color: red; cursor: pointer;">X</Span>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-1 order-lg-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Description</h3>
                                        <p>{{bin.description}}</p>
                                        <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
                                            <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12 order-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="mb-0">Ton Images</h3>
                                        <div class="row">
                                            <div class="col-md-4 col-6 profile-latest-img" v-for="list in media" v-bind:key="list.id">
                                                <img :src="list.file" class="img-fluid rounded"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import ClubMaster from "../Layout/Club/ClubMaster.vue";
export default {
    layout : ClubMaster,
    components: {
        Link,   
    },
    props: ['club','bin','media','tonkeepers'],
};
</script>
