<template>
   <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <div class="row" id="table-bordered">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Employee Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center">Phone</th>
                                                        <th class="text-center">language</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="list in user" v-bind:key="list.id">
                                                        <td class="text-center">{{list.name}}</td>
                                                        <td class="text-center">{{list.email}}</td>
                                                        <td class="text-center">{{list.phone}}</td>
                                                        <td class="text-center">{{list.language}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Master from "../Layout/Admin/Master.vue";
export default {
    layout : Master,
    components: {
        Link,   
    },
    props: ['user','data'],
};
</script>