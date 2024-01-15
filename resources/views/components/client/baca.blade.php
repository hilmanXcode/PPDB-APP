<!-- main content start  -->
<div class="container-xxl py-5 mt-5">
    <div class="row main-section">
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card rounded-0 shadow-sm">
                <div class="card-body">
                    <img class="card-img-top" src="" alt="">
                    <hr>
                    <h2 class="card-title">{{ $data->judul }}</h2>
                    <p class="card-text"> {!! $data->informasi !!} </p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col col-sm-10 col-md-10">
                            <div class="form-group">
                                <input type="text" name="comment" class="form-control rounded-0"
                                    value="Komentari tulisan ini">
                            </div>
                        </div>
                        <div class="col col-sm-2 col-md-2">
                            <a href="" type="submit" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card rounded-0 shadow-sm">
                <div class="card-header">
                    Category
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Information</a></li>
                    <li class="list-group-item"><a href="#">School</a></li>
                    <li class="list-group-item"><a href="#">Technology</a></li>
                    <li class="list-group-item"><a href="#">Trending</a></li>
                </ul>
                <div class="card-footer">
                    <p class="text-black">Subscribe to our Newsletter</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <form action="#">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email"
                                placeholder="Your email" required>
                            <a type="submit" href="mailto:info@smkpgritelagasari1.sch.id"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>
