<template>
    <div class="container">
        <div class="form-row mt-4">
            <div class="col-row">
                <input type="text" class="form-control" @keyup="search" v-model="q">
            </div>
        </div>
        <add-task class="my-4" @added-task="refresh"></add-task>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center" v-for="task in tasks.data" :key="task.id">
                {{ task.name }}
                <div>
                    <button type="button" class="btn btn-secondary" @click="getTask(task.id)" data-toggle="modal" data-target="#editModalCenter">
                        Edit task
                    </button>
                    <button type="button" class="btn btn-danger" @click="deleteTask(task.id)">
                        Delete task
                    </button>
                </div>
            </li>

            <edit-task v-bind:taskToEdit="taskToEdit" @task-updated="refresh"></edit-task>
            
        </ul>
        <pagination :data="tasks" @pagination-change-page="getResults" class="mt-4"></pagination>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                tasks: {},
                taskToEdit: {},
                q: ''
            }
        },
        created(){
            this.getResults();
        },
        methods: {
            getResults(page = 1) {
                axios.get('http://laravue.test/tasks?page=' + page)
                    .then(response => this.tasks = response.data)
                    .catch(console.error());
            },
            getTask(id) {
                axios.get('http://laravue.test/tasks/edit/' + id)
                    .then(response => this.taskToEdit = response.data)
                    .catch(console.error());
            },
            deleteTask(id){
                axios.delete('http://laravue.test/tasks/' + id)
                    .then(response => this.tasks = response.data)
                    .catch(console.error());
            },
            search(){
                axios.get('http://laravue.test/tasks/' + this.q)
                    .then(response => this.tasks = response.data)
                    .catch(console.error());
            },
            refresh(response){
                this.tasks = response.data
            }
	    }
    }
</script>