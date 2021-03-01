<template>
<div>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Categories</div>
            </div>
            <div class="page-title-actions">

                <router-link to="/add-category" class="btn-shadow mr-3 btn btn-primary">
                    <i class="fa fa-plus-circle mr-1"></i>
                    <span>Create Categories</span>
                </router-link>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="table-responsive">
                    <table id="dataTable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Joined At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="text-center text-muted">#</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle"
                                                     src="" alt="User Avatar">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading"></div>
                                            <div class="widget-subheading opacity-7">

                                                <span class="badge badge-info"></span>

                                                <span class="badge badge-danger">No role found :(</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"></td>
                            <td class="text-center">

                                <div class="badge badge-success">Active</div>

                                <div class="badge badge-danger">Inactive</div>

                            </td>
                            <td class="text-center"></td>
                            <td class="text-center">
                                <a class="btn btn-secondary btn-sm" href="">
                                    <i class="fas fa-eye mr-1"></i>
                                    <span>Show</span>
                                </a>
                                <a class="btn btn-info btn-sm" href="">
                                    <i class="fas fa-edit mr-1"></i>
                                    <span>Edit</span>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm"
                                        onclick="deleteData()">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                    <span>Delete</span>
                                </button>
                                <form id="delete-form-"
                                      action="" method="POST"
                                      style="display: none;">

                                </form>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Manage"
}
</script>

<style scoped>

</style>
