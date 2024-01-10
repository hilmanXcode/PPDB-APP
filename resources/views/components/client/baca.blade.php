    <!-- ================= Main ================= -->
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <!-- ================= Sidebar ================= -->
            <div class="col-12 col-lg-3">
                <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrollbar"
                    style="max-width: 360px; width: 100%; z-index: 4">
                    <ul class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5" style="padding-top: 56px">
                        <!-- top -->
                        <!-- avatar -->
                        <li class="dropdown-item p-1 rounded">
                            <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                                <div class="p-2">
                                    <img src="{{asset('img/user.png')}}" alt="" class="rounded-circle me-2"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">Administrator</p>
                                </div>
                            </a>
                        </li>

                        <!-- see more -->
                        <li class="p-1" type="button">
                            <div id="accordionFlushExample">
                                <div>
                                    <!-- see more button -->
                                    <!-- content -->
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div>
                                            <!-- item 1 -->
                                            <!-- item 2 -->
                                            <!-- item 3 -->
                                            <!-- end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <hr class="m-0" />
                        <!-- heading -->
                        <div class="
                  d-flex
                  justify-content-between
                  align-items-center
                  mt-2
                  text-muted
                  edit-heading
                ">
                            <h4 class="m-0 pointer">Recent Post</h4>
                            <a href="{{route('informasi')}}" target="_blank"
                                class="m-0 text-primary me-3 pointer edit-button" type="button" data-bs-toggle="modal"
                                data-bs-target="#shortCutModal">
                                Show all
                            </a>
                            <!-- modal -->
                            <div class="modal fade" id="shortCutModal" tabindex="-1"
                                aria-labelledby="shortCutModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- head -->
                                        <!-- footer -->
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        <!-- short 1 -->
                        @forelse ($data as $infor)
                        <li class="dropdown-item p-1">
                            <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  ">
                                <div class="p-2">
                                    <img src="{{ asset($data->banner_image) }}" alt=""
                                        class="rounded border border-1 border-secondary"
                                        style="width: 38px; height: 38px; object-fit: cover" />
                                </div>
                                <div>
                                    <p class="m-0">{{$data->judul}}</p>
                                </div>
                            </a>
                        </li>
                        @empty

                        @endforelse
                        <!-- see more -->
                        <li class="p-1" type="button">
                            <div id="accordionFlushExample">
                                <div>
                                    <!-- see more button -->
                                    <!-- content -->
                                    <div id="shortModal" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- terms -->
                </div>
            </div>
            <!-- ================= Timeline ================= -->
            <div class="col-12 col-lg-6 pb-5">
                <div class="d-flex flex-column justify-content-center w-100 mx-auto"
                    style="padding-top: 56px; max-width: 680px">
                    <!-- p 1 -->
                    <div class="bg-white p-4 rounded shadow mt-3">
                        <!-- author -->
                        <div class="d-flex justify-content-between">
                            <!-- avatar -->
                            <div class="d-flex">
                                <img src="{{asset('img/user.png')}}" alt="avatar" class="rounded-circle me-2"
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
                                    {{$data->judul}} <br>
                                    {!! $data->informasi !!}
                                </p>
                                <img src="{{ asset($data->banner_image) }}" alt="post image"
                                    class="img-fluid rounded" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================= Chatbar ================= -->
            <div class="col-12 col-lg-3">
                <div class="
              d-none d-xxl-block
              h-100
              fixed-top
              end-0
              overflow-hidden
              scrollbar
            " style="
              max-width: 360px;
              width: 100%;
              z-index: 4;
              padding-top: 56px;
              left: initial !important;
            ">
                    <div class="p-3 mt-4">
                        <!-- sponsors -->
                        <h5 class="text-muted">Sponsored</h5>
                        <!-- s 1 -->
                        <li class="dropdown-item my-2 d-flex justify-content-between">
                            <!-- img -->
                            <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  ">
                                <img src="https://source.unsplash.com/random/1" alt="ads"
                                    style="width: 100px; height: 100px; object-fit: cover" class="rounded me-3" />
                                <div>
                                    <p class="m-0">Lorem ipsum</p>
                                    <span class="text-muted fs-7">loremipsum.com</span>
                                </div>
                            </a>
                        </li>
                        <!-- s 2 -->
                        <li class="dropdown-item my-2 d-flex justify-content-between">
                            <!-- img -->
                            <a href="#" class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  ">
                                <img src="https://source.unsplash.com/random/1" alt="ads"
                                    style="width: 100px; height: 100px; object-fit: cover" class="rounded me-3" />
                                <div>
                                    <p class="m-0">Lorem ipsum</p>
                                    <span class="text-muted fs-7">loremipsum.com</span>
                                </div>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
