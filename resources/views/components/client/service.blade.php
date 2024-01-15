<div class="container mt-5">
    <div class="row">
        <!-- -----------x---------- LOOP -------------x------------>
        @forelse ($info as $infor)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="blog-image">
                    <img src="{{ asset($infor->banner_image) }}">
                    <div class="tag bg-primary">blog</div>
                </div>
                <div class="blog-content">
                    <div class="blog-title">{{$infor->judul}}</div>
                    <div class="blog-subtitle">SMK PGRI Telagasari</div>
                    <p class="blog-desc">{{Str::limit($infor->deskripsi_informasi, 100, '.....')}} <a
                            href="{{route('baca', $infor->id)}}">Read
                            More</a></p>
                    <div class="blog-footer">
                        <div class="blog-avatar"><img src="{{asset('img/user.png')}}"></div>
                        <div>
                            <span class="blog-author">Administrator</span>
                            <div class="blog-post">
                                <span><i class="fa fa-clock-o"></i> 6 days ago</span>
                            </div>
                        </div>
                        <button class="btn btn-sm"><i class="fa fa-share-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="d-flex justify-content-center">Tidak Ada Informasi Apapun</div>

        @endforelse
        <!-- -----------x---------- END LOOP -------------x------------>
    </div>
</div>
</body>

</html>

<style>
.blog-image {
    position: relative;
}

.blog-image img {
    width: 100%;
}

.date {
    width: 39px;
    height: 39px;
    border-radius: 50%;
    position: absolute;
    top: 3%;
    right: 3%;
    display: flex;
    align-items: center;
    text-align: center;
    color: #ffffff;
    font-size: 13px;
    line-height: 1;
    font-weight: 500;
}

.tag {
    position: absolute;
    bottom: 0;
    text-align: center;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 500;
    padding: 0 15px;
    color: #ffffff;
}

.blog-content {
    padding: 25px 15px;
}

.blog-title {
    font-size: 18px;
    font-weight: 500;
}

.blog-subtitle {
    font-weight: 400;
    color: #015fc9;
    margin-bottom: 16px;
}

.blog-desc {
    font-size: 14px;
}

.blog-desc a {
    text-decoration: none;
    color: #015fc9;
    font-weight: 500;
}

.blog-footer {
    display: flex;
    align-items: center;
    margin-top: 35px;
}

.blog-author {
    font-size: 14px;
    font-weight: 500;
}

.blog-post {
    font-size: 12px;
    color: #b3b2b2;
}

.blog-avatar {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: block;
    overflow: hidden;
    margin-right: 20px;
}

.blog-avatar img {
    width: 100%;
}

.blog-comment {
    margin-left: 10px;
}

.blog-footer .btn {
    margin-left: auto;
}
</style>