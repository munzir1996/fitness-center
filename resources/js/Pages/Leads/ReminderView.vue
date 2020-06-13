<template>
    <layout>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <inertia-link :href="$route('lead.list')">Leads</inertia-link>
                        <span class="breadcrumb-sep"></span>
                        <inertia-link :href="$route('lead.view', {lead, lead})">Leads Details</inertia-link>
                        <span class="breadcrumb-sep"></span>
                        Reminder View
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Add reminder
                        </div>
                        <div class="card-body">
                            <reminder-form :main-reminder="reminder" :lead="lead"
                            @reminderSubmit="handleSubmit"
                            @addNewReminder="handleAddNewReminder"
                            ></reminder-form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </layout>

</template>

<script>
    import Layout from './../../Shared/Layout';
    import ReminderForm from './ReminderForm';

    export default {

        components: {
            Layout,
            ReminderForm,
        },
        props: {
            lead: Object,
            reminder: Object,
        },
        data() {
            return {

            }
        },
        created() {
        },
        methods: {
            handleSubmit(postData) {
                this.$inertia.post('/leads/update', this.lead)
            },
            handleAddNewReminder(data){
                const postData = {
                    reminder_id: data.id
                }
                this.$inertia.post(route('reminder.update'), postData)
            },

        },

    }

</script>

<style>

</style>
