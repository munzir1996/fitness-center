<template>

  <layout>
      <div class="container">
          <form @submit.prevent="handleSubmit">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" v-model="lead.name"
                        id="name" tabindex="1">
                        <div v-if="$page.errors.name" class="error">
                            {{$page.errors.name[0]}}
                        </div>
                        <label for="Phone">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Phone" v-model="lead.phone"
                        id="phone" tabindex="3">
                        <div v-if="$page.errors.phone" class="error">
                        {{$page.errors.phone[0]}}
                        </div>
                        <label for="Package">Package</label>
                        <input type="text" class="form-control" placeholder="Enter package" v-model="lead.package"
                        id="package" tabindex="5">
                        <div v-if="$page.errors.package" class="error">
                        {{$page.errors.package[0]}}
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" v-model="lead.email"
                        id="email" tabindex="2">
                        <div v-if="$page.errors.email" class="error">
                        {{$page.errors.email[0]}}
                        </div>

                        <label for="dob">Bithday</label>
                        <input type="date" class="form-control" placeholder="Enter dob" v-model="lead.dob"
                        id="dob" tabindex="4">
                        <div v-if="$page.errors.dob" class="error">
                        {{$page.errors.dob[0]}}
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <button class="btn btn-success">Save</button>
                      <inertia-link class="btn btn-warning" :href="$route('lead.list')">Back</inertia-link>
                  </div>
              </div>
          </form>
      </div>
  </layout>

</template>

<script>
import Layout from './../../Shared/Layout';

export default {

    components: {
        Layout,
    },
    data(){
        return{
            lead:{
                name:'',
                email:'',
                phone:'',
                dob:'',
                package :'',
            }
        }
    },
    methods:{
        async handleSubmit(){
            let response = await this.$inertia.post('/leads/save', this.lead)
        },
    },

}
</script>

<style>

</style>



