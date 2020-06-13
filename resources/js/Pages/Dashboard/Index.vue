<template>

  <layout>
      <div class="container">
          <div class="row">
              <div class="col-md-12">

                <p>This is dashboard {{fname}}, {{lname}}</p>

              </div>
          </div>

            <div class="row">
                <div class="col-sm-4">
                    <reminder-list :reminders="reminders"></reminder-list>
                </div>
            </div>


        </div>
  </layout>

</template>

<script>
import Layout from './../../Shared/Layout';
import ReminderList from './ReminderList';

export default {

    components: {
        Layout,
        ReminderList,
    },
    props: ['fname', 'lname', 'reminders']

}
</script>

<style>

</style>



