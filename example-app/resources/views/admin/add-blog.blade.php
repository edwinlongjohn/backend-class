<x-app-layout>
        <!-- Start Content -->
            <div class="content">

                <!-- start row -->
                <div class="row">

                    <div class="col-lg-10 mx-auto">
                        <div class="mb-3">
                            <h6 class="fw-semibold"><a href="blogs.html"><i class="ti ti-chevron-left me-1"></i>Blogs</a></h6>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">@csrf
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="select" name="category_id">
                                        <option>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea name="description" class="form-control editor"  cols="30" rows="10"></textarea>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tag (optional)</label>
                                    <input class="input-tags form-control" id="inputBox" name="tags" type="text" data-role="tagsinput"  >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Feature Image (optional)</label>
                                    <input class="form-control" name="image" type="file">
                                </div>

                                 <div class="mb-3">
                                    <label class="form-label">Duration</label>
                                    <input class="form-control" name="duration" type="text">
                                </div>

                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                                    <button  class="btn btn-primary">Add Blog</button>
                                </div>

                            </form>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- End Content -->
</x-app-layout>
