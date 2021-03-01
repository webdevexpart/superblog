<template>
<div>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Add New Category</div>
            </div>
            <div class="page-title-actions">
                <router-link to="/categories" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-arrow-alt-circle-left mr-1"></i>
                    <span>Back to list</span>
                </router-link>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form @submit.prevent="addCategory" >
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add Category</h5>
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input id="name" type="text" class="form-control" name="name" v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="status" name="status" v-model="form.status">
                                        <label class="custom-control-label" for="status">Status</label>
                                    </div>
                                </div>

                                <button type="reset" class="btn btn-danger">
                                    <i class="fas fa-reply mr-1"></i>
                                    <span>Reset</span>
                                </button>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-arrow-circle-right mr-1"></i>
                                    <span>Create</span>
                                </button>


                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</template>

<script>
export default {
name: "Create",

    data(){
    return{
        // Create a new form instance
        form: new Form({
            name: null,
            status: true
        })
    }
    },

    methods:{
        addCategory(){
            this.form.post('/category')
                .then((data)=>{
                    console.log(data)
                })
        }
    }
}
</script>

<style scoped>

</style>
