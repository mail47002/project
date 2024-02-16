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
                                        <h4 class="card-title">User Action</h4>
                                    </div>
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
                                                    <tr v-for="list in userAction" v-bind:key="list.id">
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
                    </div>
                </section>
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
    props: ['userAction','club'],
};
</script>