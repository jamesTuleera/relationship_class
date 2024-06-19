<script setup>
import Layout from "../Layouts/Layout.vue";
import { Link, useForm } from "@inertiajs/vue3";

defineProps({ users: String });
defineOptions({ layout: Layout });

const form = useForm({});
let sn = 1;
</script>

<template>
  <div>
    <div class="container">
      <div class="col-3"></div>
      <div class="col-md-6">
        <h1>Users</h1>
        <div class="table">
          <table class="table">
            <tr>
              <th>S/N</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Date</th>
            </tr> 
            <tr v-for="user in users" :key="user.id">
              <td>{{ sn++ }}</td>
              <td>{{ user.name }}</td>
              <td>{{ user.email }}</td>
              <td>
                <span v-if="user.contact">
                  <span
                    class="text-dark m-2"
                    v-for="contact in user.contact"
                    :key="contact.id"
                    >{{ contact.phone }}
                    <Link
                      :href="route('delete', { id: contact.id })"
                      method="POST"
                      type="submit"
                      :disabled="form.processing"
                      disable-while-processing
                      preserve-scroll
                      class="btn btn-sm btn-danger m-2"
                      :preserveState="true"
                    >
                      x
                    </Link>
                  </span>
                </span>
              </td>
              <td>{{ user.created_at }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
