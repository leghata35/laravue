<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="editModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLongTitle">Edit task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Task name :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" v-model="taskToEdit.name" placeholder="Name of task">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" @click="update" data-dismiss="modal">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        props: ['taskToEdit'],

        methods: {
            update(){
                axios.patch('http://laravue.test/tasks/edit/' + this.taskToEdit.id, {
                    name: this.taskToEdit.name
                })
                    .then(response => this.$emit('task-updated', response))
                    .catch(console.error());
            }
        }

    }
</script>