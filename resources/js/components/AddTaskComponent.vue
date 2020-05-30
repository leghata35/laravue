<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add task
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Task name :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" v-model="taskName" placeholder="Name of task">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" @click="saveTask" data-dismiss="modal">Save task</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>


<script>
export default {
    data(){
        return {
            taskName: ''
        }
    },
    methods:{
        saveTask(){
            axios.post('http://laravue.test/tasks', {
                name: this.taskName,
            })
                .then(response => this.$emit('added-task', response))
                .catch(console.error());
        }
    }
}
</script>