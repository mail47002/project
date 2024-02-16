<template>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Ton User Action</h2>
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
                                                <Link class="nav-link fw-bold" :href="route('bin.detail',bin.id)">
                                                    <span class="d-none d-md-block">Ton</span>
                                                </Link>
                                            </li>
                                            <li class="nav-item">
                                                <Link class="nav-link fw-bold" :href="route('bin.history',bin.id)">
                                                    <span class="d-none d-md-block">History</span>
                                                </Link>
                                            </li>
                                            <li class="nav-item">
                                                <Link class="nav-link fw-bold active" :href="route('bin.useraction',bin.id)">
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
                            <div class="col-lg-12 col-12 order-1 order-lg-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Old Bag Id</th>
                                                        <th class="text-center">New Bag Id</th>
                                                        <th class="text-center">Remark</th>
                                                        <th class="text-center">Disposable Bottles</th>
                                                        <th class="text-center">Returnable Bottles</th>
                                                        <th class="text-center">No Deposite Bottles </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="list in useraction" v-bind:key="list.id">
                                                        <td class="text-center">{{list.type}}</td>
                                                        <td class="text-center">{{list.old_bag_id}}</td>
                                                        <td class="text-center">{{list.new_bag_id}}</td>
                                                        <td class="text-center">{{list.remark}}</td>
                                                        <td class="text-center">{{list.disposable_bottles}}</td>
                                                        <td class="text-center">{{list.returnable_bottles}}</td>
                                                        <td class="text-center">{{list.no_deposite_bottles}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
    props: ['club','bin','useraction'],
};
</script>
