<template>
    <AppLayout>
        <template #content>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="py-3 filters-margin mx-2 text-sm card-body">
                            <div class="d-flex">
                                <div class="col-6">
                                    <h6 class="heading-small mt-4 text-muted">Hotel Information</h6>
                                </div>

                                <div class="col-6  text-end">
                                    <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                                        data-bs-target="#addHotelModal">
                                        Add Hotel
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-4 mb-3">
                            <div class="">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-start">Name</th>
                                            <th class="text-start
                                                ">Email</th>
                                            <th class="text-start
                                                ">Type</th>
                                            <th class="text-start
                                                ">City</th>
                                            <th class="text-start
                                                ">Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-data">
                                                maison Samara
                                            </td>
                                            <td class="table-data
                                                ">
                                                samraa@gmail.com
                                            </td>
                                            <td class="table-data
                                                ">
                                                5 star
                                            </td>
                                            <td class="table-data
                                                ">
                                                hikkaduwa
                                            </td>
                                            <td class="table-data
                                                ">
                                                7768542585
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template #modals>
            <div class="modal fade
                " id="addHotelModal" tabindex="-1" aria-labelledby="addHotelModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addHotelModalLabel">Add Hotel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body
                            ">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" v-model="newHotel.name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" v-model="newHotel.email">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <input type="text" class="form-control" id="type" v-model="newHotel.type">
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" v-model="newHotel.city">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" v-model="newHotel.phone">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" @click="addHotel">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>


<script>

import AppLayout from '@/Layouts/App.vue'
import axios from 'axios';

export default {
    components: {
        AppLayout,
    },

    data() {
        return {
            newHotel: {
                name: '',
                email: '',
                type: '',
                city: '',
                phone: ''
            },

            Hotel_list: [] //Initializing an array  of Hotel data
        };
    },
    beforeMount() {
        this.getHotel();
    },

    methods: {

        async getHotel() {
            const response = await axios.get(route('hotel.list')); // fetch Hotel data.
            this.Hotel_list = response.data;

        },



        async addHotel() {

            const { ...HotelData } = this.newHotel;
            await axios.post(route('hotel.save'), hotelData);

            this.getHotel();

            this.newHotel = {
                name: '',
                email: '',
                type: '',
                city: '',
                phone: ''
            };

        },


    }

}

</script>

<style scoped>
.table-data {
    padding-left: 25px;
}
</style>
