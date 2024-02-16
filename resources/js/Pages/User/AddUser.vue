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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Employee Details Form </h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical" @submit.prevent="addEmployee" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="name-icon">Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="name-icon" class="form-control" v-model="form.name" placeholder="Name" />
                                                    </div>
                                                    <div v-if="errors.name"> 
                                                        <label class="form-label alert alert-danger" >{{errors.name}}</label>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-icon">Email</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                                        <input type="email" id="email-id-icon" class="form-control" v-model="form.email" placeholder="Email" />
                                                    </div>
                                                    <div v-if="errors.email"> 
                                                        <label class="form-label alert alert-danger" >{{errors.email}}</label>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="contact-info-icon">Phone</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="phone"></i></span>
                                                        <input type="text" id="phone-info-icon" class="form-control" v-model="form.phone" placeholder="Phone" />
                                                    </div>
                                                </div>
                                                <div v-if="errors.phone"> 
                                                    <label class="form-label alert alert-danger" >{{errors.phone}}</label>  
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Save</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
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
import { useForm } from "@inertiajs/inertia-vue3";
import ClubMaster from "../Layout/Club/ClubMaster.vue";
export default {
    layout : ClubMaster,
    components: {
        Link,
    },
    setup() {
        const form = useForm({
            name: null,
            email: null,
            phone:null,
        });

        return { form };
    },
    methods: {
        addEmployee() {
            this.form.post("/club/employee/store");
        },
    },
     props: ['errors','club'],
};
</script>