
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header py-6">
        <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Coupans</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Offcanvas Body -->
        <div class="offcanvas-body border-top">
            <form id="coupans-add-form" method="post" data-table="coupans" action="{{ route('coupans.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-1">
                    <label class="form-label" for="code">Code</label>
                        <input type="text" class="form-control text-uppercase" id="code" name="code" placeholder="Enter coupans code"/>
                    <span id="error-code" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="type">Coupan Type</label>
                    <select class="form-select" id="type" name="type">
                    <option value="">Select Coupans</option>
                        <option value="fixed">Fixed</option>
                        <option value="percentage"> Percentage</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="value">Coupan value</label>
                    <input type="text" class="form-control capitalize" id="value" name="value"/>
                    <span id="error-value" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="min_purchase_amount"> Minimum Purchase Amount</label>
                    <input type="text" class="form-control" id="min_purchase_amount" name="min_purchase_amount"/>
                    <span id="error-min_purchase_amount" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="from_date">From Date</label>
                    <input type="date" class="form-control" id="from_date" name="from_date"/>
                    <span id="error-from_date" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="to_date">To Date</label>
                    <input type="date" class="form-control" id="to_date" name="to_date"/>
                    <span id="error-to_date" class="text-danger input-error"></span>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
                <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
            </form>


            <span class="text-success text-success d-none fs-5 fw-bold" id="success-msg"></span>
        </div>
    </div>
