<x-layout>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Our Products</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="{{route('products.index')}}" class="btn btn-secondary py-md-3 px-md-5">Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Fresh food from the Farm</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="mb-3">Vegetable</h6>
                        <h5 class="text-primary mb-0"></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <h6 class="mb-3">Vegetable</h6>
                        <h5 class="text-primary mb-0"></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="mb-3">Fruits</h6>
                        <h5 class="text-primary mb-0"></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <h6 class="mb-3">Vegetable</h6>
                        <h5 class="text-primary mb-0"></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="mb-3">Organic Vegetable</h6>
                        <h5 class="text-primary mb-0"></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 mt-5" style="margin-bottom: 135px;">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <h6 class="text-uppercase text-secondary">Features</h6>
                <h1 class="display-5 text-white">Why Choose Us!!!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-seedling fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">
                            Empower & Support to Farmers</h4>
                        <p class="mb-0">We aim to empower farmers by providing them with a digital platform to showcase their products, expand their customer base, and earn fair prices for their hard work</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Award Winning</h4>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p>Unlock a world of flavor and freshness with us. Embrace quality, convenience, and community as we bring you handpicked, locally sourced produce straight to your doorstep. Join our passionate community of farmers, food enthusiasts, and sustainability champions as we redefine the way you experience food—one delicious bite at a time.</p>
                        <img class="img-fluid" src="img/feature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-tractor fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Modern and sustainable Farming</h4>
                        <p class="mb-0">We're dedicated to promoting sustainable farming practices and supporting local agriculture, ensuring the long-term health of our planet and communities.</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">24/7 Support</h4>
                        <p class="mb-0">We strive to educate consumers about the importance of knowing where their food comes from and the impact of their purchasing decisions on the environment and local economies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">pioneer int university</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">chepbrinner@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+254720998826</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Newsletter</h4>
                        <h6 class="text-white">Subscribe Our Newsletter</h6>
                        <p>To receive emails and new updates</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Farmersconnect.com</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="https://htmlcodex.com">piuinnovationlab</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</x-layout>