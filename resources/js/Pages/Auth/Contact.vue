<script setup>
import Layout from '../../Layouts/Layout.vue'

    // defineProps({user: String})
    defineOptions({layout: Layout})

   import {useForm} from '@inertiajs/vue3'


   const form = useForm({
    phone: null,
    address: null,

   })

   const submit = () => {
    form.post(route('contact_store'))
   }


</script>

<template>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h3 class="text-center pub_s">
                        Contact Info
                    </h3>
                     <div class="form">
                        <form @submit.prevent="submit()">
                            <div class="form-group mt-3">
                                <label for="">Phone</label>
                                <input type="number" name="phone" class="form-control" v-model="form.phone">
                                <small class="text-danger">{{ $page.props.errors.phone }}</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control"  v-model="form.address">
                                <small class="text-danger">{{ $page.props.errors.address }}</small>

                            </div>

                            <div class="form-group mt-3 mt-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
