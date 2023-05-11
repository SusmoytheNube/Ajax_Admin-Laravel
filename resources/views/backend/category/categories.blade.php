@extends('backend.master')
@section('main-content')
 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">DataTable Import</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addcatModal"><i class="lni lni-plus"></i> Add Category</button>
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>#SL.</th>
										<th>Category Name</th>
										<th>Description</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody id="tbody">
									
								</tbody>
								<tfoot>
									<tr>
										<th>#SL.</th>
										<th>Category Name</th>
										<th>Description</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

<!--Add Modal-->
<div class="modal fade" id="addcatModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="full">
                    <div class="mb-3 form-group">
                        <label for="catname" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="catname" name="catname" placeholder="Category Name">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="catdes" class="form-label">Category Description</label>
                        <textarea class="form-control" name="catdes" id="catdes" cols="30" rows="5" placeholder="Category Description"></textarea>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="catstatus" class="form-label">Select Status</label>
                        <select name="catstatus" id="catstatus" class="form-control form-select">
                            <option selected>---Select---</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addcat">Add Category</button>
            </div>
        </div>
    </div>
</div>
<!--Dele Modal-->
<div class="modal fade" id="delteModal" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Confirmation Message</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				Are You Sure?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-bs-dismiss="modal">No</button>
				<button type="button" class="btn btn-danger" id="deletecat">Yes</button>
			</div>
		</div>
	</div>
</div>

<!--Add Modal-->
<div class="modal fade" id="editcatModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="full">
                    <div class="mb-3 form-group">
                        <label for="catname" class="form-label">Category Name</label>
                        <input type="text" class="form-control catname" id="catname" name="catname" placeholder="Category Name">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="catdes" class="form-label">Category Description</label>
                        <textarea class="form-control catdes" name="catdes" id="catdes" cols="30" rows="5" placeholder="Category Description"></textarea>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="catstatus" class="form-label">Select Status</label>
                        <select name="catstatus" id="catstatus" class="form-control form-select catstatus">
                            <option selected>---Select---</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-success" id="updatecate">Update Category</button>
            </div>
        </div>
    </div>
</div>
@endsection