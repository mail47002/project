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
                                        <h4 class="card-title">Location Information</h4>
                                        <Link href="/admin/location/create"><button type="button" class="btn btn-success waves-effect waves-float waves-light">Add</button></Link>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Location</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="list in location" v-bind:key="list.id">
                                                        <td class="text-center">{{list.name}}</td>
                                                        <td class="text-center">
                                                            <button @click="edit(list)" class="btn btn-primary">Edit</button>&nbsp;&nbsp;
                                                            <button @click="deleteRow(list)" class="btn btn-danger">Delete</button>
                                                        </td>
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
    props: ['data','location'],
    methods: {
        deleteRow: function(data)
        {
            alert('Are you sure to delete ?')
            this.$inertia.get('/admin/location/delete/' + data.id)
        },
        edit: function(data)
        {
            this.$inertia.get('/admin/location/edit/' + data.id)
        },
    }
};
</script>