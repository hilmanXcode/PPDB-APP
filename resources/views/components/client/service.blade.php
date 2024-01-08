<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            @forelse($info as $infor)
            <!-- -----------x---------- Site Content -------------x------------>
            <section id="blog">
                <!-- HEADING -->
                <div class="blog-heading">
                    <span>Recent Post</span>
                    <h3>All Blogs</h3>
                </div>
                <!-- BLOG CONTENT -->
                <div class="blog-container">
                    <!-- BOX 1-->
                    <div class="blog-box">
                        <!-- IMG -->
                        <div class="blog-img">
                            <img src="{{asset('img/education.jpg')}}" alt="">
                        </div>
                        <!-- DESC -->
                        <div class="blog-text">
                            <span>07 January 2024</span>
                            <a href="#" class="blog-title">{{$infor->judul}}</a>
                            <p> {{Str::limit($infor->deskripsi_informasi, 100, '.....')}}</p>
                            <a href="{{route('baca', $infor->id)}}">Read More</a>
                        </div>
                    </div>
                </div>

            </section>
            <!-- -----------x---------- Site Content -------------x------------>
            @empty
            <div class="d-flex justify-content-center">Tidak Ada Informasi Apapun</div>
            @endforelse
        </div>
    </div>
</div>

<style>
#blog {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.blog-heading {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.blog-heading span {
    color: #015fc9;
}

.blog-heading h3 {
    font-size: 2.4rem;
    font-weight: 600;
    color: #2b2b2b;
}

.blog-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0px;
    flex-wrap: wrap;
}

.blog-box {
    width: 350px;
    background-color: white;
    border: 1px solid #ececec;
    margin: 20px;
}

.blog-img {
    width: 100%;
    height: auto;
}

.blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.blog-text {
    padding: 30px;
    display: flex;
    flex-direction: column;
}

.blog-text span {
    color: #015fc9;
    font-size: 0.9rem;
}

.blog-text .blog-title {
    font-size: 1.3rem;
    font-weight: 500;
    color: #272727;

}

.blog-text .blog-title:hover {
    color: #015fc9;
    transition: all ease 0.3s;
}

.blog-text p {
    color: #9b9b9b;
    font-size: 0.9rem;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 20px 0px;
}

.blog-text a {
    color: #0f0f0f;
}

.blog-text a:hover {
    color: #015fc9;
    transition: all ease 0.3s;
}

@media(max-width:1250px) {
    .blog-box {
        width: 300px;
    }
}

@media(max-width:1100px) {
    .blog-box {
        width: 70%;
    }
}

@media(max-width:550px) {
    .blog-box {
        width: 100%;
        margin: 20px 10px;
    }

    #blog {
        padding: 20px;
    }
}
</style>