<div class="modal fade" id="selectVideosModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Videos List</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row pd-box">

                    <div class="col-lg-6">
                        <button class="btn btn-primary marg-0-10 btn-sm" id="add-to-module-btn" type="button">Add to
                            Module</button>
                        <button class="btn btn-danger btn-sm" id="clear-all-checkboxes-btn">Clear</button>
                    </div>

                    <div class="col-lg-6 row">
                        <form method="GET">
                            @csrf
                            <div class="col-12 pd-flex">
                                <input type="text" name="search" placeholder="Search..." id="search" class="form-control">
                                <span><button type="submit" class="btn btn-small btn-primary pd-searchBtn"> <i class="fas fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>


                    <!-- table -->

                    <div class="col-lg-12 pd-table-div">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Add</th>
                                    <th scope="col">Video Name</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">File Size</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($videos as $video)
                                <tr id="select-video-row-{{$video->id}}" class="select-video-row">
                                <td class="text-center">
                                    <input type="checkbox" data-video-title="{{$video->title}}" data-video-duration="{{$video->duration}}" class="form-check-input video-add-checkbox" value="{{$video->id}}">
                                </td>
                                <td width="20%">{{$video->title}}</td>
                                <td width="10%">{{$video->course_name}}</td>
                                <td>
                                    @if($video->status)
                                    <span class="badge badge-success badge-md">Active</span>
                                    @else
                                    <span class="badge badge-warning badge-md">InActive</span>
                                    @endif
                                </td>
                                <td>{{$video->duration}}</td>
                                <td>{{$video->size}}</td>
                                <td>
                                    @if($video->value==0)
                                    <span class="badge badge-success badge-md">Free</span>
                                    @else
                                    <span class="badge badge-warning badge-md">Paid</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary video-preview-btn" data-video-title="{{$video->title}}" data-file-name="{{$video->value==0?$video->file_name:asset($video->file_name)}}" data-video-value="{{$video->value==0?'free':'paid'}}">Preview</button>
                                </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary footer-close" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
