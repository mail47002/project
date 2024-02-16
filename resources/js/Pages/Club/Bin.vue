<template>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Tons</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-12 col-12 order-2 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tons Name</th>
                                                        <th class="text-center">Tons Id</th>
                                                        <th class="text-center">Description</th>
                                                        <th class="text-center">City</th>
                                                        <th class="text-center">Street</th>
                                                        <th class="text-center">Zip</th>
                                                        <!--<th class="text-center">Actual Volume</th>
                                                        <th class="text-center">Max Volume</th>-->
                                                        <th class="text-center">Actual Volume Percent</th>
                                                        <th class="text-center">Daily Increment Bottle %</th>
                                                        <th class="text-center">Action</th>
                                                        <!--<th class="text-center">Battery</th>
                                                        <th class="text-center">Daily Decrement Battery</th>
                                                        <th class="text-center">Temperature</th>
                                                        <th class="text-center">Mess_Data</th>-->
                                                    </tr>
                                                </thead>
                                               
                                                    <tbody>
                                                        <tr v-for="list in bins" v-bind:key="list.id" >
                                                            <td class="text-center">{{list.name}}</td>
                                                            <td class="text-center">{{list.device_id}}</td>
                                                            <td class="text-center">{{list.description}}</td>
                                                            <td class="text-center">{{list.city}}</td>
                                                            <td class="text-center">{{list.street}}</td>
                                                            <td class="text-center">{{list.zip}}</td>
                                                            <!--<td class="text-center">{{list.actual_volume}}</td>
                                                            <td class="text-center">{{list.max_volume}}</td>-->
                                                            <td class="text-center">{{list.actual_volume_percent}}</td>
                                                            <td class="text-center">{{list.daily_increment_bottle}} %</td>
                                                            <td class="text-center">
                                                                <button @click="show(list)" class="btn btn-primary">Show</button>
                                                            </td>
                                                            <!--<td class="text-center">{{list.battery}}</td>
                                                            <td class="text-center">{{list.daily_decrement_battery}}</td>
                                                            <td class="text-center">{{list.temperature}}</td>
                                                            <td class="text-center">{{list.mess_data}}</td>-->
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
    props: ['club','bins'],
    methods: {
        show: function(data)
        {
            this.$inertia.get('/club/bindetail/' + data.id)
        },
    }
};
</script>





























<!--<template>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">
                                    <div class="bs-stepper register-multi-steps-wizard shadow-none">
                                        <div class="bs-stepper-header px-0" role="tablist">
                                            <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="trash" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Bin Information</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="line">
                                                <i data-feather="chevron-right" class="font-medium-2"></i>
                                            </div>
                                            <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="map" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Bin Location</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content px-0 mt-1">
                                            <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                                                <div class="content-header mb-2">
                                                    <h2 class="fw-bolder mb-75">Bin Details</h2>
                                                </div>
                                                <form class="form form-vertical">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Tons Name</th>
                                                                    <th class="text-center">Tons Id</th>
                                                                    <th class="text-center">Description</th>
                                                                    <th class="text-center">City</th>
                                                                    <th class="text-center">Street</th>
                                                                    <th class="text-center">Zip</th>
                                                                    <th class="text-center">Actual Volume</th>
                                                                    <th class="text-center">Max Volume</th>
                                                                    <th class="text-center">Actual Volume Percent</th>
                                                                    <th class="text-center">Daily Increment Bottle</th>
                                                                    <th class="text-center">Battery</th>
                                                                    <th class="text-center">Daily Decrement Battery</th>
                                                                    <th class="text-center">Temperature</th>
                                                                    <th class="text-center">Mess_Data</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr v-for="list in bin" v-bind:key="list.id">
                                                                    <td class="text-center">{{list.name}}</td>
                                                                    <td class="text-center">{{list.device_id}}</td>
                                                                    <td class="text-center">{{list.description}}</td>
                                                                    <td class="text-center">{{list.city}}</td>
                                                                    <td class="text-center">{{list.street}}</td>
                                                                    <td class="text-center">{{list.zip}}</td>
                                                                    <td class="text-center">{{list.max_volume}}</td>
                                                                    <td class="text-center">{{list.actual_volume}}</td>
                                                                    <td class="text-center">{{list.actual_volume_percent}}</td>
                                                                    <td class="text-center">{{list.daily_increment_bottle}}</td>
                                                                    <td class="text-center">{{list.battery}}</td>
                                                                    <td class="text-center">{{list.daily_decrement_battery}}</td>
                                                                    <td class="text-center">{{list.temperature}}</td>
                                                                    <td class="text-center">{{list.mess_data}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                                        <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                        <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
                                                <div class="d-flex justify-content-between mt-1">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>s
</template>
    
<script>
import { Link } from "@inertiajs/inertia-vue3";
import ClubMaster from "../Layout/Club/ClubMaster.vue";
export default {
    layout : ClubMaster,
    components: {
        Link,   
    },
    props: ['club','bin'],
};
</script>-->
