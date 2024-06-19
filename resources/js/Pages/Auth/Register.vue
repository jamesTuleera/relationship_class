<script setup>
import Layout from '../../Layouts/Layout.vue'

    // defineProps({user: String})
    defineOptions({layout: Layout})

   import {useForm} from '@inertiajs/vue3'


   const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
   })

   const submit = () => {
    form.post(route('register'))
   }


</script>

<template>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h3 class="text-center james">
                        Register
                    </h3>
                     <div class="form">
                        <form @submit.prevent="submit()">
                            <div class="form-group mt-3">
                                <label for="">name</label>
                                <input type="text" name="name" class="form-control" v-model="form.name">
                                <small class="text-danger">{{ $page.props.errors.name }}</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">email</label>
                                <input type="email" name="email" class="form-control"  v-model="form.email">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control"  v-model="form.password">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control"  v-model="form.password_confirmation">
                            </div>
                            <div class="form-group mt-3 mt-3">
                                <button class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
