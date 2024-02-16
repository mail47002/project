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
                                                        <i data-feather="trash" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Bin Location</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="line">
                                                <i data-feather="chevron-right" class="font-medium-2"></i>
                                            </div>
                                            <div class="step" data-target="#billing" role="tab" id="billing-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="trash" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Bin Images</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content px-0 mt-4">
                                            <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
                                                <div class="content-header mb-2">
                                                    <h2 class="fw-bolder mb-75">Bin Details</h2>
                                                </div>
                                                <form class="form form-vertical" @submit.prevent="updateBin(form)" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="name-icon">Device Name</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text"><i data-feather="user"></i></span>
                                                                    <input type="text" id="name-icon" class="form-control" v-model="form.name" placeholder="Name" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="device-id-icon">Device Id</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text"><i data-feather=""></i></span>
                                                                    <input type="text" id="device-id-icon" class="form-control" v-model="form.device_id" placeholder="Device Id" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="name-icon">Increment of Tons</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text"><i data-feather=""></i></span>
                                                                    <input 
                                                                        type="text"    
                                                                        id="name-icon"  
                                                                        class="form-control" 
                                                                        v-model="form.increment_tons" 
                                                                        placeholder="Increment of Tons" 
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="name-icon">Decrement of Battery</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text"><i data-feather=""></i></span>
                                                                    <input 
                                                                        type="text"    
                                                                        id="name-icon"  
                                                                        class="form-control" 
                                                                        v-model="form.decrement_battery" 
                                                                        placeholder="Decrement of Battery" 
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-06">
                                                            <div class="mb-1">
                                                                <label for="Address" class="form-label">Select TonKeepers</label>
                                                                <Multiselect
                                                                    v-model="form.tonkeeper"
                                                                    mode="tags"
                                                                    :close-on-select="false"
                                                                    :options="user"
                                                                />
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-06">
                                                            <div class="mb-1">
                                                                <label for="Address" class="form-label">Select Bags</label>
                                                                <Multiselect
                                                                    v-model="form.bag"
                                                                    mode="tags"
                                                                    :close-on-select="false"
                                                                    :options="bag"
                                                                />
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-12">
                                                            <div class="mb-1">
                                                                <label for="Address" class="form-label">Select Status</label>
                                                                <select 
                                                                    class="form-control" 
                                                                    v-model="form.status">
                                                                    <option :value="1">Good</option>
                                                                    <option :value="2">Not Working</option> 
                                                                    <option :value="3">Error</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-1">
                                                                <label for="Address" class="form-label">Description</label>
                                                                <textarea id="address-info-icon" class="form-control" v-model="form.description"></textarea>
                                                            </div>
                                                        </div>
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
                                              <form class="form form-vertical" @submit.prevent="updateBin(form)" method="post">
                                                    <div role="tabpanel" class="tab-pane" id="address" aria-labelledby="home-tab" aria-expanded="true">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title"></h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <GMapMap
                                                                        ref="myMarker"
                                                                        style="height: 30rem"
                                                                        :center="center"
                                                                        :zoom="12"
                                                                        >
                                                                            <GMapMarker
                                                                                :key="index"
                                                                                v-for="(m, index) in markers"
                                                                                :position="m.position"
                                                                                :clickable="true"
                                                                                :draggable="true"
                                                                                @click="center = m.position"
                                                                                @dragend="showLocation"
                                                                            />
                                                                        </GMapMap>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-12">
                                                                                <label class="form-label" for="street-column">Location</label>
                                                                                <GMapAutocomplete
                                                                                class="form-control"
                                                                                placeholder="search Location"
                                                                                @place_changed="setPlace"
                                                                                >
                                                                                </GMapAutocomplete>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-1">
                                                                            <div class="col-md-12 col-12">
                                                                                <label class="form-label" for="street-column">Street</label>
                                                                                <input
                                                                                type="text"
                                                                                id="street-column"
                                                                                class="form-control"
                                                                                placeholder="street"
                                                                                v-model="form.street"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-1">
                                                                            <div class="col-md-12 col-12">
                                                                                <label class="form-label" for="city-column">City</label>
                                                                                <input
                                                                                type="text"
                                                                                id="city-column"
                                                                                class="form-control"
                                                                                placeholder="City"
                                                                                v-model="form.city"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-1">
                                                                            <div class="col-md-12 col-12">
                                                                                <label class="form-label" for="zip-column">Zipcode</label>
                                                                                <input
                                                                                type="text"
                                                                                id="zip-column"
                                                                                class="form-control"
                                                                                placeholder="zipcode"
                                                                                v-model="form.zip"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-1">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label" for="latitude-column">
                                                                                    Latitude
                                                                                </label>
                                                                                <input
                                                                                type="text"
                                                                                id="latitude-column"
                                                                                class="form-control"
                                                                                placeholder="Latitude"
                                                                                v-model="form.latitude"
                                                                                readonly
                                                                                />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label" for="longitude-column">
                                                                                    Longitude
                                                                                </label>
                                                                                <input
                                                                                type="text"
                                                                                id="longitude-column"
                                                                                class="form-control"
                                                                                placeholder="Longitude"
                                                                                v-model="form.longitude"
                                                                                readonly
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                        <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="billing" class="content" role="tabpanel" aria-labelledby="billing-trigger">
                                                <form class="form form-vertical" @submit.prevent="updateBin(form)" method="post">   
                                                   <div role="tabpanel" class="tab-pane" id="media" aria-labelledby="media-tab" aria-expanded="true">
                                                        <div class="card">
                                                            <div class="content-header mb-2">
                                                                <h2 class="fw-bolder mb-75">Bin Images</h2>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                                                        <label for="formFile" class="form-label">Choose Image</label>
                                                                        <input
                                                                        class="form-control"
                                                                        type="file"
                                                                        id="formFile"
                                                                        accept="image/*"
                                                                        @change="setImage"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12" v-if="media.length > 0">
                                                                        <div class="card shadow-none bg-transparent" v-if="media">
                                                                            <div class="row">
                                                                                <div class="col-md-2" v-for="imageObj in media" v-bind:key="imageObj.id">
                                                                                    <Span
                                                                                        @click="deleteFile(imageObj)"
                                                                                        class="dltbtn"
                                                                                        style="
                                                                                        position: relative;
                                                                                        bottom: 10;
                                                                                        top: 38px;
                                                                                        right: -21px;
                                                                                        color: red;
                                                                                        cursor: pointer;
                                                                                        "
                                                                                    >
                                                                                       X
                                                                                    </Span>
                                                                                    <img
                                                                                        :src="imageObj.file"
                                                                                        class="rounded mr-2 img-fluid mb-1 mb-md-0"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between mt-1">
                                                                <button class="btn btn-success" type="submit">
                                                                    <i data-feather="check" class="align-middle me-sm-25 me-0"></i>
                                                                    <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="d-flex justify-content-between mt-1">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                </div>
                                                <div class="modal fade" id="crop-modal" data-keyboard="false" data-backdrop="static">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Image Crop</h5>
                                                                <button
                                                                type="button"
                                                                class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close"  
                                                                >
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 p-2" v-if="imgSrc.length > 0">
                                                                        <vue-cropper
                                                                            ref="cropper"
                                                                            :src="imgSrc"
                                                                            alt="Source Image"
                                                                            @cropstart="showModal"
                                                                            :min-container-width="450"
                                                                            :min-container-height="350"
                                                                            :min-canvas-width="400"
                                                                            :min-canvas-height="350"
                                                                            :aspect-ratio="4 / 3"
                                                                        >
                                                                        </vue-cropper>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-primary float-left"
                                                                    @click="cropImage"
                                                                >
                                                                    Crop
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-outline-secondary"
                                                                    data-dismiss="modal"
                                                                >
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
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
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import VueCropper from 'vue-cropperjs';
import Master from "../Layout/Admin/Master.vue";
import Multiselect from '@vueform/multiselect'
import 'cropperjs/dist/cropper.css';
export default {
    layout : Master,
    components: {
        Link,
        VueCropper,
        Multiselect,
    },
    setup(props) {
        const form = useForm({
            name: props.bin.name,
            device_id: props.bin.device_id,
            street:props.bin.street,
            city:props.bin.city,
            zip:props.bin.zip,
            status:props.bin.status,
            latitude:props.bin.latitude,
            longitude:props.bin.longitude,
            description:props.bin.description,
            decrement_battery:props.bin.daily_decrement_battery,
            increment_tons:props.bin.daily_increment_bottle,
            images:[],
            tonkeeper:props.binUsers,
            bag:props.binBags,
            id:props.bin.id
        });
        return { form };
    },
    data() {
        return {
            center: { lat: 52.1545964, lng: 9.8438902 },
            cropImg: "",
            imgSrc: "",
            markers: [
                {
                position: {
                    lat: 52.1545964,
                    lng: 9.8438902,
                },
                },
            ],
        };
    },
    
    methods: {
        updateBin(form) {
            this.form.post("/admin/bin/update/" + form.id);
        },
        deleteFile(imageObj) {
            this.form.post("/admin/bin/delete/image/" + imageObj.id);
        },
        cropImage() {
            this.form.images.push(this.$refs.cropper.getCroppedCanvas().toDataURL());
            $("#crop-modal").modal("hide");
            this.imgSrc = "";
        },
        setImage: function (event) {
            var input = event.target;
            if (!input.files[0].type.includes("image/")) {
                alert("Please select an image file");
                return false;
            }

            if (typeof FileReader === "function") {
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = (e) => {
                    this.imgSrc = e.target.result;
                    //alert(e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
                $("#crop-modal").modal("show");
                this.uploadType = "profile";

                }
            } 
            else 
            {
                alert("Hello");
            }
        },
        handleMarkerChange() {
            alert(111);
            // center = m.position
        },
        showLocation(evt) {
            this.markers = [
                {
                    position: {
                        lat: evt.latLng.lat(),
                        lng: evt.latLng.lng(),
                    },
                },
            ];

            this.center = {
                lat: evt.latLng.lat(),
                lng: evt.latLng.lng(),
            };
            this.form.latitude = evt.latLng.lat();
            this.form.longitude = evt.latLng.lng();
        },
        setPlace(place) {
            this.markers = [
                {
                position: {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng(),
                },
                },
            ];

            this.center = {
                lat: place.geometry.location.lat(),
                lng: place.geometry.location.lng(),
            };
            let arrAddress = place.address_components;
            let that = this;
            that.form.street = null;
            that.form.city = null;
            that.form.zip = null;
            $.each(arrAddress, function (i, address_component) {
                console.log(address_component);
                if (address_component.types[0] == "route") {
                that.form.street = that.form.street_number
                    ? that.form.street_number + " " + address_component.long_name
                    : address_component.long_name;
                }

                if (address_component.types[0] == "locality") {
                that.form.city = address_component.long_name;
                }

                if (address_component.types[0] == "postal_code") {
                that.form.zip = address_component.long_name;
                }

                if (address_component.types[0] == "street_number") {
                that.form.street_number = that.form.street
                    ? address_component.long_name + " " + that.form.street
                    : address_component.long_name;
                }
            });
            this.form.latitude = place.geometry.location.lat();
            this.form.longitude = place.geometry.location.lng();
        },
    },
     props: ['data','bin','media','user','bag','binUsers','binBags'],
};
</script>
<style src="@vueform/multiselect/themes/default.css"></style>