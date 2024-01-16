<!-- ================= Main ================= -->
<div class="container-fluid">
    <div class="row justify-content-evenly">
        <!-- ================= Timeline ================= -->
        <div class="col-lg-12 pb-5">
            <div class="d-flex flex-column justify-content-center w-100 mx-auto"
                style="padding-top: 56px; max-width: 680px">
                <!-- p 1 -->
                <div class="bg-white p-5 rounded shadow mt-3">
                    <!-- author -->
                    <div class="d-flex justify-content-between">
                        <!-- avatar -->
                        <div class="d-flex">
                            <img src="{{ asset('img/user.png') }}" alt="avatar" class="rounded-circle me-2"
                                style="width: 38px; height: 38px; object-fit: cover" />
                            <div>
                                <p class="m-0 fw-bold">Administrator</p>
                                <span class="text-muted fs-7"></span>
                            </div>
                        </div>
                    </div>
                    <!-- post content -->
                    <div class="mt-3">
                        <!-- content -->
                        <div>
                            <p>
                                {{ $data->judul }} <br>
                                {!! $data->informasi !!}
                            </p>
                            <img src="{{ asset($data->banner_image) }}" alt="post image" class="img-fluid rounded" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
