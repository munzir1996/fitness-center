<template>

  <layout>
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <h1>Leads</h1>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <table class="table table-bordered bg-white">
                      <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Age</th>
                          <th>Package</th>
                          <th>Added On</th>
                          <th></th>
                      </tr>
                      <tr v-for="lead in leads" :key="lead.id">
                          <td>{{lead.id}}</td>
                          <td>{{lead.name}}</td>
                          <td>{{lead.email}}</td>
                          <td>{{lead.phone}}</td>
                          <td>{{lead.age}}</td>
                          <td>{{lead.package}}</td>
                          <td>{{lead.created_at}}</td>
                          <td>
                                <inertia-link class="btn btn-primary" :href="$route('lead.view', {lead: lead})">
                                  Edit
                                </inertia-link>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>

      </div>
  </layout>

</template>

<script>
import Layout from './../../Shared/Layout';

export default {

    components: {
        Layout,
    },
    props: ['leads'],
    data(){
        return{

        }
    },
    methods:{

    },

}
</script>

<style>

</style>



