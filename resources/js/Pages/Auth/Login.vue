<script setup>
import Layout from '../../Layouts/Layout.vue'

    // defineProps({user: String})
    defineOptions({layout: Layout})

   import {useForm} from '@inertiajs/vue3'


   const form = useForm({

    email: null,
    password: null,
    password_confirmation: null
   })

   const submit = () => {
    form.post(route('login'), {
        onError: () => form.reset('password')
    })
   }


</script>

<template>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h3 class="text-center mt-5">
                        Login
                    </h3>
                     <div class="form shadow shadow p-3 mb-5 bg-body rounded">
                        <form @submit.prevent="submit()">
                           <div class="form-group mt-3">
                                <label for="">email</label>
                                <input type="email" name="email" class="form-control"  v-model="form.email">
                                <small class="text-danger">{{$page.props.errors.email}}</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control"  v-model="form.password">
                                <small class="text-danger">{{$page.props.errors.password}}</small>

                            </div>
                            <div class="form-group mt-3 mt-3">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
