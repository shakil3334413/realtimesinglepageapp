<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 mb-3">
                <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#modal-primary">
                  Category Add
                </button>
                 <!-- /.modal -->
                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Category Add</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="categoryname">Category Name</label>
                                            <input type="text" class="form-control" id="categoryname" placeholder="Enter Your Category Name">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <input type="submit" class="btn btn-outline-success">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
           <div class="col-md-12">
               <section class="category">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">category List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>This is </td>
                                        <td>THis is</td>
                                        <td>This is </td>
                                        <td>THis is</td>
                                        <td>thiaif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
           </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
