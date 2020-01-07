<!-- <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <img src="https://codefactory.wien/wp-content/themes/hestia/cf-images/big-jpg/2-fullstack.jpg" style="width:100%" alt="">
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="row">
                                <p id="title"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <p id="description"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10 m-auto">
                            <select id="select_date" class="md-form mdb-select form-control colorful-select dropdown-primary">
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="update">Save changes</button>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade " id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
                        <img src="https://codefactory.wien/wp-content/themes/hestia/cf-images/big-jpg/2-fullstack.jpg" class="img-fluid" alt="" id=image>
                    </div>
                    <div class="col-7">
                        <p id="title"><strong></strong></p>
                        <!-- <h4 class="h4-responsive" id="price">
                            <span>
                                <strong id="price">&euro;500</strong>
                            </span>
                            <span>
                                <small class="font-weight-bold">
                                    <s>&euro;500</s>
                                </small>
                            </span>
                        </h4> -->
                        
                    <div class="row justify-content-center my-4">
                        <div class="col-md-10 m-auto">
                            <select id="select_date" class="md-form mdb-select form-control colorful-select dropdown-primary">
                            </select>
                        </div>
                    </div>
                        <p id="description"></p>
                        <div class="mt-2">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
