<div class="container3">
    <div class="grid_item">
        <div class="box">
            <img src="{{asset('img/study.jpg')}}" alt="">
            <div class="about">
                <h1>long established </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet obcaecati sequi saepe quis non odit iure architecto
                    aliquam unde eos?\
                    Lorem ipsum, dolor sit amet consectetur adipisicing.
                </p>
                <div class="date">
                    <p>06 January 2024</p>
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </div>
    <div class="grid_item">
        <div class="box">
            <img src="{{asset('img/programming.jpg')}}" alt="">
            <div class="about">
                <h1>long established</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet obcaecati sequi saepe quis non odit iure architecto .
                    aliquam unde eos?\
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
                <div class="date">
                    <p>06 January 2024</p>
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </div>
    <div class="grid_item">
        <div class="box">
            <img src="{{asset('img/analysis.jpg')}}" alt="">
            <div class="about">
                <h1>long established</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet obcaecati sequi saepe quis non odit iure architecto
                    aliquam unde eos?\
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <div class="date">
                    <p>06 January 2024</p>
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content start  -->
<div class="container mt-5">
    <div class="row main-section">
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="card rounded-0 shadow-sm">
                <div class="card-header">
                    <span>By</span>
                    <span class="text-success"> Fitra</span>
                    <span>On</span>
                    <span class="text-success"> 06 January 2024</span>
                </div>
                <div class="card-body">
                    <hr>
                    <h2 class="card-title">SMK PGRI Telagasari.</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta
                        nisi ab consequatur fugit obcaecati harum expedita, doloremque dolorem quam aut quas ad
                        amet assumenda. Provident sunt ipsum minima autem.</p>
                    <a href="{{route('blogpost')}}" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">
                                1
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card rounded-0 shadow-sm">
                <div class="card-header">
                    Category
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Social</a></li>
                    <li class="list-group-item"><a href="#">Education</a></li>
                    <li class="list-group-item"><a href="#">Technology</a></li>
                    <li class="list-group-item"><a href="#">Popular</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.container {
    display: flex;
    padding: 20px 0px;
    justify-content: center;
    align-items: center;
}

.content {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 50px;
    padding-left: 20px;
}

.content h1 {
    font-size: 100px;
    font-weight: 600;
}

.heading {
    padding-top: 60px;
}

.content p {
    text-transform: capitalize;
    font-size: 25px;
    padding: 22px 5px;
    color: rgb(78, 78, 78);
}

.image img {
    width: 750px;
    border-radius: 40px;
}

.container2 {
    display: flex;
    margin: 2rem 2rem;
    box-shadow: 0px 5px 4px rgba(221, 221, 221, 0.25);
    align-items: center;
    border: 2px solid #e2e2e2;
    border-radius: 0.5rem;
    overflow: hidden;
    transition: 0.2s ease-in-out;
}

.container2:hover {
    transform: scale(1.05);
    box-shadow: 0px 5px 4px rgba(190, 190, 190, 0.3);
    transition: 0.2s ease-in-out;
}

.content2 {
    padding: 3rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.content2 p {
    color: rgb(78, 78, 78);
    line-height: 1.5;
}

.date {
    display: flex;
    justify-content: space-between;
}

.date p {
    padding: 5px 0px;
}

.date button {
    all: unset;
    font-weight: 600;
    padding: 5px 0px;
    border-bottom: 2px solid transparent;
}

.date button:hover {
    border-bottom: 2px solid #ccc;
}

.image2 img {
    width: 520px;
}

.box {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    box-shadow: 0px 5px 4px rgba(221, 221, 221, 0.25);
    align-items: center;
    border: 2px solid #e2e2e2;
    border-radius: 0.7rem;
    overflow: hidden;
    transition: 0.2s ease-in-out;
}

.box:hover {
    transform: scale(1.05);
    box-shadow: 0px 5px 4px rgba(190, 190, 190, 0.3);
    transition: 0.2s ease-in-out;
}

.container3 {
    margin: 45px auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(370px, 1fr));
    transition: 0.2s ease-in-out;
}

.grid_item {
    display: inline-flex;
    justify-content: center;
}

.box img {
    width: 50%;
    height: 50%;
}

.about {
    padding: 2.2rem;
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
}

.about p {
    color: rgb(78, 78, 78);
    line-height: 1.5;
}

.container4 {
    display: flex;
    margin: 2rem 2rem;
    box-shadow: 0px 5px 4px rgba(221, 221, 221, 0.25);
    align-items: center;
    border: 2px solid #e2e2e2;
    border-radius: 0.5rem;
    overflow: hidden;
    background-color: rgb(242, 252, 255);
    transition: 0.2s ease-in-out;
}

.container4:hover {
    transform: scale(1.02);
    box-shadow: 0px 5px 4px rgba(190, 190, 190, 0.3);
    transition: 0.2s ease-in-out;
}

.content4 {
    padding: 3rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.content4 h1 {
    font-size: 80px;
    padding-left: 20px;
    width: 600px;
}

.content4 p {
    color: rgb(78, 78, 78);
    line-height: 2;
    padding-left: 20px;
}

.image3 img {
    width: 650px;
}

.link {
    display: flex;
    flex-direction: row-reverse;
    padding: 10px 30px;
    margin-bottom: 20px;
}

.link button {
    padding: 8px;
    background-color: rgb(132, 0, 255);
    border: none;
    border-radius: 5px;
    display: flex;
    transition: 0.2s ease-in-out;
}

.link button:hover {
    transform: scale(1.05);
    box-shadow: 3px 5px 5px rgba(1, 1, 1, 0.3);
    transition: 0.2s ease-in-out;
}

.link button:hover {
    cursor: pointer;
    background-color: blue;
}

.link a {
    font-size: 14px;
    text-decoration: none;
    font-weight: 600;
    color: whitesmoke;
}

.link i {
    font-size: 17px;
    text-decoration: none;
    font-weight: 600;
    color: whitesmoke;
    padding-left: 8px;
}
</style>