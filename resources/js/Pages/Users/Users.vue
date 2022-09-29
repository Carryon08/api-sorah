<script>
import axios from 'axios';

    export default {
        data () {
            return {
                users: {},
            };
        },

        props: {
        },

        mounted() {
            this.getUsesrs();
        },

        methods:{
            getUsesrs(){
                let config = {
                    headers: {
                        'Authorization': 'Bearer ' + '11|f8D1iLpfyX7jgV8Mtcy9q4n9ZmmSa9OGl6KYgsgP'
                    }
                }
                axios.get("http://api-sorah.test/api/user/index", config).then((res) => {
                    this.users = res.data.data;
                });
            },
            deleteUser(){
                let config = {
                    headers: {
                        'Authorization': 'Bearer ' + '11|f8D1iLpfyX7jgV8Mtcy9q4n9ZmmSa9OGl6KYgsgP'
                    }
                }
                axios.get("http://api-sorah.test/api/user/index", config).then((res) => {
                    this.users = res.data.data;
                });
            },
        }
    }

</script>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import './../../bootstrap';
</script>


<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                Lista de usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <button type="button" style="background-color: #4CAF50; border-radius: 20%;
                            color: white; padding: 10px 18px; float: right;" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                        Crear
                    </button>
                    <table id="customers">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            <tr v-for="user in users">
                                <td>{{user.id}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>
                                    <form>
                                        <button style="background-color: #008CBA; border-radius: 20%; color: white; padding: 2% 6%;">
                                            Editar
                                        </button>
                                        <button style="background-color: #f44336; border-radius: 20%; color: white; padding: 2% 6%;">
                                            Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>

</template>

<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
</style>
