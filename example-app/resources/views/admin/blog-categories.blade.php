<x-app-layout>
    <!-- Start Content -->
    <div class="content">

        <!-- Page Header -->
        <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
            <div class="flex-grow-1">
                <h4 class="fw-bold mb-0">Categories</h4>
            </div>
            <div class="text-end">
                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#add_categories"><i class="ti ti-plus me-1"></i>Add New Categories</a>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Table List -->
        <div class="table-responsive border">
            <table class="table table-nowrap">
                <thead class="tablehead-light">
                    <tr>
                        <th>Categories</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->format('d M Y')}}</td>
                        <td><span
                                class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">{{$category->status}}</span>
                        </td>
                        <td class="action-item">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="btn p-1 btn-white border">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#edit_categories">Edit</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories">Delete</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- /Table List -->

    </div>
    <!-- End Content -->



    <!-- Start Add Categories -->
    <div id="add_categories" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-dark modal-title">Add New Category</h5>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <form action="{{route('admin.add.category')}}" method="post">@csrf
                    <div class="modal-body">
                        @foreach ($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                        @endforeach
                        <div class="mb-2">
                            <label class="form-label">Category Name<span class="text-danger ms-1">*</span></label>
                            <input type="text" class="form-contro" name="name">
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Status<span class="text-danger ms-1">*</span></label>
                            <select class="select" name="status">
                                <option>Select</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center gap-1">
                        <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Add Categories -->

    <!-- Start Edit Categories -->
    <div id="edit_categories" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-dark modal-title">Edit Category</h5>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <form action="https://preclinic.dreamstechnologies.com/html/template/blog-categories.html">
                    <div class="modal-body">
                        <div class="mb-2">
                            <label class="form-label">Category Name<span class="text-danger ms-1">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>General Medicine</option>
                                <option>Disease & Conditions</option>
                                <option>Mental Health</option>
                                <option>Patient Education </option>
                                <option>Nutrition & Lifestyle Medicine</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Date<span class="text-danger ms-1">*</span></label>
                            <div class="input-group position-relative">
                                <input type="text"
                                    class="form-control date-range bookingrange rounded-end h-auto py-2 bg-white">
                                <span class="input-icon-addon fs-16 text-gray-9">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Status<span class="text-danger ms-1">*</span></label>
                            <select class="select">
                                <option>Select</option>
                                <option selected>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center gap-1">
                        <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Categories -->
</x-app-layout>
